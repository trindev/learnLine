<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\HealthReport;
use Illuminate\Http\Response;
use LINE\LINEBot;
use LINE\LINEBot\HTTPClient\CurlHTTPClient;
use LINE\LINEBot\MessageBuilder\TextMessageBuilder;

class LineController extends Controller
{
    private $bot;
    protected $channelAccessToken;

    public function __construct()
    {
        $httpClient = new CurlHTTPClient(env('LINE_ACCESS_TOKEN'));
        $this->bot = new LINEBot($httpClient, ['channelSecret' => env('LINE_CHANNEL_SECRET')]);
        $this->channelAccessToken = env('LINE_ACCESS_TOKEN');
    }

    public function index()
    {

        return response()->json([
            'success' => true,
            'message' => 'This is a custom message.',
        ], Response::HTTP_OK);
    }

    public function getUsers()
    {
        // ดึงข้อมูลผู้ใช้งานทั้งหมด
        $users = User::all();

        // ส่งข้อมูลในรูปแบบ JSON
        return response()->json([
            'success' => true,
            'data' => $users
        ], Response::HTTP_OK);
    }
    public function sendMessage(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|string',
            'type' => 'required|integer',
            'temp' => 'nullable|string',
            'HR' => 'nullable|string',
            'Sys' => 'nullable|string',
            'Dis' => 'nullable|string',
            'status' => 'nullable|string',
        ]);

        $userId = $validatedData['user_id'];
        $type = $validatedData['type'];
        $data = [
            'temp' => $validatedData['temp'] ?? 'N/A',
            'HR' => $validatedData['HR'] ?? 'N/A',
            'Sys' => $validatedData['Sys'] ?? 'N/A',
            'Dis' => $validatedData['Dis'] ?? 'N/A',
            'status' => $validatedData['status'] ?? 'N/A',
        ];

        // บันทึกข้อมูลลงฐานข้อมูล
        if (!$this->saveData($userId, $data['temp'], $data['HR'], $data['Sys'], $data['Dis'], $data['status'])) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to save health data.',
            ], 500);
        }

        // สร้าง Flex Message
        $flexDataJson = $this->createFlexMessage($type, $data);

        $datas = [
            'url' => "https://api.line.me/v2/bot/message/push",
            'token' => $this->channelAccessToken,
        ];

        $messages = [
            'to' => $userId,
            'messages' => [json_decode($flexDataJson, true)],
        ];

        $response = $this->sendLine(json_encode($messages), $datas);

        // ตรวจสอบผลลัพธ์การส่งข้อความ
        if ($response) {
            return response()->json([
                'status' => 'success',
                'message' => 'Message sent successfully.',
            ], 200);
        }

        return response()->json([
            'status' => 'error',
            'message' => $response->getRawBody(),
        ], 500);
    }

    private function createFlexMessage($type, $data)
    {
        switch ($type) {
            case 1:
                return json_encode([
                    'type' => 'flex',
                    'altText' => 'Health Monitoring: Temperature',
                    'contents' => [
                        'type' => 'bubble',
                        'direction' => 'ltr',
                        'header' => [
                            'type' => 'box',
                            'layout' => 'vertical',
                            'contents' => [
                                [
                                    'type' => 'text',
                                    'text' => 'Temperature Report',
                                    'weight' => 'bold',
                                    'size' => 'lg',
                                    'align' => 'center',
                                    'color' => '#1DB446',
                                ]
                            ]
                        ],
                        'body' => [
                            'type' => 'box',
                            'layout' => 'vertical',
                            'contents' => [
                                $this->createFlexRow('Temperature', $data['temp'] . '°C', '#FF6B6B'),
                                ['type' => 'separator', 'margin' => 'md'],
                                $this->createFlexRow('Status', $data['status'], '#1DB446'),
                            ],
                            'spacing' => 'md',
                        ],
                        'footer' => [
                            'type' => 'box',
                            'layout' => 'vertical',
                            'contents' => [
                                [
                                    'type' => 'text',
                                    'text' => 'Monitor your health with us',
                                    'align' => 'center',
                                    'size' => 'sm',
                                    'color' => '#888888',
                                ]
                            ]
                        ]
                    ]
                ]);
            case 2:
                return json_encode([
                    'type' => 'flex',
                    'altText' => 'Health Monitoring: SPO2 & HR',
                    'contents' => [
                        'type' => 'bubble',
                        'direction' => 'ltr',
                        'header' => [
                            'type' => 'box',
                            'layout' => 'vertical',
                            'contents' => [
                                [
                                    'type' => 'text',
                                    'text' => 'Health Report',
                                    'weight' => 'bold',
                                    'size' => 'lg',
                                    'align' => 'center',
                                    'color' => '#1DB446',
                                ]
                            ]
                        ],
                        'body' => [
                            'type' => 'box',
                            'layout' => 'vertical',
                            'contents' => [
                                $this->createFlexRow('SPO2', $data['temp'] . '%', '#FF6B6B'),
                                ['type' => 'separator', 'margin' => 'md'],
                                $this->createFlexRow('HR', $data['HR'] . ' bpm', '#FF6B6B'),
                                ['type' => 'separator', 'margin' => 'md'],
                                $this->createFlexRow('Status', $data['status'], '#1DB446'),
                            ],
                            'spacing' => 'md',
                        ],
                        'footer' => [
                            'type' => 'box',
                            'layout' => 'vertical',
                            'contents' => [
                                [
                                    'type' => 'text',
                                    'text' => 'Monitor your health with us',
                                    'align' => 'center',
                                    'size' => 'sm',
                                    'color' => '#888888',
                                ]
                            ]
                        ]
                    ]
                ]);
            case 3:
                return json_encode([
                    'type' => 'flex',
                    'altText' => 'Health Monitoring: Blood Pressure & HR',
                    'contents' => [
                        'type' => 'bubble',
                        'direction' => 'ltr',
                        'header' => [
                            'type' => 'box',
                            'layout' => 'vertical',
                            'contents' => [
                                [
                                    'type' => 'text',
                                    'text' => 'Blood Pressure Report',
                                    'weight' => 'bold',
                                    'size' => 'lg',
                                    'align' => 'center',
                                    'color' => '#1DB446',
                                ]
                            ]
                        ],
                        'body' => [
                            'type' => 'box',
                            'layout' => 'vertical',
                            'contents' => [
                                $this->createFlexRow('Systolic', $data['Sys'] . ' mmHg', '#FF6B6B'),
                                ['type' => 'separator', 'margin' => 'md'],
                                $this->createFlexRow('Diastolic', $data['Dis'] . ' mmHg', '#FF6B6B'),
                                ['type' => 'separator', 'margin' => 'md'],
                                $this->createFlexRow('HR', $data['HR'] . ' bpm', '#FF6B6B'),
                            ],
                            'spacing' => 'md',
                        ],
                        'footer' => [
                            'type' => 'box',
                            'layout' => 'vertical',
                            'contents' => [
                                [
                                    'type' => 'text',
                                    'text' => 'Monitor your health with us',
                                    'align' => 'center',
                                    'size' => 'sm',
                                    'color' => '#888888',
                                ]
                            ]
                        ]
                    ]
                ]);
            default:
                return '{}';
        }
    }

    private function createFlexRow($label, $value, $color)
    {
        return [
            'type' => 'box',
            'layout' => 'baseline',
            'contents' => [
                [
                    'type' => 'text',
                    'text' => $label,
                    'flex' => 2,
                    'weight' => 'bold',
                    'size' => 'md',
                    'color' => '#000000',
                ],
                [
                    'type' => 'text',
                    'text' => $value,
                    'flex' => 3,
                    'align' => 'end',
                    'weight' => 'bold',
                    'size' => 'md',
                    'color' => $color,
                ]
            ]
        ];
    }


    private function saveData($userId, $temp, $HR, $Sys, $Dis, $status)
    {
        try {
            $user = User::Where('provider_id', $userId)->first();
            if (!$user) {
                return false;
            }
            $id = $user->id;
            // บันทึกข้อมูลโดยใช้ Model
            HealthReport::create([
                'user_id' => $id,
                'temp' => $temp,
                'heart_rate' => $HR,
                'systolic' => $Sys,
                'diastolic' => $Dis,
                'status' => $status,
            ]);

            return true;
        } catch (\Exception $e) {
            \Log::error("Failed to save health data: " . $e->getMessage());
            return false;
        }
    }

    private function sentMessage($lid,$msg)

    {

        $httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient(env('LINE_ACCESS_TOKEN'));
        $bot = new \LINE\LINEBot($httpClient, ['channelSecret' => env('LINE_CHANNEL_SECRET')]);

        $textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($msg);

        $response = $bot->pushMessage($lid, $textMessageBuilder);

    }

    private function sendLine ($encodeJson,$datas)
    {
        $datasReturn = [];
        $curl = curl_init();
        curl_setopt_array($curl, array(

            CURLOPT_URL => $datas['url'],
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $encodeJson,
            CURLOPT_HTTPHEADER => array(

                "authorization: Bearer ".$datas['token'],
                "cache-control: no-cache",
                "content-type: application/json; charset=UTF-8",

            ),
        ));

        $response = curl_exec($curl);
        // dd($response);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            $datasReturn['result'] = 'E';
            $datasReturn['message'] = $err;
        } else {
            if($response == "{}"){
                $datasReturn['result'] = 'S';
                $datasReturn['message'] = 'Success';
            }else{
                $datasReturn['result'] = 'E';
                $datasReturn['message'] = $response;
            }
        }

        return $datasReturn;

    }

    private function buildMessage($type, $temp, $HR, $Sys, $Dis, $status)
    {
        if ($type === 1) {
            return "Health Report:\n" .
                "Temperature: {$temp}°C\n" .
                "Heart Rate: {$HR} bpm\n" .
                "Systolic: {$Sys}\n" .
                "Diastolic: {$Dis}\n" .
                "Status: {$status}";
        }

        return "Unknown type.";
    }
}
