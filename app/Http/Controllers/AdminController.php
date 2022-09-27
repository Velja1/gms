<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Models\Category;
use App\Models\Genre;
use App\Models\Product;
use App\Models\Publisher;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Psy\Util\Json;

class AdminController extends Controller
{
    public $data;

    public function index(){
        $products=Product::all();
        $genre=Genre::all();
        $publishers=Publisher::all();
        $categories=Category::all();

        $this->data["products"]=$products;
        $this->data["genres"]=$genre;
        $this->data["publishers"]=$publishers;
        $this->data["categories"]=$categories;

        $this->data["latestProducts"]=Product::orderBy('release_date','desc')->take(5)->get();
        $this->data["publisherNumber"]=$publishers->count();
        $this->data["productNumber"]=$products->count();
        $this->data["genreNumber"]=$genre->count();
        $this->data["avgPrice"]=round($products->average('price'));
        return view('pages.admin',$this->data);
    }

    public function store(ProductStoreRequest $request){

        try{
            $product=new Product();

            $product->name=$request->name;
            $product->price=$request->price;
            $product->description=$request->description;
            $product->imageLink=$request->imageLink;
            $product->release_date=$request->releaseDate;
            $product->genre_id=$request->genre;
            $product->publisher_id=$request->publisher;
            $product->category_id=$request->category;

            $product->save();

            return redirect()->route('admin')->with('success','Successfully added product');
        }
        catch(Exception $ex){
            return redirect()->route('admin')->with('error', 'Error: '.$ex->getMessage().', try again');
        }
    }

    public function update(){
        $id=$_GET["id"];
        $product=Product::where('id',$id)->get();
        return $product;
    }

    public function updateStore(ProductUpdateRequest $request){

        try{
            $product=Product::find($request->productUpdate);
            $product->name=$request->nameUpdate;
            $product->price=$request->priceUpdate;
            $product->description=$request->descriptionUpdate;
            $product->imageLink=$request->imageLinkUpdate;
            $product->release_date=$request->releaseDateUpdate;
            $product->genre_id=$request->genreUpdate;
            $product->publisher_id=$request->publisherUpdate;
            $product->category_id=$request->categoryUpdate;

            $product->save();

            return redirect()->route('admin')->with('successUpdate','Successfully updated product');
        }
        catch(Exception $ex){
            return redirect()->route('admin')->with('errorUpdate', 'Error: '.$ex->getMessage().', try again');
        }
    }

    public function deleteStore(Request $request){
        try {

            $product = Product::find($request->productDelete);
            $product->delete();

            return redirect()->route('admin')->with('successDelete','Successfully deleted product');

        }
        catch (Exception $ex){
            return redirect()->route('admin')->with('errorDelete', 'Error: '.$ex->getMessage().', try again');

        }
    }
}
