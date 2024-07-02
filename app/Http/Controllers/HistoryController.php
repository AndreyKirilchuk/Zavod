<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HistoryController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $history = Order::where('user_id', $user->id)->get();

        return view('pages/history', ['history' => $history]);
    }
}
