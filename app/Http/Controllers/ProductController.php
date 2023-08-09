<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * List all products
     */
    public function index()
    {
        return view('product-list')->with([
            'locale' => app()->getLocale(),
            'page_title' => 'Products',
            'meta_description' => null,
            'products' => Product::All()
        ]);
    }

    /**
     * Single product page
     */
    public function detail()
    {
        $product = Product::whereHas('product_translations', function($query){
            $query->where('locale', app()->getLocale())
            ->where('slug', request()->segment(2));
        })->firstOrFail();

        return view('product-detail')->with([
            'locale' => app()->getLocale(),
            'page_title' => $product->page_title,
            'meta_description' => $product->meta_description,
            'product' => $product
        ]);
    }
}