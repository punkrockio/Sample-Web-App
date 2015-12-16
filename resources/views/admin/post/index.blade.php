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

  <!-- Material Design Icons -->
  <link rel="stylesheet" type="text/css" href="/theme/admin/assets/material-design-icons/css/material-design-icons.min.css" />

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
  <section class="content-wrap ecommerce-products">


    <!-- Breadcrumb -->
    <div class="ecommerce-title">

      <div class="row">
        <div class="col s12 m9 l10">
          <!--h1>@@title</h1-->
          <nav>
            <ul class="left">
              <li><a href="/admin">Dashboard</a>
              </li>
              <li class="active"><a href="/admin/post">Friends</a>
              </li>
              <li><a href="/admin/post/create">Add</a>
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


    <!-- Friends -->
    <div class="card">
      <div class="title">
        <h5> Posts </h5>
        <div class="btn-group right">
          <a href="/admin/post/create" class="btn btn-small z-depth-0">
            <i class="mdi mdi-content-add"></i>
          </a>
          <!-- <a href="ecommerce-product-single.html" class="btn btn-small z-depth-0"><i class="mdi mdi-editor-mode-edit"></i></a> -->
          <!-- <a href="#" class="btn btn-small red lighten-1 z-depth-0"><i class="mdi mdi-action-delete"></i></a> -->
        </div>
      </div>
      <div class="content">

        @include('admin.partials.errors')
        @include('admin.partials.success')

        <table class="table table-hover">
          <thead>
            <tr>
              <th></th>
              
              <th width="100px"> Date </th>
              <th>  </th>
              
              <th> Article </th>
              <th>  </th>
              <th>   </th>
              
            </tr>
          </thead>
          <tbody>
            
            @foreach ($posts as $post)
              <tr>
                <th>
                  <input type="checkbox" id="chk{{$post->id}}" name="{{$post->id}}" />
                  <label for="chk{{$post->id}}"></label>
                </th>

                <td data-order="{{ $post->published_at->timestamp }}">
                  <i style="color: #42A5F5">
                    {{ $post->published_at->format('j-M-y') }}
                  </i>
                  <!-- <img src="{{$post->thumb_url}}" class="circle" alt="" style="width: 150px; height: 150px"> -->
                </td>


                <td>
                  <img src="{{$post->thumb_url}}" class="circle" alt="" style="width: 150px; height: 150px">
                </td>

                
                <td>

                  <strong>
                    {{ $post->title }}
                  </strong>
                  <p>
                    {{ $post->subtitle }}  
                  </p>
                  
                </td>
                <td >
                  <!-- <div class="btn-group" style="width: 100%"> -->
                    <style>
                      table a.btn{
                        border-radius: 50%;
                        height: 30px;
                        width: 30px;
                        line-height: 30px;
                        padding: 0px; 
                        margin-bottom: 5px; 
                      }
                    </style>
                    <a href="/admin/post/{{ $post->id }}/edit"
                       class="btn btn-small" >
                      <i class="fa fa-edit"></i> <!-- Edit -->
                    </a>
                    
                    <a href="/blog/{{ $post->slug }}"
                        target="_blank" 
                       class="btn btn-small" >
                      <i class="fa fa-eye"></i> <!-- View -->
                    </a>
                    
                    <a href="#" class="btnDelete btn red btn-small">
                      <i class="fa fa-times"></i>
                    </a>

                  <!-- </div> -->
                </td>
              </tr>
            @endforeach

          </tbody>
        </table>
      </div>
    </div>
    <!-- /Friends -->


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

  <script>
  $(document).ready(function(){
    
      $('.btnDelete').click(function(e){

        e.preventDefault();

        var id = $(this).data('id');
        $.ajax({
          type:'delete',
          url:'/admin/post/'+id,
          success: function(data){
            alert(data.msg);
            window.location.reload();
          }
        })

      })

  })
  </script>

  <!-- jQuery RAF (improved animation performance) -->
  <script type="text/javascript" src="/theme/admin/assets/jqueryRAF/jquery.requestAnimationFrame.min.js"></script>

  <!-- nanoScroller -->
  <script type="text/javascript" src="/theme/admin/assets/nanoScroller/jquery.nanoscroller.min.js"></script>

  <!-- Materialize -->
  <script type="text/javascript" src="/theme/admin/assets/materialize/js/materialize.min.js"></script>

  <!-- Sortable -->
  <script type="text/javascript" src="/theme/admin/assets/sortable/Sortable.min.js"></script>

  <!-- Main -->
  <script type="text/javascript" src="/theme/admin/assets/_con/js/_con.min.js"></script>


  <!-- Google Prettify -->
  <script type="text/javascript" src="/theme/admin/assets/google-code-prettify/prettify.js"></script>
</body>

</html>
<!-- Localized -->