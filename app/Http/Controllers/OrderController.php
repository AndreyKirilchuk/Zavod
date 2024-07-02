<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        if(auth()){
            $user = Auth::user();
            return view('pages/order', compact('user'));
            }else{
                return view('pages/order');
            }
    }

    public function create(Request $request)
    {
        if(1 === 1){

            $orderItems = '';
            $totalPrice = 0;

            $token = env('TELEGRAM_BOT_TOKEN');
            $chat_id = env('TELEGRAM_CHAT_ID');
            $cart = $request->session()->get('cart', []);
            foreach($cart as $item){
                $totalPrice += $item['price'] * $item['quantity'];
                $orderItems .= '%0A'.$item['name'] . ' - по '. $item['price']. 'руб. '. $item['quantity'].'шт.';
            }

            $totalPrice = number_format($totalPrice, 0, '.', ' ');
            $orderItems = rtrim($orderItems, ",");

            $arr = [
                'Имя:' => $request->name,
                'Фамилия:' => $request->lastname,
                'Email:' => $request->email,
                'Телефон:' => $request->number,
                'Город:' => $request->city,
                'Адрес:' => $request->adress,
                'Комментарий:' => $request->comment,
                'Товары в заказе:' => $orderItems,
                'Сумма заказа:' => '%0A'.$totalPrice.'руб.',
            ];

            $txt = "<b>"."У вас новый заказ!"."</b>"."%0A"."%0A";
            foreach ($arr as $key => $value){
                $txt .= "<b>".$key."</b>"." ".$value."%0A%0A";
            }

            $client = new \GuzzleHttp\Client();
            $response = $client->get("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=HTML&text={$txt}");

            if(Auth::guard('web')->check()){
                $user = Auth::user();

                foreach($cart as $cart_item){
                    $order = Order::create([
                        'tovar_id' => $cart_item['id'],
                        'name' => $cart_item['name'],
                        'price' => $cart_item['price'],
                        'quantity' => $cart_item['quantity'],
                        'total_price' => $cart_item['price'] * $cart_item['quantity'],
                        'user_id' => $user->id,
                    ]);
                }
            }

            $complete = [
                'name' => $request->name,
                'lastname' => $request->lastname,
                'email' => $request->email,
                'number' => $request->number,
                'city' => $request->city,
                'adress' => $request->adress,
                'comment' => $request->comment,
                'cart' => $cart,
                'totalPrice' => $totalPrice,
            ];

            $request->session()->forget('cart');

            return view('pages/complete', ['complete' => $complete]);

        }else{
            return view('pages/error');
        }
    }
}
