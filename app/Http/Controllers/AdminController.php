<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catagory;

class AdminController extends Controller
{
    
    public function view_catagory(){

        return view('admin.catagory');
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
    

}