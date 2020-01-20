<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>:: Dashboard ::</title>
<!-- Favicon-->
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css"/>

<!-- JQuery DataTable Css -->
<link rel="stylesheet" href="assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css">

<!-- Custom Css -->
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/all-themes.css" />

<!-- Bootstrap Select Css -->
<link href="assets/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

<script>
    $(document).ready(function () {
        $("nav-list").click(function () {
            $("nav-list").addClass("active")
        });
    });
</script>
</head>

<body class="theme-purple">
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            <div class="spinner-layer pl-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <p>Please wait...</p>
    </div>
</div>
<!-- Overlay For Sidebars -->
<div class="overlay"></div>


<!-- Top Bar -->
<nav class="navbar">
    <div class="col-12">
        <div class="navbar-header">            
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="index.html">RUN-Consult</a>
        </div>
        <ul class="nav navbar-nav navbar-right">        
            <li style="color:white;">{{ session('unit_id') }}</li> 
            <li style="color:white;">{{ session('user') }}</li>
            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" ><i class="zmdi zmdi-notifications"></i>
                <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                </a>
                <ul class="dropdown-menu">
                    <li class="header">NOTIFICATIONS</li>
                    <li class="body">
                        <ul class="menu list-unstyled">
                            <li> <a href="javascript:void(0);">
                                <div class="icon-circle bg-orange"> <i class="material-icons">person_add</i> </div>
                                <div class="menu-info">
                                    <h4>12 new members joined</h4>
                                    <p> <i class="material-icons">access_time</i> 14 mins ago </p>
                                </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                <div class="icon-circle bg-cyan"> <i class="material-icons">add_shopping_cart</i> </div>
                                <div class="menu-info">
                                    <h4>4 sales made</h4>
                                    <p> <i class="material-icons">access_time</i> 22 mins ago </p>
                                </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                <div class="icon-circle bg-blue"> <i class="material-icons">delete_forever</i> </div>
                                <div class="menu-info">
                                    <h4><b>Nancy Doe</b> deleted account</h4>
                                    <p> <i class="material-icons">access_time</i> 3 hours ago </p>
                                </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                <div class="icon-circle bg-green"> <i class="material-icons">mode_edit</i> </div>
                                <div class="menu-info">
                                    <h4><b>Nancy</b> changed name</h4>
                                    <p> <i class="material-icons">access_time</i> 2 hours ago </p>
                                </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                <div class="icon-circle bg-pink"> <i class="material-icons">comment</i> </div>
                                <div class="menu-info">
                                    <h4><b>John</b> commented your post</h4>
                                    <p> <i class="material-icons">access_time</i> 4 hours ago </p>
                                </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                <div class="icon-circle bg-lime"> <i class="material-icons">cached</i> </div>
                                <div class="menu-info">
                                    <h4><b>John</b> updated status</h4>
                                    <p> <i class="material-icons">access_time</i> 3 hours ago </p>
                                </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                <div class="icon-circle bg-purple"> <i class="material-icons">settings</i> </div>
                                <div class="menu-info">
                                    <h4>Settings updated</h4>
                                    <p> <i class="material-icons">access_time</i> Yesterday </p>
                                </div>
                                </a> </li>
                        </ul>
                    </li>
                    <li class="footer"> <a href="javascript:void(0);">View All Notifications</a> </li>
                </ul>
            </li>
            <li><a href="/logout" class="mega-menu" data-close="true"><i class="zmdi zmdi-power"></i></a></li>
            <li><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="zmdi zmdi-settings zmdi-hc-spin"></i></a></li>
        </ul>
    </div>
</nav>

<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar"> 
    <!-- User Info -->
    <div class="user-info">
        <div class="image"> <img src="/storage/profile_photos/{{ session('profile_photo') }}" width="48" height="48" alt="User" /> </div>
        <div class="info-container">
            <div class="name" data-toggle="dropdown">{{ session('firstname') }} {{ session('lastname') }}</div>
            <div class="email">{{ session('email') }}</div>
            
        </div>
    </div>
    <!-- #User Info --> 
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="header">MAIN NAVIGATION</li>
            <li class="open"> <a href="javascript:void(0);" class="menu-toggle"><i class="material-icons">layers</i><span>Manage Products</span> </a>
                <ul class="ml-menu">
                    <li> <a href="/product-categories">Product Categories</a></li>
                    <li> <a href="/products">Products</a></li>
                    <li> <a href="/product-prices">Product Prices</a></li>
                </ul>
            </li>
            <li> <a href="/reports"><i class="zmdi zmdi-logout"></i><span>Logout</span> </a> </li>
        </ul>
    </div>
    <!-- #Menu --> 
</aside>

