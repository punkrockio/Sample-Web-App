<!DOCTYPE html>
<!--[if lt IE 7]>  <html class="lt-ie7"> <![endif]-->
<!--[if IE 7]>     <html class="lt-ie8"> <![endif]-->
<!--[if IE 8]>     <html class="lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html>
<!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Dashboard</title>

  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>

  <link rel="icon" type="image/png" href="/theme/admin/assets/_con/images/icon.png">

  <!-- nanoScroller -->
  <link rel="stylesheet" type="text/css" href="/theme/admin/assets/nanoScroller/nanoscroller.css" />


  <!-- FontAwesome -->
  <link rel="stylesheet" type="text/css" href="/theme/admin/assets/font-awesome/css/font-awesome.min.css" />

  <!-- userrial Design Icons -->
  <link rel="stylesheet" type="text/css" href="/theme/admin/assets/userrial-design-icons/css/userrial-design-icons.min.css" />

  <!-- IonIcons -->
  <link rel="stylesheet" type="text/css" href="/theme/admin/assets/ionicons/css/ionicons.min.css" />

  <!-- WeatherIcons -->
  <link rel="stylesheet" type="text/css" href="/theme/admin/assets/weatherIcons/css/weather-icons.min.css" />

  <!-- Google Prettify -->
  <link rel="stylesheet" type="text/css" href="/theme/admin/assets/google-code-prettify/prettify.css" />
  <!-- Main -->
  <link rel="stylesheet" type="text/css" href="/theme/admin/assets/_con/css/_con.min.css" />

  <!--[if lt IE 9]>
    <script src="/theme/admin/assets/html5shiv/html5shiv.min.js"></script>
  <![endif]-->

  <style>
  .input-field label {
      top: -1em;
      left: 0px;
    }
    textarea:focus{
        outline: none;
        border-color: #5AB1F6;
        border-width: 1px;
    }
    textarea {
        height: 10em;
        border-radius: 4px;
        border: 1px solid #9e9e9e;
        transition: all .2s ease;
    }
    </style>
</head>

<body>


  <!--
  Top Navbar
    Options:
      .navbar-dark - dark color scheme
      .navbar-static - static navbar
      .navbar-under - under sidebar
-->
  @include('admin.topnav')
  <!-- /Top Navbar -->


  <!--
  Yay Sidebar
  Options [you can use all of theme classnames]:
    .yay-hide-to-small         - no hide menu, just set it small with big icons
    .yay-static                - stop using fixed sidebar (will scroll with content)
    .yay-gestures              - to show and hide menu using gesture swipes
    .yay-light                 - light color scheme
    .yay-hide-on-content-click - hide menu on content click

  Effects [you can use one of these classnames]:
    .yay-overlay  - overlay content
    .yay-push     - push content to right
    .yay-shrink   - shrink content width
