
<!DOCTYPE html>
<html lang="en">
  <head>  
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />
  </head>
  <style>
    .center{
      border:2px solid white;
      text-align: center;
      margin-left:50px;
    }
    .img_size{
      width:50px;
      height:50px;
    }
    .th_design {
      padding: 30px;
    }

  </style>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('admin.header')
          <div class="main-panel">
            <div class="content-wrapper">
              <table class="center">
                <tr>
                  <th class="th_design">s.no</th>
                  <th class="th_design" >Product title</th>
                  <th class="th_design">Description</th>
                  <th class="th_design">Quantity</th>
                  <th class="th_design">Catagory</th>
                  <th class="th_design">Price</th>
                  <th class="th_design">Discount Price</th>
                  <th class="th_design">Product Image</th>
                </tr>
                @foreach($products as $product)
                <tr>
                  <td class="text-align">{{$product->id}}</td>
                  <td>{{$product->title}}</td>
                  <td>{{$product->description}}</td>
                  <td>{{$product->category}}</td>
                  <td>{{$product->quantity}}</td>
                  <td>{{$product->price}}</td>
                  <td>{{$product->discount_price}}</td>
                  <td><img class="img_size" src="/product/{{$product->image}}"  alt="" ></td>
                </tr>
                @endforeach

              </table>
            </div>
          </div>
      </div>
      <!-- page-body-wrapper ends -->
    </div>
      @include('admin.script');
  </body>
</html>