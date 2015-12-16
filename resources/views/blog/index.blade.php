<!DOCTYPE html>
<html lang="en">

<head>
    <title> Friend News - Articles </title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/theme/home/assets/images/favicon.ico" rel="icon">
    <link rel="stylesheet" type="text/css" href="/theme/home/assets/css/master.css">
</head>

<body id="home" data-offset="80" data-target=".navbar" data-spy="scroll">
    <div id="page-preloader"><span class="spinner"></span></div>
    


    @include('layouts.menu')



    <section class="blog-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 wow fadeInUp" data-wow-duration="2s">
                    <h1 class="title">  Articles </h1>
                    <div class="path"> {{$by}} </div>
                </div>
                <div class="bottom-line"></div>
            </div>
        </div>
    </section>

    <section class="wrap-blog-content blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 left-column">


                    <?php $i=0; ?>
                    @foreach($posts as $post)
                        <?php 
                            $i++; 
                            $authour = $post->authour;
                        ?>
                        <div class="col-md-6 wow fadeInUp" data-wow-duration="2s">
                            <div class="post">
                                <div class="post-heading">
                                    <a class="post-image" href="/blog/{{$post->slug}}">
                                        <img src="{{$post->thumb_url}}" 
                                            class="img-responsive" alt="post" />
                                    </a>
                                </div>
                                <div class="post-body">
                                    <a class="post-avatar" href="/blog/{{$post->slug}}">
                                        <img class="" 
                                            src="{{$authour->thumb_url}}" alt="avatar" /></a>
                                    <ul class="list-inline">
                                        <li>
                                            <i class="fa fa-user"></i>
                                            {{$authour->name}}        
                                        </li>
                                        <li>
                                            <i class="fa fa-calendar"></i>
                                            {{$post->updated_at}}
                                        </li>
                                    </ul>

                                    <a href="/blog/{{$post->slug}}">
                                        <h5>
                                            {{$post->title}}
                                        </h5>
                                    </a>
                                    <p> 
                                        {{$post->subtitle}}
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        @if($i%2 === 0)
                            <div class="clear"></div>
                        @endif

                    @endforeach

                
            </div>
        </div>
    </section>

    <!--
    <section class="wrap-subscribe blog">
        <div class="top-block-icon"><i class="icon-envelope"></i></div>
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8 col-sm-12 text-center wow fadeInUp" data-wow-duration="2s">
                    <h4>Be Aware of News</h4>
                    <p>Sed condimentum ante ac quam varius pretium. Nunc ornare laoreet augue et elementum. Phasellus enim libero, blandit vel sapien vitae, condimentum ultricies magna et.</p>
                </div>
            </div>
            <div class="row wow fadeInUp" data-wow-duration="2s">
                <div class="col-md-6 col-md-offset-3">
                    <div class="subscribe">
                        <form class="form-inline clearfix">
                            <input type="email" class="form-control pull-left" placeholder="Enter your e-mail">
                            <button type="submit" class="btn btn-primary btn-round pull-right hidden-xs">Subscribe</button>
                            <button type="submit" class="btn btn-primary btn-round-small pull-right visible-xs-block"><i class="fa fa-pencil fa-lg"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="twitter dark parallax-section-3">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <article><i class="fa fa-twitter"></i>
                        <div id="twitter-carousel">
                            <div class="twitter-feed">
                                <p>Nullam non aliquet neque, eu mollis ex. Nam ut aliquet erat.
                                    <br> <a href="http://themeforest.net/user/Svetlov/portfolio">http://themeforest.net/user/Svetlov/portfolio</a> Quisque velit purus, sollicitudin id condimentum et, egestas ac ex.</p>
                                <footer>@Sandy_mustache <cite> 2 days ago</cite></footer>
                            </div>
                            <div class="twitter-feed">
                                <p>Nullam non aliquet neque, eu mollis ex. Nam ut aliquet erat. <a href="http://themeforest.net/user/Svetlov/portfolio">http://themeforest.net/user/Svetlov/portfolio</a> Quisque velit purus, sollicitudin id condimentum et, egestas ac ex.</p>
                                <footer>@Sandy_mustache <cite> 1 days ago</cite></footer>
                            </div>
                            <div class="twitter-feed">
                                <p>Nullam non aliquet neque, eu mollis ex. Nam ut aliquet erat. <a href="http://themeforest.net/user/Svetlov/portfolio">http://themeforest.net/user/Svetlov/portfolio</a> Quisque velit purus, sollicitudin id condimentum et, egestas ac ex.</p>
                                <footer>@Sandy_mustache <cite> 1 days ago</cite></footer>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    -->

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