-->
  <aside class="yaybar yay-shrink yay-hide-to-small yay-gestures">

    <div class="top">
      <div>
        <!-- Sidebar toggle -->
        <a href="#" class="yay-toggle">
          <div class="burg1"></div>
          <div class="burg2"></div>
          <div class="burg3"></div>
        </a>
        <!-- Sidebar toggle -->

        <!-- Logo -->
        <a href="#!" class="brand-logo">
          <!-- <img src="/theme/admin/assets/_con/images/logo-white.png" alt="Con"> -->
        </a>
        <!-- /Logo -->
      </div>
    </div>

    @include('admin.sidenav')
    
  </aside>
  <!-- /Yay Sidebar -->


  <!-- Main Content -->
  <section class="content-wrap ecommerce-products-single">


    <!-- Breadcrumb -->
    <div class="ecommerce-title">

      <div class="row">
        <div class="col s12 m9 l10">
          <!--h1>@@title</h1-->
          <nav>
            <ul class="left">
              <li><a href="/admin">Dashboard</a>
              </li>
              <li class="active"><a href="/admin/user">All</a>
              </li>
              <li><a href="/admin/user/create">Add</a>
              </li>
            </ul>
          </nav>

        </div>
        <div class="col s12 m3 l2 right-align">
          <a href="#!" class="btn grey lighten-3 grey-text z-depth-0 chat-toggle"><i class="fa fa-comments"></i></a>
        </div>
      </div>

    </div>
    <!-- /Breadcrumb -->


    
    <form method="POST"
          action="{{ route('admin.user.store') }}">

      <input type="hidden" name="_token" value="{{ csrf_token() }}">

      <!-- Save and Cancel buttons -->
      <p class="right-align">
        <button class="btn" type="submit">Save</button>
        <a class="btn" href="/admin/user">Cancel</a>
      </p>
      <!-- /Save and Cancel buttons -->

      <!-- General -->
      <div class="card">
        <div class="title">
          <h5> Create a new user </h5>
          <a class="minimize" href="#">
            <i class="mdi-navigation-expand-less"></i>
          </a>
        </div>
        <div class="content">
          <!-- Product Name -->
          <div class="row no-margin-top">
            <div class="col s12 l3">
              <label for="ecommerce-product-name" class="setting-title">
                Name
              </label>
            </div>
            <div class="col s12 l9">
              <div class="input-field no-margin-top">
                <input id="ecommerce-product-name" type="text" placeholder="" value="" name="name">
              </div>
            </div>
          </div>
          <!-- /Product Name -->

          <!-- Product SKU, Price, Stock -->
          <div class="row no-margin-top">
            <div class="col s12 l3">
            </div>
            <div class="col s12 l3">
              <div class="input-field">
                <input id="ecommerce-product-sku" type="text" value="" name="email">
                <label for="ecommerce-product-sku">Email</label>
              </div>
            </div>
            <div class="col s12 l3">
              <div class="input-field">
                <input id="ecommerce-product-price" type="text" value="" name="phone">
                <label for="ecommerce-product-price">Phone</label>
              </div>
            </div>
            <div class="col s12 l3">
              <div class="input-field">
                <input id="ecommerce-product-stock" type="text" value="" name="facebook">
                <label for="ecommerce-product-stock">Facebook</label>
              </div>
            </div>
          </div>
          <!-- /Product SKU, Price, Stock -->

          <!-- Product Photos -->
          <div class="row product-photos">
            <div class="col s12 l3">
              <label for="ecommerce-product-photos" class="setting-title">
                Profile Photo
              </label>
            </div>
            <div class="col s12 l9">
            
              <div class="file-field input-field">
                <input class="file-path" type="text" />
                <div class="btn">
                  <span>File</span>
                  <input id="ecommerce-product-photos" type="file" name="photo" />
                </div>
              </div>
              
            </div>
          </div>
          <!-- /Product Photos -->

          <!-- Product Description -->
          <div class="row no-margin-top">
            <div class="col s12 l3">
              <label class="setting-title">
                About              
              </label>
            </div>
            <div class="col s12 l9">

              <textarea id="ckeditor1" name="product-description"></textarea>

            </div>
          </div>
          <!-- /Product Description -->
        </div>
      </div>
      <!-- /General -->

      

      <!-- Save and Cancel buttons -->
      <p class="right-align">
        <button class="btn" type="submit">Save</button>
        <a class="btn" href="/admin/user">Cancel</a>
      </p>
      <!-- /Save and Cancel buttons -->
    </form>


  </section>
  <!-- /Main Content -->

  <!-- Search Bar -->
  @include('admin.search')
  <!-- /Search Bar -->



  <!--
  Chat
    .chat-light - light color scheme
-->
  @include('admin.chat')
  <!-- /Chat -->



  <footer>
    &copy; 2015 <strong></strong>. All rights reserved. 
  </footer>
  

  <!-- jQuery -->
  <script type="text/javascript" src="/theme/admin/assets/jquery/jquery.min.js"></script>

  <!-- jQuery RAF (improved animation performance) -->
  <script type="text/javascript" src="/theme/admin/assets/jqueryRAF/jquery.requestAnimationFrame.min.js"></script>

  <!-- nanoScroller -->
  <script type="text/javascript" src="/theme/admin/assets/nanoScroller/jquery.nanoscroller.min.js"></script>

  <!-- userrialize -->
  <script type="text/javascript" src="/theme/admin/assets/userrialize/js/userrialize.min.js"></script>

  <!-- Sortable -->
  <script type="text/javascript" src="/theme/admin/assets/sortable/Sortable.min.js"></script>

  <!-- Main -->
  <script type="text/javascript" src="/theme/admin/assets/_con/js/_con.min.js"></script>


  <!-- Google Prettify -->
  <script type="text/javascript" src="/theme/admin/assets/google-code-prettify/prettify.js"></script>
</body>

</html>
<!-- Localized -->