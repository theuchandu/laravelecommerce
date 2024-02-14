
<!DOCTYPE html>
<html lang="en">
  <head>
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
                        <input type="text" name="catagory_name"  placeholder="write category name" required>
                        <input type="submit" name="submit" class="btn btn-primary" value="Add catagory">
                        </form>
                    </div>
                    <table class="center">
                        <tr>
                            <td>s.No</td>
                            <td>Catagory Name</td>
                            <td>Action</td>
                        </tr>
                        <?php $i =1 ;?>
                        @foreach($data as $item)
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$item->catagory_name}}</td>
                            <td><a onclick = "return confirm('Are you sure want to Delete')" class="btn btn-danger" href= "{{url('/delete_catagory/'.$item->id)}}"> Delete </a></td>                            
                        </tr>
                        <?php $i++ ?>
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