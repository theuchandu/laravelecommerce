
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <!-- End layout styles -->
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
        @include('admin.body');
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
      @include('admin.script');
  </body>
</html>