<!-- Right Sidebar -->
<aside id="rightsidebar" class="right-sidebar">
    <ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#skins">Skins</a></li>
    </ul>
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="skins">
            <div class="right_menu">
                <ul class="choose-skin">
                    <h6>Flat Color</h6>
                    <li data-theme="red"  class="active">
                        <div class="red"></div>
                        <span>Red</span> </li>
                    <li data-theme="purple">
                        <div class="purple"></div>
                        <span>Purple</span> </li>
                    <li data-theme="deep-purple">
                        <div class="deep-purple"></div>
                        <span>Deep Purple</span> </li>
                    <li data-theme="blue">
                        <div class="blue"></div>
                        <span>Blue</span> </li>
                    <li data-theme="cyan">
                        <div class="cyan"></div>
                        <span>Cyan</span> </li>
                    <li data-theme="blue-grey">
                        <div class="blue-grey"></div>
                        <span>Blue Grey</span> </li>
                    <li data-theme="black">
                        <div class="black"></div>
                        <span>Black</span> </li>
                    <h6>Gradient Theme</h6>
                    <li data-theme="green">
                        <div class="green"></div>
                        <span>Green</span> </li>
                    <li data-theme="orange">
                        <div class="orange"></div>
                        <span>Orange</span> </li>
                    <li data-theme="blush">
                        <div class="blush"></div>
                        <span>Blush</span> </li>
                </ul>
            </div>
        </div>
    </div>
</aside>

<br>
<br>
<!-- Main Content -->
<section class="content home" >
    <div class="container-fluid">

         {{-- Create Sale --}}
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2> Make Sale </h2>                  
                    </div>
                    <div class="body">
                    <form action="/add-to-cart" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row clearfix">
                            <div class="col-md-8">
                                <label for="customer" class="form-label">Customer Name</label>
                                <select id="customer" class="form-control show-tick" name="customer">
                                    @if(count($customers) > 0)
                                        @foreach ($customers as $customer)
                                            <option value="{{ $customer->id }}"> {{ $customer->name }} </option>
                                        @endforeach
                                    @else
                                        <option value=""><p>No Customer Created</p></option>
                                    @endif
                                </select>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label for="new-customer" class="form-label">Create Customer</label>
                                        <button id="new-customer" type="button" class="btn  btn-raised bg-teal waves-effect">NEW Customer?</button>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <br>
                        <div class="row clearfix">
                            <div class="col-md-3">
                                <label for="product" class="form-label">Product</label>
                                <select id="product" class="form-control show-tick" name="product">
                                    @if (count($products) > 0)
                                        @foreach ($products as $product)
                                            <option value="{{ $product->productPriceID }},{{ $product->productName }}-{{ $product->customerType }},{{ $product->productPrice }}">{{ $product->productName }} {{ $product->customerType }} {{ $product->productPrice }}</option>
                                        @endforeach
                                    @else
                                        <option value="1">No product Created. Contact Admin to create Products</option>
                                    @endif
                                </select>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label for="quantity" class="form-label">Quantity</label>
                                        <input type="number" id="quantity" name="quantity" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label for="isCredit" class="form-label">Paid on Credit</label>
                                <select id="isCredit" class="form-control show-tick" name="isCredit">
                                    <option value="0">No</option>
                                    <option value="1">Yes</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label for="sale-type" class="form-label">Payment Method</label>
                                <select id="sale-type" class="form-control show-tick" name="saleType">
                                    <option value="1">Cash</option>
                                    <option value="2">POS</option>
                                    <option value="3">Transfer</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <input id="addToCart" type="submit" class="btn  btn-raised bg-teal waves-effect" value="Add To Cart">
                            </div>
                            {{-- <input type="hidden" name="operatorID" value="{{ session('user') }}"> --}}
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-sm-12 col-md-12">
                <div class="card" >
                    <div class="header">
                        <h2> Product Cart </h2>                  
                    </div>
                    <div class="body table-responsive">
                        <table class="table table-striped table-borderless m-b-5">
                            <thead>
                                <tr>
                                    <th style="width:40%;">Product</th>
                                    <th class="number">Quantity</th>
                                    <th class="number">Price</th>
                                    <th class="number">Total Price</th>
                                    <th style="width:20%;"></th>
                                </tr>
                            </thead>
                            <tbody class="no-border-x">
                                @if (count($cart) > 0)
                                    @foreach ($cart as $item)
                                    <tr>
                                        <td>{{ $item->name }}</td>
                                        <td class="number">{{ $item->quantity }}</td>
                                        <td class="number">&#8358;{{ $item->price }}</td>
                                        <td class="number">&#8358;{{ $item->price * $item->quantity }}</td>
                                        <td class="text"> <a href="/remove-from-cart/{{ $item->id }}" class="btn btn-xs btn-raised bg-red waves-effect">Remove</a></td>
                                    </tr>
                                    @endforeach
                                @else
                                    
                                @endif
                            </tbody>
                        </table>
                        <a href="/submit-sale" class="btn btn-raised btn-primary m-t-15 waves-effect">Submit Sale</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-md-9">
                <div class="card">
                    <div class="body">
                        <p class="copy m-b-0">© Copyright <time class="year">2017</time> <a href="https://www.linkedin.com/in/oluwafemi-bankole-811027153/" target="_blank">Femi Bankole</a> - All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 



<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/js/pages/index.js"></script>

</body>
</html>