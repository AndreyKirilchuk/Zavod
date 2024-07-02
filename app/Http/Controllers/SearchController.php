<?php

namespace App\Http\Controllers;

use App\Models\Tovar;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request){
        $search = $request->search;

        $tovars = Tovar::where('name', 'like', "%{$search}%")->get();

        return view('pages/search', ['tovars' => $tovars]);
    }
}
