<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ShoppingController extends Controller
{
    private $categories;
    
    public function index()
    {  
        
        return view('front.home.home' );
    }

    public function categoryProduct()
    {
        $this->featured_products = Product::orderBy('id', 'desc')->take(6)->get();
        return view('front.category.category-product', ['featured_products' => $this->featured_products]);
    }

    public function productDetail()
    {
        return view('front.product.detail',);
    }
}
