<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Tovar;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index()
    {
        return view('pages/catalog', ['categories' => Category::all()], ['tovars' => Tovar::all()]);
    }
}
