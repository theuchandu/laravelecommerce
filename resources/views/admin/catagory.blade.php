
<!DOCTYPE html>
<html lang="en">
  <head>
  <style>
    .div_center{
        text-align: center;
        padding-top: 40px;
    }
  </style>  

    <link rel="stylesheet" href="admin/assets/css/style.css">
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('admin.header')       

        <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden = "true">X</button>
                        {{ session('message') }}
                    </div>
                @endif
                    <div class="div_center">
                        <h2>Add Category</h2>
                        <form action="{{url('/add_catagory')}}" method="post">
                            @csrf
                        <input type="text" name="catagory_name"  placeholder="write category name">
                        <input type="submit" name="submit" class="btn btn-primary" value="Add catagory">
                        </form>
                    </div>
                </div>                
            </div>
       
      </div>
      <!-- page-body-wrapper ends -->
    </div>
      @include('admin.script');
  </body>
</html>