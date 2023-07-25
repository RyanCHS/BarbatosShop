<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

        $products = product::all();
        $categories = category::all();

        $data = [
            'products' => $products,
            'categories' => $categories
        ];

        return view('home', $data);
    }

    public function productDetail(int $product_id = 0){
        
        $products = product::where('id', $product_id)->get();

        $data =[
            'products' => $products
        ];


        return view('productDetail', $data);
    }

    public function productCategory(int $category_id = 0){

        $products = product::where('category_id', $category_id)->paginate(10)->withQueryString();
        $categories = category::where('id', $category_id)->get();

        $data =[
            'products' => $products,
            'categories' => $categories,   
        ];

        return view ('productCategory', $data);
    }

    public function search_post(Request $request){
        $name = $request->search;
        $products = product::where('name', 'LIKE', "%$name%")->get();
        $data =[
            'products' => $products
        ];
        return view('search', $data)->with('name', $name);
    }

}

