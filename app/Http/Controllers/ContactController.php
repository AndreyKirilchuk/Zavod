<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function sendMessage(Request $request){

        $token = env('TELEGRAM_BOT_TOKEN');
        $chat_id = env('TELEGRAM_CHAT_ID');

        $arr = [
            'Имя:' => $request->name,
            'Email:' => $request->email,
            'Текст:' => $request->text,
        ];

        $txt = "<b>"."У вас новое сообщение!"."</b>"."%0A"."%0A";
        foreach ($arr as $key => $value){
            $txt .= "<b>".$key."</b>"." ".$value."%0A%0A";
        }

        $client = new \GuzzleHttp\Client();
        $response = $client->get("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=HTML&text={$txt}");

        return redirect()->back();
    }
}
