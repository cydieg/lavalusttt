  <!DOCTYPE html>
  <html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-name" content="mono" />

    <title>Goco Dental Admin</title>

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Roboto" rel="stylesheet">
    <link href="public/plugins/material/css/materialdesignicons.min.css" rel="stylesheet" />
    <link href="public/plugins/simplebar/simplebar.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- public/PLUGINS CSS STYLE -->
    <link href="<?= base_url() ?>public/plugins/nprogress/nprogress.css" rel="stylesheet" />




    <link href="<?= base_url() ?>public/plugins/DataTables/DataTables-1.10.18/css/jquery.dataTables.min.css"
      rel="stylesheet" />



    <link href="<?= base_url() ?>public/plugins/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />



    <link href="<?= base_url() ?>public/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" />



    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">



    <link href="<?= base_url() ?>public/plugins/toaster/toastr.min.css" rel="stylesheet" />


    <!-- MONO CSS -->
    <link id="main-css-href" rel="stylesheet" href="<?= base_url() ?>public/css/admin.css" />




    <!-- FAVICON -->
    <link href="<?= base_url() ?>public/public/images/favicon.png" rel="shortcut icon" />

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
        width: 60px;
        /* Adjust the width as needed */
        height: auto;
        /* Automatically adjusts the height to maintain aspect ratio */
        display: inline-block;
        /* Ensures the image is displayed as an inline block */
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
              <img src="<?= base_url() ?>public/img/logo.png">
              <span class="brand-name">Goco Clinic</span>
            </a>
          </div>
          <!-- begin sidebar scrollbar -->
          <div class="sidebar-left" data-simplebar style="height: 100%;">
            <!-- sidebar menu -->
            <ul class="nav sidebar-inner" id="sidebar-menu">



              <li class="active">
                <a class="sidenav-item-link nav-link active" href="<?= site_url('/admin'); ?>">
                  <i class="mdi mdi-briefcase-account-outline"></i>
                  <span class="nav-text">Admin Dashboard</span>
                </a>
              </li>





              <li>
                <a class="sidenav-item-link nav-link" href="<?= site_url('/bookingDashboard'); ?>">
                  <i class="mdi mdi-chart-line"></i>
                  <span class="nav-text">Booking Dashboard</span>
                </a>
              </li>





              <li class="section-title">
                Apps
              </li>





              <li>
                <a class="sidenav-item-link" href="<?= site_url('/getFeed'); ?>">
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
            <button id="sidebar-toggler" class="sidebar-toggle no-arrow">
              <span class="sr-only">Toggle navigation</span>
            </button>

            <span class="page-title">dashboard</span>

            <div class="navbar-right ">

              <!-- search form -->
             

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

        <!-- ====================================
          ——— CONTENT WRAPPER
          ===================================== -->
        <div class="content-wrapper">
          <div class="content">
            <!-- Top Statistics -->
            <?php
    $LAVA =& lava_instance();
    $LAVA->call->model('Staff_Model');
  ?>

  <div class="row">
    <div class="col-xl-4 col-sm-6">
      <div class="card card-default card-mini">
        <div class="card-header">
          <h2><?php $LAVA->Staff_Model->countStaff(); ?></h2>
          <div class="sub-title">
            <span class="mr-1">Staff</span> |
            <i class="mdi mdi-arrow-up-bold text-success"></i>
          </div>
        </div>
        <div class="card-body">
          <div class="chart-wrapper">
            <div>
              <div id="spline-area-1"></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-4 col-sm-6">
      <div class="card card-default card-mini">
        <div class="card-header">
          <h2><?php $LAVA->Staff_Model->countUser(); ?></h2>
          <div class="sub-title">
            <span class="mr-1">Active Users</span> |
            <i class="mdi mdi-arrow-down-bold text-danger"></i>
          </div>
        </div>
        <div class="card-body">
          <div class="chart-wrapper">
            <div>
              <div id="spline-area-2"></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-4 col-sm-6">
      <div class="card card-default card-mini">
        <div class="card-header">
          <h2><?php $LAVA->Staff_Model->countFeedback(); ?></h2>
          <div class="sub-title">
            <span class="mr-1">Feedbacks</span> |
            <i class="mdi mdi-arrow-down-bold text-danger"></i>
          </div>
        </div>
        <div class="card-body">
          <div class="chart-wrapper">
            <div>
              <div id="spline-area-3"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


                      <div class="row">
              <div class="col-12">
                <div class="card card-default">
                  <div class="card-header">
                    <h2>User</h2>

                  </div>
                  <div class="card-body">
                    <table id="productsTable" class="table table-hover table-product" style="width:100%">
                      <thead>
                        <tr>

                          <th>Name</th>
                          <th>Email</th>

                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($user as $datas): ?>

                          <tr>

                            <td>
                              <?= $datas['username'] ?>

                            </td>
  <td>                            <?= $datas['email'] ?>
  </td>
                          </tr>

                        </tbody>
                      <?php endforeach; ?>

                    </table>


                  </div>
                </div>
              </div>
            </div>




            <!-- Table Product -->
            <div class="row">
              <div class="col-12">
                <div class="card card-default">
                  <div class="card-header">
                    <h2>Manifest Inventory</h2>

                  </div>
                  <div class="card-body">
                    <table id="productsTable" class="table table-hover table-product" style="width:100%">
                      <thead>
                        <tr>

                          <th>Name/Age</th>

                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($sched_data as $datas): ?>

                          <tr>

                            <td>
                              <?= $datas['manifest'] ?>
                            </td>

                          </tr>

                        </tbody>
                      <?php endforeach; ?>

                    </table>


                  </div>
                </div>
              </div>
            </div>

            <div class="row">
      <div class="card-body">
          <div class="mb-3">
              <a href="<?= site_url('/admin/addStaffForm') ?>" class="btn btn-primary">Add Staff</a>
          </div>
          <table class="table table-hover table-product" style="width:100%">
              <thead>
                  <tr>
                      <th>Staff</th>
                      <th>Image</th>
                      <th>Name</th>
                      <th>Action</th>
                  </tr>
              </thead>
              <tbody>
                  <?php $LAVA =& lava_instance(); ?>
                  <?php $LAVA->call->model('Staff_Model'); ?>

                  <?php
                  $staff_data = $LAVA->Staff_Model->getStaff(); // Replace with your actual method 
                  foreach ($staff_data as $datas) {
                      echo "<tr>";

                      echo "<td>{$datas['staff_id']}</td>";
                      echo "<td><img src='../public/Uploads/{$datas['staff_image']}'></td>";
                      echo "<td>{$datas['staff_name']}</td>";

                      echo "<td>";
                      // Form inside the loop so that each row has its own form
                      echo "<form method='post' action='" . site_url('index.php/admin/deleteStaff/' . $datas['staff_id']) . "'>";
                      echo "<button type='submit' class='btn btn-danger'>Delete</button>";
                      echo "<a href='" . site_url('index.php/admin/updateStaffPage/' . $datas['staff_id']) . "' class='btn btn-warning'>Update</a>";
                      echo "</form>";
                      echo "</td>";

                      echo "</tr>";
                  }
                  ?>
              </tbody>
          </table>
      </div>
  </div>






            <!-- Stock Modal -->
            <div class="modal fade modal-stock" id="modal-stock" aria-labelledby="modal-stock" aria-hidden="true">
              <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                <form action="#">
                  <div class="modal-content">
                    <div class="modal-header align-items-center p3 p-md-5">
                      <h2 class="modal-title" id="exampleModalGridTitle">Add Stock</h2>
                      <div>
                        <button type="button" class="btn btn-light btn-pill mr-1 mr-md-2" data-dismiss="modal"> cancel
                        </button>
                        <button type="submit" class="btn btn-primary  btn-pill" data-dismiss="modal"> save </button>
                      </div>

                    </div>
                    <div class="modal-body p3 p-md-5">
                      <div class="row">
                        <div class="col-lg-8">
                          <h3 class="h5 mb-5">Product Information</h3>
                          <div class="form-group mb-5">
                            <label for="new-product">Product Title</label>
                            <input type="text" class="form-control" id="new-product" placeholder="Add Product">
                          </div>
                          <div class="form-row mb-4">
                            <div class="col">
                              <label for="price">Price</label>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="basic-addon1">$</span>
                                </div>
                                <input type="text" class="form-control" id="price" placeholder="Price" aria-label="Price"
                                  aria-describedby="basic-addon1">
                              </div>
                            </div>
                            <div class="col">
                              <label for="sale-price">Sale Price</label>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="basic-addon1">$</span>
                                </div>
                                <input type="text" class="form-control" id="sale-price" placeholder="Sale Price"
                                  aria-label="SalePrice" aria-describedby="basic-addon1">
                              </div>
                            </div>
                          </div>

                          <div class="product-type mb-3 ">
                            <label class="d-block" for="sale-price">Product Type <i
                                class="mdi mdi-help-circle-outline"></i> </label>
                            <div>

                              <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input"
                                  checked="checked">
                                <label class="custom-control-label" for="customRadio1">Physical Good</label>
                              </div>

                              <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                <label class="custom-control-label" for="customRadio2">Digital Good</label>
                              </div>

                              <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                                <label class="custom-control-label" for="customRadio3">Service</label>
                              </div>

                            </div>
                          </div>

                          <div class="editor">
                            <label class="d-block" for="sale-price">Description <i
                                class="mdi mdi-help-circle-outline"></i></label>
                            <div id="standalone">
                              <div id="toolbar">
                                <span class="ql-formats">
                                  <select class="ql-font"></select>
                                  <select class="ql-size"></select>
                                </span>
                                <span class="ql-formats">
                                  <button class="ql-bold"></button>
                                  <button class="ql-italic"></button>
                                  <button class="ql-underline"></button>
                                </span>
                                <span class="ql-formats">
                                  <select class="ql-color"></select>
                                </span>
                                <span class="ql-formats">
                                  <button class="ql-blockquote"></button>
                                </span>
                                <span class="ql-formats">
                                  <button class="ql-list" value="ordered"></button>
                                  <button class="ql-list" value="bullet"></button>
                                  <button class="ql-indent" value="-1"></button>
                                  <button class="ql-indent" value="+1"></button>
                                </span>
                                <span class="ql-formats">
                                  <button class="ql-direction" value="rtl"></button>
                                  <select class="ql-align"></select>
                                </span>
                              </div>
                            </div>
                            <div id="editor"></div>

                            <div class="custom-control custom-checkbox d-inline-block mt-2">
                              <input type="checkbox" class="custom-control-input" id="customCheck2">
                              <label class="custom-control-label" for="customCheck2">Hide product from published
                                site</label>
                            </div>

                          </div>

                        </div>
                        <div class="col-lg-4">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" placeholder="please imgae here">
                            <span class="upload-image">Click here to <span class="text-primary">add product image.</span>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </form>
              </div>
            </div>
          </div>

        </div>

        <!-- Footer -->
        <footer class="footer mt-auto">
          <div class="copyright bg-white">
            <p>
              &copy; <span id="copy-year"></span> Copyright Mono Dashboard Bootstrap Template by <a class="text-primary"
                href="http://www.iamabdus.com/" target="_blank">Abdus</a>.
            </p>
          </div>
          <script>
            var d = new Date();
            var year = d.getFullYear();
            document.getElementById("copy-year").innerHTML = year;
          </script>
        </footer>

      </div>
    </div>

    <!-- Card Offcanvas -->
    <div class="card card-offcanvas" id="contact-off">
      <div class="card-header">
        <h2>Contacts</h2>
        <a href="#" class="btn btn-primary btn-pill px-4">Add New</a>
      </div>
      <div class="card-body">

        <div class="mb-4">
          <input type="text" class="form-control form-control-lg form-control-secondary rounded-0"
            placeholder="Search contacts...">
        </div>

        <div class="media media-sm">
          <div class="media-sm-wrapper">
            <a href="user-profile.html">
              <img src="<?= base_url() ?>public/images/user/user-sm-01.jpg" alt="User Image">
              <span class="active bg-primary"></span>
            </a>
          </div>
          <div class="media-body">
            <a href="user-profile.html">
              <span class="title">Selena Wagner</span>
              <span class="discribe">Designer</span>
            </a>
          </div>
        </div>

        <div class="media media-sm">
          <div class="media-sm-wrapper">
            <a href="user-profile.html">
              <img src="<?= base_url() ?>public/images/user/user-sm-02.jpg" alt="User Image">
              <span class="active bg-primary"></span>
            </a>
          </div>
          <div class="media-body">
            <a href="user-profile.html">
              <span class="title">Walter Reuter</span>
              <span>Developer</span>
            </a>
          </div>
        </div>

        <div class="media media-sm">
          <div class="media-sm-wrapper">
            <a href="user-profile.html">
              <img src="<?= base_url() ?>public/images/user/user-sm-03.jpg" alt="User Image">
            </a>
          </div>
          <div class="media-body">
            <a href="user-profile.html">
              <span class="title">Larissa Gebhardt</span>
              <span>Cyber Punk</span>
            </a>
          </div>
        </div>

        <div class="media media-sm">
          <div class="media-sm-wrapper">
            <a href="user-profile.html">
              <img src="<?= base_url() ?>public/images/user/user-sm-04.jpg" alt="User Image">
            </a>

          </div>
          <div class="media-body">
            <a href="user-profile.html">
              <span class="title">Albrecht Straub</span>
              <span>Photographer</span>
            </a>
          </div>
        </div>

        <div class="media media-sm">
          <div class="media-sm-wrapper">
            <a href="user-profile.html">
              <img src="<?= base_url() ?>public/images/user/user-sm-05.jpg" alt="User Image">
              <span class="active bg-danger"></span>
            </a>
          </div>
          <div class="media-body">
            <a href="user-profile.html">
              <span class="title">Leopold Ebert</span>
              <span>Fashion Designer</span>
            </a>
          </div>
        </div>

        <div class="media media-sm">
          <div class="media-sm-wrapper">
            <a href="user-profile.html">
              <img src="<?= base_url() ?>public/images/user/user-sm-06.jpg" alt="User Image">
              <span class="active bg-primary"></span>
            </a>
          </div>
          <div class="media-body">
            <a href="user-profile.html">
              <span class="title">Selena Wagner</span>
              <span>Photographer</span>
            </a>
          </div>
        </div>

      </div>
    </div>




    <script src="<?= base_url() ?>public/plugins/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>public/plugins/bootstrap/public/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>public/plugins/simplebar/simplebar.min.js"></script>
    <script src="https://unpkg.com/hotkeys-public/js/dist/hotkeys.min.js"></script>



    <script src="<?= base_url() ?>public/plugins/apexcharts/apexcharts.js"></script>



    <script
      src="<?= base_url() ?>public/plugins/DataTables/DataTables-1.10.18/public/js/jquery.dataTables.min.js"></script>



    <script src="<?= base_url() ?>public/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
    <script src="<?= base_url() ?>public/plugins/jvectormap/jquery-jvectormap-world-mill.js"></script>
    <script src="<?= base_url() ?>public/plugins/jvectormap/jquery-jvectormap-us-aea.js"></script>



    <script src="<?= base_url() ?>public/plugins/daterangepicker/moment.min.js"></script>
    <script src="<?= base_url() ?>public/plugins/daterangepicker/daterangepicker.js"></script>
    <script>
      jQuery(document).ready(function () {
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




    <!--  -->


  </body>

  </html>