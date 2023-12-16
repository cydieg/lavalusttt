<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-name" content="mono"/>

  <title>Mono - Responsive Admin & Dashboard Template</title>

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Roboto" rel="stylesheet">
  <link href="<?= base_url() ?>public/plugins/material/css/materialdesignicons.min.css" rel="stylesheet" />
  <link href="<?= base_url() ?>public/plugins/simplebar/simplebar.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
  <!-- <?= base_url() ?>public/PLUGINS CSS STYLE -->
  <link href="<?= base_url() ?>public/plugins/nprogress/nprogress.css" rel="stylesheet" />
  
  
  
  
  <link href="<?= base_url() ?>public/plugins/DataTables/DataTables-1.10.18/css/jquery.dataTables.min.css" rel="stylesheet" />
  
  
  
  <link href="<?= base_url() ?>public/plugins/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
  
  
  
  <link href="<?= base_url() ?>public/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" />
  
  
  
  <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
  
  
  
  <link href="<?= base_url() ?>public/plugins/toaster/toastr.min.css" rel="stylesheet" />
  
  
  <!-- MONO CSS -->
  <link id="main-css-href" rel="stylesheet" href="<?= base_url() ?>public/css/admin.css" />

  


  <!-- FAVICON -->
  <link href="<?= base_url() ?>public/<?= base_url() ?>public/images/favicon.png" rel="shortcut icon" />

  <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="<?= base_url() ?>public/plugins/nprogress/nprogress.js"></script>
  <style>
      .app-brand a img {
    width: 60px; /* Adjust the width as needed */
    height: auto; /* Automatically adjusts the height to maintain aspect ratio */
    display: inline-block; /* Ensures the image is displayed as an inline block */
  }
  </style>
</head>

