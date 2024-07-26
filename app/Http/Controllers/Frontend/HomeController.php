<?php

namespace App\Http\Controllers\Frontend;

use App\Models\MarketingTestimonial;
use App\Models\TPNMain\Product;

class HomeController
{
    public function index()
    {
        $testimonials = MarketingTestimonial::with(['media'])->get();
        //dd($testimonials);
        return view('frontend.pages.home', compact('testimonials'));
    }

    public function products()
    {
        $product = Product::all();
        dd($product);
    }
}
