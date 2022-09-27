<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Product;
use App\Models\Publisher;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public $data;
    public function index(Request $request){
        $products=Product::with('genre')->with('publisher');
        $genres=Genre::all();
        $publishers=Publisher::all();

        if($request->search){
            $products=$products->where('name','like','%'.$request->search.'%');

        }
        if($request->genres){
            $products = $products->whereHas('genre', function($query) use ($request){
                return $query->whereIn('genre_id', $request->genres);
            });
        }
        if($request->publishers){
            $products = $products->whereHas('publisher', function($query) use ($request){
                return $query->whereIn('publisher_id', $request->publishers);
            });
        }

        if($request->priceFrom){
            $products=$products->where('price','>=',$request->priceFrom);

        }
        if($request->priceTo){
            $products=$products->where('price','<=',$request->priceTo);

        }
        switch ($request->sort){
            case('priceAsc'):$products = $products->orderBy('price', 'asc');
            case('priceDesc'):$products = $products->orderBy('price', 'desc');
            case('nameAsc'):$products = $products->orderBy('name', 'asc');
            case('nameDesc'):$products = $products->orderBy('name', 'desc');

        }

        $this->data["products"] = $products->paginate(6);
        $this->data["genres"]=$genres;
        $this->data["publishers"]=$publishers;
        return view('pages.products',$this->data);
    }

    public function show(Product $product){
        $this->data["product"]=$product;
        return view('pages.show', $this->data);
    }
}


