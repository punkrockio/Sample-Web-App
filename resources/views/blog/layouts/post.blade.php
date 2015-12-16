<!DOCTYPE html>
<html lang="en">

<head>
    <title>  {{$post->title}} </title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/theme/home/assets/images/favicon.ico" rel="icon">
    <link rel="stylesheet" type="text/css" href="/theme/home/assets/css/master.css">
</head>

<!-- <body id="home" data-offset="0" data-target=".navbar" data-spy="scroll"> -->
<body id="home">
    <div id="page-preloader"><span class="spinner"></span></div>
    


    <style>
    .navbar{
        background: rgba(255,255,255,0.9);
        border-color: #e8e9ed;
    }
    .navbar-default .navbar-nav > li > a {
        color: inherit !important;
    }
    .navbar-brand .normal-logo{
        opacity: 1; 
        display: block;
    }
    .navbar-brand{
        padding-top: 17.5px;
        padding-bottom: 17.5px;
    }
    .toggle-button {
        padding-top: 25px;
        padding-bottom: 25px;
    }
    .inverse-logo, .visible-xs-block{
        display: none !important; 
    }
    </style>


    @include('layouts.menu')






    <section class="gallery-single-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left wow fadeIn" data-wow-duration="2s">
                    <h1 class="title">
                        {{$post->title}}
                    </h1>
                    <div class="path"> by {{$post->authour->name}} </div>
                </div>
            </div>
        </div>
    </section>


    <section class="wrap-gallery-item gallery-single-2">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-lg-7 col-sm-12 wow fadeInUp" data-wow-duration="2s">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="{{$post->thumb_url}}" class="img-responsive" alt="" />
                            </div>
                            <div class="item">
                                <img src="{{$post->thumb_url}}" class="img-responsive" alt="" />
                            </div>
                        </div> 

                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"><i class="fa fa-angle-left"></i></a><a class="right carousel-control" href="#carousel-example-generic" data-slide="next"><i class="fa fa-angle-right"></i></a></div>
                </div>
                <div class="col-lg-4 col-lg-offset-1 col-md-4 col-md-offset-1 col-sm-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 ">
                            <div class="wrap-decription wow fadeInUp" data-wow-duration="2s">
                                <h5>{{$post->subtitle}}</h5>
                                <div>
                                    {{$post->content_raw}}
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>



                <div class="col-lg-4 col-md-4 wow fadeInUp" data-wow-duration="2s">
                    <div class="wrap-info">
                        <h5>About:</h5>
                        <div class="row ">
                            <div class="col-md-12 clearfix">
                                <div class="type-info pull-left"><i class="fa fa-user"></i>Written by:</div>
                                <div class="info pull-right text-right">
                                    <p class="no-margin"> 
                                        
                                        <a href="/friend/{{$post->authour->id}}/post">
                                            {{$post->authour->name}} 
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-12 clearfix">
                                <div class="type-info pull-left"><i class="fa fa-calendar"></i>Completed on:</div>
                                <div class="info pull-right text-right">
                                    <p class="no-margin">{{$post->updated_at}}</p>
                                </div>
                            </div>
                            
                            
                            <div class="col-md-12 col-share">
                                <div class="type-info pull-left">
                                    <h5>Share:</h5></div>
                                <ul class="copyright-links pull-right list-inline">
                                    <li><a href="#"><i class="fa fa-facebook fa-lg"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter fa-lg"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus fa-lg"></i></a></li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </section>
   






    @include('layouts.footer')
    <script src="/theme/home/assets/js/jquery-1.11.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.11.3/jquery-ui.js"></script>
    <script src="/theme/home/assets/js/bootstrap.min.js"></script>
    <script src="/theme/home/assets/js/jquery.mb.YTPlayer.js"></script>
    <script src="/theme/home/assets/js/isotope.pkgd.min.js"></script>
    <script src="/theme/home/assets/js/owl.carousel.min.js"></script>
    <script src="/theme/home/assets/js/jquery.scrollTo.min.js"></script>
    <script src="/theme/home/assets/js/jquery.ui.effect.min.js"></script>
    <script src="/theme/home/assets/js/modernizr.js"></script>
    <script src="/theme/home/assets/js/jquery.waypoints.min.js"></script>
    <script src="/theme/home/assets/js/fancybox/jquery.fancybox.js"></script>
    <script src="/theme/home/assets/js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script src="/theme/home/assets/js/map.js"></script>
    <script src="/theme/home/assets/js/jquery.easypiechart.min.js"></script>
    <script src="/theme/home/assets/js/TweenMax.min.js"></script>
    <script src="/theme/home/assets/js/highcharts.js"></script>
    <script src="/theme/home/assets/js/Chart.min.js"></script>
    <script src="/theme/home/assets/js/custom.js"></script>
</body>

</html>
<!-- Localized -->