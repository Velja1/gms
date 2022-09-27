<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Genre;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Prunable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public $data;
    public function index(){
        $products=Product::take(6)->orderBy('release_date','desc')->get();
        $this->data["products"]=$products;
        return view('pages.index',$this->data);
    }
    public function about(){
        return view('pages.about');
    }
}


