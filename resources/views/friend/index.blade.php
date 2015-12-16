<!DOCTYPE html>
<html lang="en">

<head>
    <title> Friends </title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/theme/home/assets/images/favicon.ico" rel="icon">
    <link rel="stylesheet" type="text/css" href="/theme/home/assets/css/master.css">
</head>

<body id="home" data-offset="80" data-target=".navbar" data-spy="scroll">
    <div id="page-preloader"><span class="spinner"></span></div>
    @include('layouts.menu')
    <section class="about-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 wow fadeInUp" data-wow-duration="2s">
                    <h1 class="title"> Friends </h1>
                    <div class="path">  
                        Articles by friends
                    </div>
                </div>
                <div class="bottom-line"></div>
            </div>
        </div>
    </section>





    <!-- <section class="wrap-who-we">
        <div class="container">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="2s">
                <h4>Who we are</h4>
                <p>Phasellus justo ligula, dictum sit amet tortor eu, iaculis tristique turpis. Mauris non orci sed est suscipit tempor ut quis felis. Praesent pellentesque at metus eget luctus. Mauris congue sem a turpis tempor, eu bibendum magna dapibus. In malesuada. </p>
                <p>Mauris congue sem a turpis tempor, eu bibendum magna dapibus. In malesuada. Ligula id condimentum hendrerit, metus tortor tristique quam, ut facilisis tortor purus non nisl. Interdum et malesuada</p><img src="/theme/home/assets/images/signature.jpg" alt="" /></div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="2s"><img class="img-responsive" src="/theme/home/assets/images/who-we.jpg" alt="" /></div>
        </div>
    </section> -->
    








    <section class="wrap-dream-team">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <header class="section-header no-margin wow fadeInUp" data-wow-duration="2s">
                        <p class="subhead">  
                            Friends
                        </p>
                        <h2>Articles by Friends </h2>
                        <p class="large">
                            Select a friend below to see their articles
                        </p>
                    </header>
                </div>
            </div>
            <div class="row list-dream-team">


                @foreach($friends as $friend)
                <?php $mate = $friend->friend(); ?>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="2s">
                    <div class="team-item">
                        <div class="image" style="overflow: hidden; height: 200px;">
                            <img src="{{$mate->thumb_url}}" alt="" class="img-responsive" />
                            <div class="mask">
                                <p>
                                    {{$mate->about}}
                                </p>
                                <ul class="copyright-links list-inline">
                                    <li>
                                        <a href="http://facebook.com/{{$mate->facebook}}" target="_blank">
                                            <i class="fa fa-facebook fa-lg"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://twitter.com" target="_blank">
                                            <i class="fa fa-twitter fa-lg"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://linkedin.com" target="_blank">
                                            <i class="fa fa-linkedin fa-lg"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="bottom-info" >
                            <div class="name">
                                <a href="/friend/{{$mate->id}}/post" style="color: inherit; line-height: 1.5em; font-size: 1.7em; font-weight: lighter">
                                    {{$mate->name}}
                                </a>
                            </div>
                            <div class="post">
                                <b style="    font-weight: normal; font-size: 20px; line-height: 20px;"> 
                                    {{$mate->posts->count()}} Articles 
                                </b>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach


                
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
        (function($) {
            $(document).ready(function() {
                if (!Modernizr.touch) {
                    $(".player").mb_YTPlayer();
                } else {
                    $('.video-bg ').css('display', 'block');
                }
            });
        })(jQuery);
    </script>
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