<body class="navbar-fixed sidebar-fixed" id="body">
    <script>
      NProgress.configure({ showSpinner: false });
      NProgress.start();
    </script>

    
    <div id="toaster"></div>
    

    <!-- ====================================
    ——— WRAPPER
    ===================================== -->
    <div class="wrapper">
      
      
        <!-- ====================================
          ——— LEFT SIDEBAR WITH OUT FOOTER
        ===================================== -->
        <aside class="left-sidebar sidebar-dark" id="left-sidebar">
          <div id="sidebar" class="sidebar sidebar-with-footer">
            <!-- Aplication Brand -->
            <div class="app-brand">
              <a href="/index.html">
                <img src="<?= base_url() ?>public/img/logo.png" >
                <span class="brand-name">Eduardo's Resort</span>
              </a>
            </div>
            <!-- begin sidebar scrollbar -->
            <div class="sidebar-left" data-simplebar style="height: 100%;">
              <!-- sidebar menu -->
              <ul class="nav sidebar-inner" id="sidebar-menu">
                

                
                  <li
                  
                   >
                    <a class="sidenav-item-link nav-link" href="<?= site_url('/admin'); ?>">
                      <i class="mdi mdi-briefcase-account-outline"></i>
                      <span class="nav-text">Admin Dashboard</span>
                    </a>
                  </li>
                

                

                
                  <li
                  class="active"
                   >
                    <a class="sidenav-item-link  nav-link active" href="<?= site_url('/bookingDashboard'); ?>">
                      <i class="mdi mdi-chart-line"></i>
                      <span class="nav-text">Booking Dashboard</span>
                    </a>
                  </li>
                

                

                
                  <li class="section-title">
                    Apps
                  </li>
                

                

                
                  <li
                   >
                    <a class="sidenav-item-link" href="<?= site_url('/getFeed') ?> ">
                      <i class="mdi mdi-wechat"></i>
                      <span class="nav-text">Feedbacks</span>
                    </a>
                  </li>
                

 </div>
          <div class="sidebar-footer">
              <div class="sidebar-footer-content">
                <ul class="d-flex">
                  <li>
                  <button class="btn btn-primary text-dark logout-logo-btn">
                                <i class="fas fa-power-off logout-icon"><a href="<?= site_url('/logout'); ?>">Logout</a>
                                </i>
                            </button>                
                            
                </ul>
              </div>
            </div>
   </div>
   
        </aside>

      

      <!-- ====================================
      ——— PAGE WRAPPER
      ===================================== -->
      <div class="page-wrapper">
        
          <!-- Header -->
          <header class="main-header" id="header">
            <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
              <!-- Sidebar toggle button -->
              <button id="sidebar-toggler" class="sidebar-toggle">
                <span class="sr-only">Toggle navigation</span>
              </button>

              <span class="page-title">dashboard</span>

              <div class="navbar-right ">

              <ul class="nav navbar-nav">
                <!-- Offcanvas -->
                
                <li class="custom-dropdown">
                  <button class="notify-toggler custom-dropdown-toggler">
                    <i class="mdi mdi-bell-outline icon"></i>
                    <span class="badge badge-xs rounded-circle"></span>
                  </button>
                  <div class="dropdown-notify">

                   

                    <div class="" data-simplebar style="height: 325px;">
                      <div class="tab-content" id="myTabContent">

                        <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tabs">

                         
                <!-- User Account -->
                <li class="dropdown user-menu no-arrow">
                  <button class="dropdown-toggle nav-link" data-toggle="dropdown no-arrow">
                    <img src="<?= base_url() ?>public/images/CYDIE.jpg" class="user-image rounded-circle"
                      alt="User Image" />
                    <span class="d-none d-lg-inline-block">Cydie G</span>
                  </button>
            </div>
          </nav>


        </header>



    <table class="  table   table-striped table-hover table-bordered text-center ">
        
    <tr >
            <th>ID</th>
            <th>Appointment</th>
            <th>Age</th>
            <th>Concern</th>
            <th>Address</th>
            <th>Name</th>
            <th>User</th>

            <th>Action</th>
        </tr>

      
        <?php foreach ($data as $datas) : ?>
            <tr>
            <td>
                    <?= $datas['sched_id'] ?>
                </td>
                <td>
                    <?= $datas['checkin'] ?>
                </td>
                <td>
                    <?= $datas['checkout'] ?>
                </td>
                <td>
                    <?= $datas['adult'] ?>
                </td>
                <td>
                    <?= $datas['child'] ?>
                </td>
                <td>
                    <?= $datas['manifest'] ?>
                </td>
                <td>
                    <?= $datas['username'] ?>
                </td>
                <td>
                
                    <a href="<?= site_url('edit/' . $datas['sched_id']) ?>" class="btn btn-warning mb-3">Edit</a>
                    <a href="<?= site_url('delete/' . $datas['sched_id']) ?>" class="btn btn-danger mb-3">Delete</a>
                </td>
            </tr>
            
        <?php endforeach; ?>

    </table>
    <script src="<?= base_url() ?>public/plugins/jquery/jquery.min.js"></script>
                    <script src="<?= base_url() ?>public/plugins/bootstrap/<?= base_url() ?>public/js/bootstrap.bundle.min.js"></script>
                    <script src="<?= base_url() ?>public/plugins/simplebar/simplebar.min.js"></script>
                    <script src="https://unpkg.com/hotkeys-<?= base_url() ?>public/js/dist/hotkeys.min.js"></script>

                    
                    
                    <script src="<?= base_url() ?>public/plugins/apexcharts/apexcharts.js"></script>
                    
                    
                    
                    <script src="<?= base_url() ?>public/plugins/DataTables/DataTables-1.10.18/<?= base_url() ?>public/js/jquery.dataTables.min.js"></script>
                    
                    
                    
                    <script src="<?= base_url() ?>public/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
                    <script src="<?= base_url() ?>public/plugins/jvectormap/jquery-jvectormap-world-mill.js"></script>
                    <script src="<?= base_url() ?>public/plugins/jvectormap/jquery-jvectormap-us-aea.js"></script>
                    
                    
                    
                    <script src="<?= base_url() ?>public/plugins/daterangepicker/moment.min.js"></script>
                    <script src="<?= base_url() ?>public/plugins/daterangepicker/daterangepicker.js"></script>
                    <script>
                      jQuery(document).ready(function() {
                        jQuery('input[name="dateRange"]').daterangepicker({
                        autoUpdateInput: false,
                        singleDatePicker: true,
                        locale: {
                          cancelLabel: 'Clear'
                        }
                      });
                        jQuery('input[name="dateRange"]').on('apply.daterangepicker', function (ev, picker) {
                          jQuery(this).val(picker.startDate.format('MM/DD/YYYY'));
                        });
                        jQuery('input[name="dateRange"]').on('cancel.daterangepicker', function (ev, picker) {
                          jQuery(this).val('');
                        });
                      });
                    </script>
                    
                    
                    
                    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
                    
                    
                    
                    <script src="<?= base_url() ?>public/plugins/toaster/toastr.min.js"></script>

                    
                    
                    <script src="<?= base_url() ?>public/js/mono.js"></script>
                    <script src="<?= base_url() ?>public/js/chart.js"></script>
                    <script src="<?= base_url() ?>public/js/map.js"></script>
                    <script src="<?= base_url() ?>public/js/custom.js"></script>
</body>

</html>