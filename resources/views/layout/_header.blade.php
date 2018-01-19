<!-- header-section-starts-here -->
<div class="header">
    <div class="header-top">
        <div class="wrap">
            <div class="top-menu">
                <ul>
                    <li>
                        <a href="index.html">Home</a></li>
                    <li>
                        <a href="about.html">About Us</a></li>
                    <li>
                        <a href="privacy-policy.html">Privacy Policy</a></li>
                    <li>
                        <a href="contact.html">Contact Us</a></li>
                </ul>
            </div>
            <div class="num">
                <p>Call us : 032 2352 782</p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="logo text-center">
            <a href="index.html">
                <img src="{{asset('public/default/images/logo.jpg')}}" alt="" /></a>
        </div>
        <div class="navigation">
            <nav class="navbar navbar-default" role="navigation">
                <div class="wrap">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!--/.navbar-header-->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active">
                                <a href="index.html">Home</a>
                            </li>
                            <li>
                                <a href="sports.html">Sports</a>
                            </li>
                            <li>
                                <a href="technology.html">Technology</a>
                            </li>
                            <div class="clearfix"></div>
                        </ul>
                        <div class="search">
                            <!-- start search-->
                            <div class="search-box">
                                <div id="sb-search" class="sb-search">
                                    <form>
                                        <input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
                                        <input class="sb-search-submit" type="submit" value="">
                                        <span class="sb-icon-search"></span>
                                    </form>
                                </div>
                            </div>
                            <!-- search-scripts -->
                            <script src="{{asset('public/default/js/classie.js')}}"></script>
                            <script src="{{asset('public/default/js/uisearch.js')}}"></script>
                            <script>new UISearch(document.getElementById('sb-search'));</script>
                            <!-- //search-scripts --></div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!--/.navbar-collapse-->
                <!--/.navbar--></div>
        </nav>
    </div>
</div>
<!-- header-section-ends-here -->
<div class="wrap">
    <div class="move-text">
        <div class="breaking_news">
            <h2>Breaking News</h2></div>
        <div class="marquee">
            <div class="marquee1">
                <a class="breaking" href="single.html">>>The standard chunk of Lorem Ipsum used since the 1500s is reproduced..</a></div>
            <div class="marquee2">
                <a class="breaking" href="single.html">>>At vero eos et accusamus et iusto qui blanditiis praesentium voluptatum deleniti atque..</a></div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
        <script type="text/javascript" src="{{asset('public/default/js/jquery.marquee.min.js')}}"></script>
        <script>$('.marquee').marquee({
                pauseOnHover: true
            });
            //@ sourceURL=pen.js
            </script>
    </div>
</div>  