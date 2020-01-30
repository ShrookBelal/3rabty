<?php

namespace App\Http\Controllers\website\subadmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\category;
use App\product;
use Auth;
use App\Http\Requests\Backend\Videos\Update;

class adminproduct extends Controller
{

    public function create()
    {
        $categories = category::get();
        return view('website.subadmin.products.create', compact('categories'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|max:255',
        ]);

        $product = new product();
        $product->name = $request->name;
        $product->color = $request->color;
        $product->price = $request->price;
        $product->details = $request->details;
        $product->category_id = $request->category_id;

        $file = $request->file('image');
        $fileName = time() . str_random('10') . '.' . $file->getClientOriginalExtension();
        $file->move(base_path('/resources/assets/uploads/recource'), $fileName);
        $product->image = $fileName;

        $product->save();
        return redirect()->route('product');
    }


    public function update($id, Request $request)
    {
        $row = product::FindOrFail($id);
        $requestArray = $request->all();
        $row->update($requestArray);


        return redirect()->route('adminproducts.edit', ['id' => $row->id]);
    }



    public function edit($id)
    {
        $categories = category::get();
        $row = product::FindOrFail($id);
        return view('website.subadmin.products.edit', compact('row', 'categories'));
    }

    public function destroy($id)
    {
        product::FindOrFail($id)->delete();
        return redirect()->route('adminproduct');
    }


    public function index()
    {
        $rows = product::where('user_id', Auth::user()->id)->get();


        return view('website.subadmin.products.index', compact('rows'));
    }
}
