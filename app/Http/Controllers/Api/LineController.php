<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
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
        $temp = $validatedData['temp'] ?? 'N/A';
        $HR = $validatedData['HR'] ?? 'N/A';
        $Sys = $validatedData['Sys'] ?? 'N/A';
        $Dis = $validatedData['Dis'] ?? 'N/A';
        $status = $validatedData['status'] ?? 'N/A';

        // กำหนดข้อความที่ต้องการส่ง
        $message = $this->buildMessage($type, $temp, $HR, $Sys, $Dis, $status);

        // ส่งข้อความธรรมดาไปยัง LINE
        //$result = $this->sendTextMessage($userId, $message);

        // User ID ที่ต้องการส่งข้อความหา
        //$userId = $request->input('user_id'); // ไอดีของผู้ใช้งาน
        //$message = $request->input('message', 'Hello from Default!'); // ข้อความที่ต้องการส่ง

        // สร้างข้อความที่ต้องการส่ง
        $textMessageBuilder = new TextMessageBuilder($message);
        $response = $this->bot->pushMessage($userId, $textMessageBuilder);

        $flexDataJson = '{
            "type": "flex",
            "altText": "This is a Flex Message",
            "contents": {
                "type": "bubble",
                "direction": "ltr",
                "header": {
                    "type": "box",
                    "layout": "vertical",
                    "contents": [
                        {
                            "type": "text",
                            "text": "Header",
                            "align": "center"
                        }
                    ]
                },
                "hero": {
                    "type": "image",
                    "url": "https://www.w3schools.com/w3css/img_lights.jpg",
                    "size": "full",
                    "aspectRatio": "1.51:1",
                    "aspectMode": "fit"
                },
                "body": {
                    "type": "box",
                    "layout": "vertical",
                    "contents": [
                        {
                            "type": "text",
                            "text": "Body",
                            "align": "center"
                        }
                    ]
                }
            }
        }';
        unset($datas);
        unset($messages);
        $flexDataJsonDeCode = json_decode($flexDataJson,true);
        $datas['url'] = "https://api.line.me/v2/bot/message/push";
        $datas['token'] = $this->channelAccessToken;
        $messages['to'] = "$userId";
        $messages['messages'][] = $flexDataJsonDeCode;
        $encodeJson = json_encode($messages);

        $this->sendLine($encodeJson,$datas);

        // ตรวจสอบผลลัพธ์การส่งข้อความ
        if ($response->isSucceeded()) {
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
