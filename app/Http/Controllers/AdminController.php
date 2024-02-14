<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catagory;
use App\Models\Product;

class AdminController extends Controller
{
    
    public function view_catagory(){

        $data = Catagory::all();

        return view('admin.catagory',compact('data'));
    }

    public function add_catagory(Request $request){
        $request->validate([
            'catagory_name' => 'required|string|max:255',
        ]);
    
        $data = new Catagory;
    
        $data->catagory_name = $request->catagory_name;
    
        $data->save();    
      
        return redirect()->back()->with('message', 'Category Added Successfully');    
    
    }

    public function delete_catagory($id){
        $data = Catagory::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Category Deleted Successfully');
    }

    public function view_product(){    
        $catagory = Catagory::all();        
        return view('admin.product',compact('catagory'));
    }

    public function add_product(Request $request){
        
        $product = new product();       
        $product->title = $request->product_title;
        $product->description = $request->product_description;
        $product->price = $request->product_price;
        $product->discount_price = $request->discount_price;
        $product->catagory = $request->product_catagory; 
        $product->quantity = $request->product_quantity;
        
        $image  = $request->image; 
        $imagename=time().''.$image->getClientOriginalExtension();
        $request->image->move('product', $imagename);
        $product->image = $imagename ; 

        // if ($request->hasFile('product_image')) {
        //     $image = $request->file('product_image');
        //     $extension = $image->getClientOriginalExtension();
        //     $filename = time() . '.' . $extension;
        //     $image->move(public_path('product'), $filename);
        //     $product->product_image = $filename;
        // }

        $product->save();
      
        return redirect()->back()->with('message','Product Added Succesfully');

    }

    

}