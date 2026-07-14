<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('website.apps.product.all-products');
    }
    public function AddProduct()
    {
        return view('website.apps.product.add-products');
    }
}
