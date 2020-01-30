<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::where('category_id', 1)->get();
        $top = Product::orderBy('price', 'ASC')->limit(4)->get();
        return view('website.products', compact('products', 'top'));
    }
    public function showParts()
    {
        $parts = Product::where('category_id', 2)->get();
        $top = Product::where('category_id', 2)->orderBy('price', 'ASC')->limit(4)->get();
        return view('website.parts', compact('parts', 'top'));
    }

    public function showPart($id)
    {
        $product = Product::where('id', $id)->get();
        $top = Product::where('category_id', 2)->orderBy('price', 'ASC')->limit(4)->get();

        return view('website.product', compact('product', 'top'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::where('id', $id)->get();
        $top = Product::orderBy('price', 'ASC')->limit(4)->get();

        return view('website.product', compact('product', 'top'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
