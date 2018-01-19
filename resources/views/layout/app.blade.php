<!DOCTYPE html>
<html>
    
    <head>
        <title>Home</title>
        <link href="{{asset('public/default/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="{{asset('public/default/js/jquery.min.js')}}"></script>
        <!-- Custom Theme files -->
        <link href="{{asset('public/default/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
        <!-- Custom Theme files -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Express News Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
        Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
        <script type="application/x-javascript">addEventListener("load",
            function() {
                setTimeout(hideURLbar, 0);
            },
            false);
            function hideURLbar() {
                window.scrollTo(0, 1);
            }</script>
        <!-- for bootstrap working -->
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <!-- //for bootstrap working -->
        <!-- web-fonts -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
        <script src="{{asset('public/default/js/responsiveslides.min.js')}}"></script>
        <script>$(function() {
                $("#slider").responsiveSlides({
                    auto: true,
                    nav: true,
                    speed: 500,
                    namespace: "callbacks",
                    pager: true,
                });
            });</script>
        <script type="text/javascript" src="{{asset('public/default/js/move-top.js')}}"></script>
        <script type="text/javascript" src="{{asset('public/default/js/easing.js')}}"></script>
        <!--/script-->
        <script type="text/javascript">jQuery(document).ready(function($) {
                $(".scroll").click(function(event) {
                    event.preventDefault();
                    $('html,body').animate({
                        scrollTop: $(this.hash).offset().top
                    },
                    900);
                });
            });</script>
    </head>
    <body>
        @include('layout._header')
        <div class="copyrights">Collect from
            <a href="http://www.cssmoban.com/">企业网站模板</a></div>
        <!-- content-section-starts-here -->
        <div class="main-body">
            <div class="wrap">
                <div class="col-md-8 content-left">
                    <div class="slider">
                        <div class="callbacks_wrap">
                            <ul class="rslides" id="slider">
                                <li>
                                    <img src="{{asset('public/default/images/3.jpg')}}" alt="">
                                    <div class="caption">
                                        <a href="single.html">Lorem Ipsum is simply dummy text of the printing and typesetting industry</a></div>
                                </li>
                                <li>
                                    <img src="{{asset('public/default/images/2.jpg')}}" alt="">
                                    <div class="caption">
                                        <a href="single.html">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</a></div>
                                </li>
                                <li>
                                    <img src="{{asset('public/default/images/1.jpg')}}" alt="">
                                    <div class="caption">
                                        <a href="single.html">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</a></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--文章内容列表-->
                    <div class="articles">
                        <header>
                            <h3 class="title-head">All around the world</h3>
                        </header>
                        <div class="article">
                            <div class="article-left">
                                <a href="single.html">
                                    <img src="{{asset('public/default/images/article1.jpg')}}"></a>
                            </div>
                            <div class="article-right">
                                <div class="article-title">
                                    <p>On Feb 25, 2015
                                        <a class="span_link" href="#">
                                            <span class="glyphicon glyphicon-comment"></span>0</a>
                                        <a class="span_link" href="#">
                                            <span class="glyphicon glyphicon-eye-open"></span>104</a>
                                        <a class="span_link" href="#">
                                            <span class="glyphicon glyphicon-thumbs-up"></span>52</a>
                                    </p>
                                    <a class="title" href="single.html">The section of the mass media industry that focuses on presenting</a></div>
                                <div class="article-text">
                                    <p>The standard chunk of Lorem Ipsum used since the 1500s. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" exact original.....</p>
                                    <a href="single.html">
                                        <img src="{asset('public/default/images/more.png')}}" alt="" /></a>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="articles">
                        <header>
                            <h3 class="title-head">All around the world</h3>
                        </header>
                        <div class="article">
                            <div class="article-left">
                                <a href="single.html">
                                    <img src="{{asset('public/default/images/article1.jpg')}}"></a>
                            </div>
                            <div class="article-right">
                                <div class="article-title">
                                    <p>On Feb 25, 2015
                                        <a class="span_link" href="#">
                                            <span class="glyphicon glyphicon-comment"></span>0</a>
                                        <a class="span_link" href="#">
                                            <span class="glyphicon glyphicon-eye-open"></span>104</a>
                                        <a class="span_link" href="#">
                                            <span class="glyphicon glyphicon-thumbs-up"></span>52</a>
                                    </p>
                                    <a class="title" href="single.html">The section of the mass media industry that focuses on presenting</a></div>
                                <div class="article-text">
                                    <p>The standard chunk of Lorem Ipsum used since the 1500s. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" exact original.....</p>
                                    <a href="single.html">
                                        <img src="{asset('public/default/images/more.png')}}" alt="" /></a>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="articles">
                        <header>
                            <h3 class="title-head">All around the world</h3>
                        </header>
                        <div class="article">
                            <div class="article-left">
                                <a href="single.html">
                                    <img src="{{asset('public/default/images/article1.jpg')}}"></a>
                            </div>
                            <div class="article-right">
                                <div class="article-title">
                                    <p>On Feb 25, 2015
                                        <a class="span_link" href="#">
                                            <span class="glyphicon glyphicon-comment"></span>0</a>
                                        <a class="span_link" href="#">
                                            <span class="glyphicon glyphicon-eye-open"></span>104</a>
                                        <a class="span_link" href="#">
                                            <span class="glyphicon glyphicon-thumbs-up"></span>52</a>
                                    </p>
                                    <a class="title" href="single.html">The section of the mass media industry that focuses on presenting</a></div>
                                <div class="article-text">
                                    <p>The standard chunk of Lorem Ipsum used since the 1500s. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" exact original.....</p>
                                    <a href="single.html">
                                        <img src="{asset('public/default/images/more.png')}}" alt="" /></a>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="articles">
                        <header>
                            <h3 class="title-head">All around the world</h3>
                        </header>
                        <div class="article">
                            <div class="article-left">
                                <a href="single.html">
                                    <img src="{{asset('public/default/images/article1.jpg')}}"></a>
                            </div>
                            <div class="article-right">
                                <div class="article-title">
                                    <p>On Feb 25, 2015
                                        <a class="span_link" href="#">
                                            <span class="glyphicon glyphicon-comment"></span>0</a>
                                        <a class="span_link" href="#">
                                            <span class="glyphicon glyphicon-eye-open"></span>104</a>
                                        <a class="span_link" href="#">
                                            <span class="glyphicon glyphicon-thumbs-up"></span>52</a>
                                    </p>
                                    <a class="title" href="single.html">The section of the mass media industry that focuses on presenting</a></div>
                                <div class="article-text">
                                    <p>The standard chunk of Lorem Ipsum used since the 1500s. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" exact original.....</p>
                                    <a href="single.html">
                                        <img src="{asset('public/default/images/more.png')}}" alt="" /></a>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                @include('layout._right')
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- content-section-ends-here -->
        <!-- footer-section-starts-here -->
        @include('layout._footer')
        <!----></body>

</html>