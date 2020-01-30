<?php

namespace App\Http\Controllers\BackEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\category;
class Categories extends Controller
{
public function create(){
       return view('back-end.categories.create');
      
    } 

     public function store(Request $request){
        
        $request->validate([
            'name' => 'required|max:255',
           
           
        ]);

        $cat=new category();
        $cat->name=$request->name;
       
        
        $cat->save();
       return redirect()->route('category');

    }



  public function edit($id)
    {
      $row=category::FindOrFail($id);
       return view('back-end.categories.edit',compact('row'));
    } 




   
    public function update($id, Request $request){
        $row = category::FindOrFail($id);
        $requestArray = $request->all();
       
        $row->update($requestArray);

       

        return redirect()->route('categories.edit' , ['id' => $row->id]);
    }



  
 
    public function destroy($id){
         category::FindOrFail($id)->delete();
   return redirect()->route('category');
 
    }
    


     public function index(){
     $categ=category::all();
    

        return view('back-end.categories.index',compact('categ'));
    }


    

}