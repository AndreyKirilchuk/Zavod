<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Tovar;
use Illuminate\Http\Request;

class TovarController extends Controller
{
    public function index($id)
    {
        $tovar = Tovar::find($id);
        $category = Category::where('id', $tovar->category_id)->first();

        return view('pages/tovar', ['tovar' => $tovar], ['category' => $category]);
    }

    public function showTovars(Request $request, $id){

        $tovars = Tovar::where('category_id', $id)->get();
        $category = Category::find($id);

        $tovars = Tovar::where('category_id', $id); // Start building the query

        switch ($request->sort) {
            case 'name_asc':
                $tovars->orderBy('name', 'asc');
                break;
            case 'name_desc':
                $tovars->orderBy('name', 'desc');
                break;
            case 'price_asc':
                $tovars->orderBy('price', 'asc');
                break;
            case 'price_desc':
                $tovars->orderBy('price', 'desc');
                break;
            default: // Default sort
                $tovars->orderBy('name', 'asc');
        }


        $tovars = $tovars->paginate(100);

        return view('pages/tovars', ['tovars' => $tovars], ['category' => $category]);
    }

    public function allTovars(Request $request)
    {
        $sort = $request->sort;

        $tovars = Tovar::Query();
        $categories = Category::all();


        if ($sort === 'name_asc') {
            $tovars->orderBy('name', 'asc');
        } elseif ($sort === 'name_desc') {
            $tovars->orderBy('name', 'desc');
        } elseif ($sort === 'price_asc') {
            $tovars->orderBy('price', 'asc');
        } elseif ($sort === 'price_desc') {
            $tovars->orderBy('price', 'desc');
        } else{
            $tovars->orderBy('name', 'asc');
        }

        $tovars = $tovars->paginate(100);

        return view('pages/alltovars', ['tovars' => $tovars], ['categories' => $categories]);
    }
}
