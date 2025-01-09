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

    public function __construct()
    {
        $httpClient = new CurlHTTPClient(env('LINE_ACCESS_TOKEN'));
        $this->bot = new LINEBot($httpClient, ['channelSecret' => env('LINE_CHANNEL_SECRET')]);
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
        $request->validate([
            'user_id' => 'required|string',
            'message' => 'required|string',
        ]);

        // User ID ที่ต้องการส่งข้อความหา
        $userId = $request->input('user_id'); // หรือกำหนดเป็นค่าโดยตรง
        $message = $request->input('message', 'Hello from Default!'); // ข้อความที่ต้องการส่ง

        // สร้างข้อความที่ต้องการส่ง
        $textMessageBuilder = new TextMessageBuilder($message);
        $response = $this->bot->pushMessage($userId, $textMessageBuilder);

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
}
