<!DOCTYPE html>
<html lang="en">
<head> 
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Admin Mintone">
<meta name="author" content="Admin Mintone">
<!-- Favicon icon -->
<link rel="icon" type="image/png" sizes="16x16" href="assets/imgs/favicon.png">
<title>list_produits</title>
<!-- Bootstrap Core CSS -->
<link href="plugins/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="plugins/vendors/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
<!-- This page CSS -->
<!-- chartist CSS -->
<link href="plugins/vendors/morrisjs/morris.css" rel="stylesheet">
<!--c3 CSS -->
<link href="plugins/vendors/c3-master/c3.min.css" rel="stylesheet">
<!--Toaster Popup message CSS -->
<link href="plugins/vendors/toast-master/css/jquery.toast.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="assets/css/style.css" rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="fix-header fix-sidebar card-no-border">
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
  <div class="loader">
    <div class="loader__figure"></div>
    <p class="loader__label">Admin Mintone</p>
  </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
  <!-- ============================================================== -->
  <!-- Container1140px -->
  <!-- ============================================================== -->
  <!-- ============================================================== -->
  <!-- Topbar header - style you can find in pages.scss -->
  <!-- ============================================================== -->
  <header class="topbar">
    <div Class="container">
      <nav class="navbar top-navbar navbar-expand-md navbar-light">
        <!-- ============================================================== -->
        <!-- Logo -->
        <!-- ============================================================== -->
        <div class="navbar-header"> <a class="navbar-brand" href="index.html">
          <!-- Logo icon -->
          <b>
          <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
          <!-- Dark Logo icon -->
          <img src="assets/imgs/logo-icon.png" alt="homepage" class="dark-logo" />
          <!-- Light Logo icon -->
          <img src="assets/imgs/logo-light-icon.png" alt="homepage" class="light-logo" /> </b>
          <!--End Logo icon -->
          <!-- Logo text -->
          <span>
          <!-- dark Logo text -->
          <img src="assets/imgs/logo-text.png" alt="homepage" class="dark-logo dark-logo2" />
          <!-- Light Logo text -->
          <img src="assets/imgs/logo-light-text.png" class="light-logo" alt="homepage" /></span> </a> </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="top-bar-main">
          <!-- ============================================================== -->
          <!-- toggle and nav items -->
          <!-- ============================================================== -->
          <div class="float-left">
            <ul class="navbar-nav">
              <li class="nav-item "><a class="nav-link navbar-toggler sidebartoggler waves-effect waves-dark float-right" href="javascript:void(0)"><span class="navbar-toggler-icon"></span></a></li>
              <!-- ============================================================== -->
              <!-- Search -->
              <!-- ============================================================== -->
              <li class="nav-item hidden-xs-down app-search">
                <input type="text" class="form-control float-left" placeholder="Type for search...">
              </li>
            </ul>
          </div>
        
          <div class="clearfix"></div>
        </div>
      </nav>
    </div>
  </header>
  <!-- ============================================================== -->
  <!-- End Topbar header -->
  <!-- ============================================================== -->
  <!-- ============================================================== -->
  <!-- Left Sidebar - style you can find in sidebar.scss  -->
  <!-- ============================================================== -->
  <div class="container">
    <aside class="left-sidebar">
      <ul class="nav-bar navbar-inverse">
        <li class="nav-item"> <a class="nav-link navbar-toggler sidebartoggler hidden-sm-down waves-effect waves-dark float-right" href="javascript:void(0)"><span class="navbar-toggler-icon"></span></a> </li>
      </ul>
      <!-- Sidebar scroll-->
      <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
          <ul id="sidebarnav">
            <li class="clearfix"></li>
            <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="flaticon-desktop-computer-screen-with-rising-graph"></i><span class="hide-menu">Dashboard</span></a>
              <ul aria-expanded="false" class="collapse">
                <li><a href="index.html">Server</a></li>
                <li><a href="index-projects.html">Project</a></li>
                <li><a href="index-analytics.html">Analytics</a></li>
                <li><a href="index-shop.html">Shop</a></li>
              </ul>
            </li>
            <li><a href="calendar.html"><i class="flaticon-calendar"></i><span class="hide-menu">Calendar</span></a></li>
            <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="flaticon-restaurant"></i><span class="hide-menu">Ecommerce</span></a>
              <ul aria-expanded="false" class="collapse">
                <li><a href="ecommerce-dashboard.html">Dashboard</a></li>
                <li><a href="ecommerce-pro-list.html">Product List</a></li>
                <li><a href="ecommerce-add-new.html">Add new product</a></li>
                <li><a href="ecommerce-orders.html">Orders</a></li>
                <li><a href="ecommerce-invoice.html">Invoice</a></li>
                <li><a href="ecommerce-customers.html">Customers</a></li>
              </ul>
            </li>
            <li><a href="email.html"><i class="flaticon-mail"></i> <span class="hide-menu">Mail</span></a></li>
            <li><a href="chats.html"><i class="flaticon-speech"></i><span class="hide-menu">Chat</span></a></li>
            <li><a href="to-do.html"><i class="flaticon-forms"></i><span class="hide-menu">To Do</span></a></li>
            <li><a href="change-log.html"><i class="flaticon-file"></i><span class="hide-menu">Change Log</span></a></li>
            <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="flaticon-switch"></i><span class="hide-menu">UI Elements</span></a>
              <ul aria-expanded="false" class="collapse">
                <li><a href="ui-profile.html">Profile</a></li>
                <li><a href="ui-typography.html">Typography</a></li>
                <li><a href="ui-buttons.html">Buttons</a></li>
                <li><a href="ui-forms.html">Forms</a></li>
                <li><a href="ui-icons.html">Icons</a></li>
                <li><a href="ui-components.html">Components</a></li>
                <li><a href="ui-cards.html">Cards</a></li>
                <li><a href="ui-pricing-tables.html">Pricing tables</a></li>
                <li><a href="ui-timeline.html">Timeline</a></li>
                <li><a href="ui-charts.html">Charts</a></li>
                <li><a href="ui-tables.html">Tables</a></li>
              </ul>
            </li>
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <div class="page-wrapper">
    <div class="container-fluid">
           @yield('content')

    <footer class="footer t-a-c mx-lg-3 mx-0 ">
              <div class="p-2 bg-white">
                  <center> 2018 © Mintone Admin Dashboard / Design &amp; Developed By <a
                          href="https://jthemes.com/" target="_blank">jThemes
                      Studio</a></center>
              </div>
          </footer>
	 </div>
    </div>
  </div>
  
