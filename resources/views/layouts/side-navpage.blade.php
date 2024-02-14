<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Kanakku </title>

<link rel="shortcut icon" href="{{asset('img/favicon.png')}}">

<link rel="stylesheet" href="{{asset('style/bootstrap.min.css')}}">

<link rel="stylesheet" href="{{asset ('plugins/fontawesome/css/fontawesome.min.css')}}">
<link rel="stylesheet" href="{{asset ('plugins/fontawesome/css/all.min.css')}}">

<link rel="stylesheet" href="{{asset ('plugins/feather/feather.css')}}">

<link rel="stylesheet" href="{{asset ('style/bootstrap-datetimepicker.min.css')}}">

<link rel="stylesheet" href="{{asset ('plugins/datatables/datatables.min.css')}}">

<link rel="stylesheet" href="{{asset ('style/style.css')}}">
</head>
<body>

<div class="main-wrapper">

<div class="header header-one">

<a href="javascript:void(0);" id="toggle_btn">
<span class="toggle-bars">
<span class="bar-icons"></span>
<span class="bar-icons"></span>
<span class="bar-icons"></span>
<span class="bar-icons"></span>
</span>
</a>


<div class="top-nav-search">

</div>


<a class="mobile_btn" id="mobile_btn">
<i class="fas fa-bars"></i>
</a>



</div>

<div class="sidebar" id="sidebar">
    <div class="sidebar-header">
    <div class="sidebar-logo">
    <a href="index.html">
    <img src="{{asset('img/logo.png')}}" class="img-fluid logo" alt>
    </a>
    <a href="index.html">
    <img src="{{asset('img/logo-small.png')}}" class="img-fluid logo-small" alt>
    </a>
    </div>
    </div>
    <div class="sidebar-inner slimscroll">
    <div id="sidebar-menu" class="sidebar-menu">
    
    <ul>
    <li class="menu-title"><span>Main</span></li>
    <li class="submenu">
    <a href=""><i class="fe fe-home"></i> <span> Dashboard</span> </a>
    
    </li>
    <li class="submenu">
    <a href=""><i class="fe fe-grid"></i> <span> Logout</span></a>
   
    </li>
    </ul>
    
   
        <ul>
    <li class="menu-title"><span>Category</span></li>
    <li>
    <a href="{{route('categories.index')}}"><i class="fe fe-users"></i> <span>Category</span></a>
    </li>
   </ul>
  
        <ul>
    <li class="menu-title"><span>Product</span></li>
    <li>
    <a href="{{route('products.index')}}"><i class="fe fe-users"></i> <span>Product</span></a>
    </li>
   </ul>
    
  
    
    
    <ul>
    <li class="menu-title"><span>Settings</span></li>
    <li>
    <a href="settings.html"><i class="fe fe-settings"></i> <span>Settings</span></a>
    </li>
    <li>
    <a href=""><i class="fe fe-power"></i> <span>Logout</span></a>
    </li>
    </ul>
    
    </div>
    </div>
    </div>

    <script src="{{asset('script/jquery-3.6.3.min.js')}}"></script>

    <script src="{{asset('script/bootstrap.bundle.min.js')}}"></script>
    
    <script src="{{asset('script/feather.min.js')}}"></script>
    
    <script src="{{asset('plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
    
    <script src="{{asset('plugins/apexchart/apexcharts.min.js')}}"></script>
    <script src="{{asset('plugins/apexchart/chart-data.js')}}"></script>
    
    <script src="{{asset('js/script.js')}}"></script>
    </body>
    <script>
        function toggleDropdown() {
          var dropdown = document.querySelector("#userDropdown .dropdown-menu");
          if (dropdown.style.display === "block") {
            dropdown.style.display = "none";
          } else {
            dropdown.style.display = "block";
          }
        }
      </script>
      
    </html>