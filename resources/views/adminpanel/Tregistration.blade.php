<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">
    <title>Tutors Registration Form</title>

    <!-- Icons font CSS-->
    <link rel="apple-touch-icon" sizes="76x76" href="{{url('public/adminpanel/img/logo3.png')}}">
    <link rel="icon" type="image/png" href="{{url('public/adminpanel/img/logo3.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link href="{{url('public/adminpanel/registration/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    <link href="{{url('public/adminpanel/registration/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
   
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="{{url('public/adminpanel/registration/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{url('public/adminpanel/registration/vendor/datepicker/daterangepicker.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{url('public/adminpanel/css/material-dashboard.css?v=2.1.1')}}" rel="stylesheet" />
  
    <!-- CSS Just for demo purpose, don't include it in your project -->
   <link href="{{url('public/adminpanel/demo/demo.css')}}" rel="stylesheet" />
   <link href="{{url('public/adminpanel/registration/css/main.css')}}" rel="stylesheet" media="all">

    <style> 
  .dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
  .card-3 .card-heading {
    background: url("public/adminpanel/registration/images/4.jpg") top left/cover no-repeat;
    display: table-cell;
    width: 100%;
  }
  
  .card-3 .card-body {
    padding-bottom: 15px;
    padding-right:310px;
    display: table-cell;

    
  }
     @media (max-width: 900px) {
    .card-3 {
      display: block;
    }
    .card-3 .card-heading {
      display: block;
      width: 70%;
      padding-top: 10px;
       background-position: center center; 

    }
      input {
    outline: none;
    margin: 0;
    border: none;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
    width: 100%;
    font-size: 16px;
    font-family: inherit;
    
  }
  
  .input-icon {
    position: absolute;
    font-size: 18px;
    color: #ccc;
    right: 8px;
    top: 50%;
    -webkit-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    transform: translateY(-50%);
    cursor: pointer;
  }
  
  .input-group {
    position: relative;
    margin-bottom: 33px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    text-align: right;
  }
  
  .input--style-3 {
    font-size: 16px;
    color: #ccc;
    background: transparent;
    /* text-align: right; */
   }
  .title {
  font-size: 24px;
  color: #fff;
  font-weight: 400;
  margin-bottom: 36px; 
  /* text-align: center;  */
  }

  .page-wrapper {
  min-height: 50vh;
  min-width:150vh;
}
  
.wrapper {
  margin: 0 auto;
}

.wrapper--w960 {
  max-width: 960px;
}

.wrapper--w780 {
  max-width: 1000px;
  max-height: 800px; */
  /* padding-left:0px;
  padding-right:150px */
 }

.wrapper--w680 {
  max-width: 900px;
}

  }  
 </style> 

</head>

<body class="">

  <!------------ Side Bar --------------------->
<div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="{{url('public/adminpanel/img/sidebar-1.jpg')}}">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Star Gate
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item  ">
            <a class="nav-link" href="adminpanel.dashboard">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <div class="dropdown">
          <li class="nav-item active ">
            <a class="nav-link" href="">
              <i class="material-icons">wc</i>
              <p>Registration</p>
              <div class="dropdown-content">
               <a href="adminpanel.Tregistration">Tutor</a>
               <a href="adminpanel.Sregistration">Student</a>
             </div>
          </div>
          <!-- <li class="nav-item ">
            <a class="nav-link" href="adminpanel.registration">
              <i class="material-icons"></i>
              <p>Registration</p>
            </a>
          </li> -->
          <li class="nav-item ">
            <a class="nav-link" href="./user.blade.php">
              <i class="material-icons">person</i>
              <p>Users</p>
            </a>
          </li>
        
          <li class="nav-item ">
            <a class="nav-link" href="./typography.blade.php">
              <i class="material-icons">grid_on</i>
              <p>Attendence</p>
            </a>
          </li>
          </ul>
      </div>
    </div>

<!------------------- end of side bar -------------------->

<!------------ Registration Form ------------------------->


    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins"> -->
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Tutor Registration Info</h2>
                    <form method="POST">
                        <div class="input-group">
                            <input class="input--style-3" type="text"  placeholder="Name" name="name">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="User Name" name="username">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="email" placeholder="Email" name="email">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Phone" name="phone">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Address" name="address">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Salary" name="salary">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Password" name="password">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Tid" name="tid">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3 js-datepicker" type="text" placeholder="Birthdate" name="birthday">
                            <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="gender">
                                    <option disabled="disabled" selected="selected">Gender</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Other</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" type="submit">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div> 
     </div> 
    <!--------------------------End of Registration Form -------------------------------------->
<!---------------------------- footer -------------------------------------------------->
    <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <!-- <li>
                <a href="https://www.creative-tim.com">
                  Star Gate
                </a>
              </li>
              <li>
                <a href="https://creative-tim.com/presentation">
                  About
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
              </li>
              <li>
                <a href="https://www.creative-tim.com/license">
                  Licenses
                </a>
              </li> -->
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, Star Gate Institute. <i class="material-icons"> </i> by
            <a href="https://www.creative-tim.com" target="_blank">Dilki Sandunika</a>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!------------------------- end of footer ------------------------------------>
  /* <!--------------------------- side bar filters ---------------------------------->

    <!-- <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
      </a>
      <ul class="dropdown-menu">
        <li class="header-title"> Sidebar Filters</li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger active-color">
            <div class="badge-colors ml-auto mr-auto">
              <span class="badge filter badge-purple" data-color="purple"></span>
              <span class="badge filter badge-azure" data-color="azure"></span>
              <span class="badge filter badge-green" data-color="green"></span>
              <span class="badge filter badge-warning" data-color="orange"></span>
              <span class="badge filter badge-danger" data-color="danger"></span>
              <span class="badge filter badge-rose active" data-color="rose"></span>
            </div>
            <div class="clearfix"></div>
          </a>
        </li>
        <li class="header-title">Images</li>
        <li class="active">
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-1.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-2.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-3.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-4.jpg" alt="">
          </a>
        </li>
        <li class="button-container">
          <a href="https://www.creative-tim.com/product/material-dashboard" target="_blank" class="btn btn-primary btn-block">Free Download</a>
        </li>
        <li class="header-title">Want more components?</li>
            <li class="button-container">
                <a href="https://www.creative-tim.com/product/material-dashboard-pro" target="_blank" class="btn btn-warning btn-block">
                  Get the pro version
                </a>
            </li>
        <li class="button-container">
          <a href="https://demos.creative-tim.com/material-dashboard/docs/2.1/getting-started/introduction.html" target="_blank" class="btn btn-default btn-block">
            View Documentation
          </a>
        </li>
        <li class="button-container github-star">
          <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub">Star</a>
        </li>
        <li class="header-title">Thank you for 95 shares!</li>
        <li class="button-container text-center">
          <button id="twitter" class="btn btn-round btn-twitter"><i class="fa fa-twitter"></i> &middot; 45</button>
          <button id="facebook" class="btn btn-round btn-facebook"><i class="fa fa-facebook-f"></i> &middot; 50</button>
          <br>
          <br>
        </li>
      </ul>
    </div>
  </div> -->
<!------------------------------ end filters -----------------------------------> */

    <!-- Jquery JS-->
    <script src="{{url('public/adminpanel/registration/vendor/jquery/jquery.min.js')}}"></script>
   
    <!-- Vendor JS-->
    <script src="{{url('public/adminpanel/registration/vendor/select2/select2.min.js')}}"></script>
    <script src="{{url('public/adminpanel/registration/vendor/datepicker/moment.min.js')}}"></script>
    <script src="{{url('public/adminpanel/registration/vendor/datepicker/daterangepicker.js')}}"></script>

    <!-- Main JS-->
    <script src="{{url('public/adminpanel/registration/js/global.js')}}"></script>
    
    <!--   Core JS Files   -->
  <script src="{{url('public/adminanel/js/core/jquery.min.js')}}"></script>
  <script src="{{url('public/adminpanel/js/core/popper.min.js')}}"></script>
  <script src="{{url('public/adminpanel/js/core/bootstrap-material-design.min.js')}}"></script>
  <script src="{{url('public/adminpanel/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
  
  <!-- Plugin for the momentJs  -->
  <script src="{{url('public/adminpanel/js/plugins/moment.min.js')}}"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="{{url('public/adminpanel/js/plugins/sweetalert2.js')}}"></script>
  <!-- Forms Validations Plugin -->
  <script src="{{url('public/adminpanel/js/plugins/jquery.validate.min.js')}}"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="{{url('public/adminpanel/js/plugins/jquery.bootstrap-wizard.js')}}"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="{{url('public/adminPanel/js/plugins/bootstrap-selectpicker.js')}}"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="{{url('public/adminpanel/js/plugins/bootstrap-datetimepicker.min.js')}}"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="{{url('public/adminpanel/js/plugins/jquery.dataTables.min.js')}}"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="{{url('public/adminpanel/js/plugins/bootstrap-tagsinput.js')}}"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="{{url('public/adminpanel/js/plugins/jasny-bootstrap.min.js')}}"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="{{url('public/adminpanel/js/plugins/fullcalendar.min.js')}}"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="{{url('public/adminpanel/js/plugins/jquery-jvectormap.js')}}"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="{{url('public/adminpanel/js/plugins/nouislider.min.js')}}"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js')}}"></script>
  <!-- Library for adding dinamically elements -->
  <script src="{{url('public/adminpanel/js/plugins/arrive.min.js')}}"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="{{url('public/adminpanel/js/plugins/chartist.min.js')}}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{url('public/adminpanel/js/plugins/bootstrap-notify.js')}}"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{url('public/adminpanel/js/material-dashboard.js?v=2.1.1')}}" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{url('public/adminpanel/demo/demo.js')}}"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

        if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
          if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
            $('.fixed-plugin .dropdown').addClass('open');
          }

        }

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

    });
  </script>

</body>
</html>