</div>

<script src="plugins/vendors/jquery/jquery.min.js"></script>
<!-- Bootstrap popper Core JavaScript -->
<script src="plugins/vendors/bootstrap/js/popper.min.js"></script>
<script src="plugins/vendors/bootstrap/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="plugins/vendors/ps/perfect-scrollbar.jquery.min.js"></script>
<!--Wave Effects -->
<script src="assets/js/waves.js"></script>
<!--Menu sidebar -->
<script src="assets/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="assets/js/custom.min.js"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<!--c3 JavaScript -->
<script src="plugins/vendors/d3/d3.min.js"></script>
<script src="plugins/vendors/c3-master/c3.min.js"></script>
<!--jquery knob -->
<script src="plugins/vendors/knob/jquery.knob.js"></script>
<!--Sparkline JavaScript -->
<script src="plugins/vendors/sparkline/jquery.sparkline.min.js"></script>
<!--Morris JavaScript -->
<script src="plugins/vendors/raphael/raphael-min.js"></script>
<script src="plugins/vendors/morrisjs/morris.js"></script>
<!-- Popup message jquery -->
<script src="plugins/vendors/toast-master/js/jquery.toast.js"></script>
<script src="plugins/vendors/datatables/jquery.dataTables.min.js"></script>

<script>
   $(function() {
       $('#myTable').DataTable();
           var table = $('#example').DataTable({
              "columnDefs": [{
                  "visible": false,
                  "targets": 2
            }],
            "order": [
                  [2, 'asc']
            ],
            "displayLength": 18,
             "drawCallback": function(settings) {
                var api = this.api();
                 var rows = api.rows({
                     page: 'current'
                 }).nodes();
                var last = null;
             api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
</script>

<!-- ============================================================== -->
<!-- Style switcher -->
<!-- ============================================================== -->
<script src="plugins/vendors/styleswitcher/jQuery.style.switcher.js"></script>
</body>
</html>
