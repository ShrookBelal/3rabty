<?php

namespace App\Http\Controllers\BackEnd;
 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\category;
use App\product;
class Products extends Controller
{
public function create(){
    $categories=category::get();
       return view('back-end.products.create',compact('categories'));
      
    } 

     public function store(Request $request){
        
        $request->validate([
            'name' => 'required|max:255',
             
           
        ]);

    $product=new product();
      $product->name=$request->name;
      $product->color=$request->color;
      $product->price=$request->price;
      $product->details=$request->text;
      $product->category_id=$request->cat_id;
      
      $file = $request->file('image');
      $fileName = time().str_random('10').'.'.$file->getClientOriginalExtension();
      $file->move(base_path('/resources/assets/uploads/recource') , $fileName);
      $product->image=$fileName;

      $product->save();
       return redirect()->route('product');

    }

   
    public function update($id, Request $request){
        $row = product::FindOrFail($id);
        $requestArray = $request->all();
        $row->update($requestArray);

       

        return redirect()->route('products.edit' , ['id' => $row->id]);
    }

 

    public function edit($id)
    {
       $categories=category::get();
      $row=product::FindOrFail($id);
       return view('back-end.products.edit',compact('row','categories'));
    }
 
    public function destroy($id){
         product::FindOrFail($id)->delete();
   return redirect()->route('product');
 
    }


     public function index(){
     $rows=product::all();
    

        return view('back-end.products.index',compact('rows'));
    }


    

}