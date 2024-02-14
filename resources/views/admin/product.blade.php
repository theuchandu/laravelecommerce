<!DOCTYPE html>
<html lang="en">
<style>
    .div_center{
        text-align: center;
        padding-top: 40px;
    }
    .center{
        margin: auto;
        width: 50%;
        text-align:center;
        margin-top:30px;
        border: 1px solid white;
    }
    label{
        display: inline-block;
        width:200px;

    }
  </style>  
  <head>   
    <link rel="stylesheet" href="admin/assets/css/style.css">   
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">     
      @include('admin.sidebar')      
      <div class="container-fluid page-body-wrapper">       
        @include('admin.header')
        <div class="main-panel">
                <div class="content-wrapper">
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden = "true">X</button>
                        {{ session('message')}}
                    </div>
                @endif
                    <div class="div_center">
                        <h2>Add Product</h2>
            <form action="{{url('/add_product')}}" enctype="multipart/form-data" method="post">
                    @csrf
                        <div class="div_design">
                            <label for="">Product Title:</label>
                            <input class="text-color" type="text" name="product_title" id="" name = "title" placeholder="Write a title" required>
                        </div>
                        <div class="div_design" >
                            <label for="">Product Description:</label>
                            <input class="text-color" type="text" name="product_description" id="" name = "title" placeholder="Write a description" required>
                        </div>
                        <div class="div_design" >
                            <label for="">Product Price:</label>
                            <input class="text-color" type="text" name="product_price" id="" name = "title" placeholder="Write a productprice" required>
                        </div>
                        <div class="div_design" >
                            <label for="">Discount Price</label>
                            <input class="text-color" type="text" name="discount_price" id="" name = "title" placeholder="Write a discountnprice">
                        </div>
                        <div class="div_design" > 
                            <label for="">Product Quantity:</label>
                            <input class="text-color" type="text" name="product_quantity" id="" name = "title" placeholder="Write a quantity" required>
                        </div>
                        <div class="div_design" >
                            <label for="">Product Catagory:</label>
                            <select class="text-color div_design" name="product_catagory" id="" required>'
                                <option value="" selected>Add a catagory here </option>
                                @foreach($catagory as $catagory)
                                <option value="{{$catagory->catagory_name}}">{{$catagory->catagory_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="div_design">
                            <label for="">Product Image Here:</label>
                            <input class="text-color" type="file" name="image" id="" name = "image" placeholder="Write a title" required>
                        </div>
                        <div class="div_design">
                            <input type="submit" name="submit" value="Add a Product" class="btn btn-primary" />
                        </div>
                    </div>  
                </form>                  
                </div>                
            </div>

         </div>
      <!-- page-body-wrapper ends -->
    </div>
      @include('admin.script');
  </body>
</html>