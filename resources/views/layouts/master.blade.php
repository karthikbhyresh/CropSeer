
<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>


<html>
<head>
    <title>{{(ucwords(request()->path())!='/')?ucwords(request()->path()):'Welcome'}} | Karthik</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Custom Theme files -->
    <link href="/css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <!-- Custom Theme files -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1);}
    </script>
    <meta name="keywords" content="Karthik Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndriodCompatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <!--Google Fonts-->
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="/js/move-top.js"></script>
    <script type="text/javascript" src="/js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });

            //ap_popupdown for changing the size of login and signup button when we hover mouse over them
            $("#user-in a").hover(function(){
                $(this).css('font-size','1em');
                $(this).css("backgroundColor",'#f4d638')
            });
            $("#user-in a").mouseleave(function(){
                $(this).css('font-size','0.8em');
                $(this).css("backgroundColor",'#956295')
            });

        });
    </script>
    <!-- //end-smoth-scrolling -->
    <script src="/js/menu_jquery.js"></script>

    <!---pop-up-box---->
    <link href="/css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
    <script src="/js/jquery.magnific-popup.js" type="text/javascript"></script>
    <!---//pop-up-box---->



    <!--//footer-->

    <!-- Custom Theme files -->
    <link href="/css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <!-- Custom Theme files -->

    <style>    #heading{
        box-sizing: border-box;
        color: #956295;
        text-decoration: none;
        font-family: 'Viga-Regular';
        font-size: 30px;
        font-weight: 500;
        line-height: 44px;
        margin-bottom: 0px;
        margin-left: 0px;
        margin-right: 0px;
        margin-top: 0px;
        padding-bottom: 0px;
        padding-left: 0px;
        padding-right: 0px;
        padding-top: 0px;
        position: relative;
        text-align: center;

    }
    .ap-heading{
        box-sizing: border-box;
        color: #956295;
        text-decoration: none;
        font-family: 'Viga-Regular';
        font-size: 30px;
        font-weight: 500;
        line-height: 44px;
        margin-bottom: 0px;
        margin-left: 0px;
        margin-right: 0px;
        margin-top: 0px;
        padding-bottom: 0px;
        padding-left: 0px;
        padding-right: 0px;
        padding-top: 0px;
        position: relative;
        text-align: center;

    }


</style>
</head>
<body>
    <!--header start here-->
    <div class="header">
        <div class="container">
            <div class="header-main">
                <div class="head-left">
                    <div class="phone">
                        <p>Phone<span class="ph-numb">+91 9449154411</span></p>
                        <p><a target='_blank' href="https://github.com/karthikbhyresh" style="color:#956295"><i class="fa fa-github fa-2x"></i></a></p>

                    </div>
                    <div class="phone">
                      </div>

                    <div id="small-dialog" class="mfp-hide">
                        <div>
                            <p>Karthik</p>
                        </div>
                    </div>
                    <!---->
                    <div class="clearfix"> </div>
                </div>
                <div class="header-right">
                    <div class="logo">
                        <h1><a href="/">Crop&nbsp;Seer<small><small></small></small></a></h1>
                    </div>

                    @if(Auth::guest())

                    <div class="top-nav-right pull-right col-sx-12" style="font-size:1.3em;" id="user-in">
                        <a href="{{ route('login')}}" class="label label-default" style="background-color: #956295;" >Login</a>
                        <a href="{{ route('register') }}" class="label label-success" style="background-color: #956295;">Signup</a>
                    </div>


                    @else

                    <div class="dropdown  pull-right" >
                        <a href="#"  class="dropdown-toggle btn btn-default" type="button" style="color:#411c0e " data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <ol class="dropdown-menu" role="menu">
                            <li>
                                <a href="/account">Account</a>
                            </li>

                            <li>
                                <a  href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ol>
                </div>
                @endif
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
</div>
<!--header end here-->
<!--top nav start here-->
<div class="top-navg-main">
    <div class="container">
        <div class="top-navg">
            <span class="menu"> <img src="images/icon.png" alt=""/></span>
            <ul class="res">
                <li><a href="/" class="active hvr-sweep-to-bottom">Home</a></li>
                <li><a href="/predict" class="active hvr-sweep-to-bottom">Predict</a></li>
                <li><a class="hvr-sweep-to-bottom" href="/about">About Karthik B</a></li>
                <li><a class="hvr-sweep-to-bottom" href="/how-to-use">How to Use</a></li>
                <li><a class="hvr-sweep-to-bottom" href="/contact">Contact</a></li>
                <li><a class="hvr-sweep-to-bottom" href="/discuss">Feedback</a></li>
                <li><a class="hvr-sweep-to-bottom" href="/team">Team</a></li>
            </ul>
        </div>
    </div>
</div>
</div>
<!--top nav end here-->

@yield('content')

<div class="footer">

    <div class="container">
        <div class="footer-main">
            <div class="col-md-4 ftr-grd">
                <h3>Get in Touch</h3>
                <p>Vidya Vikas Institute of Engineering and Technology</p>
                <p>Mysuru, India</p>
                <p>Phone: +91 9449154411</p>
            </div>
            <div class="col-md-4 ftr-grd">
                <h3>Get Social</h3>
                <ul>
                    <li><a target='_blank'  href="http://www.facebook.com/karthik.ganesh.52643"><span class="fa"> </span></a></li>
                  <!--  <li><a target='_blank'  href="http://twitter.com/ashisKarthik0720"><span class="tw"> </span></a></li>-->
                    <li><a target='_blank'  href="http://www.linkedin.com/in/karthik-b-2a693898"><span class="in"> </span></a></li>
                </ul>
            </div>
            <div class="col-md-4 ftr-grd">
                <h3>Contact Us</h3>
                <p>If you have any query or question, please Contact us.</p>
                <label class="hvr-wobble-bottom">
                    <input type="submit" onclick="window.location.href='/contact'" 	 value="Contact">
                </label>

            </div>

            <div class="clearfix"> </div>

            <div class="copy-right">
                <p><i class="fa fa-code"></i> with <i class="fa fa-heart red" style="color:red"></i> by <a href="http://www.KarthikB.com" target="_blank">Karthik B</a> and <a href='/team'>Team</a></p>
                <p>© 2018-forever Karthik. Nothing reserved ;)</p>
            </div>
        </div>
    </div>
</div>
<!-- script-for-menu -->
<script>
    $( "span.menu" ).click(function() {
        $( "ul.res" ).slideToggle( 300, function() {
            // Animation complete.
        });
    });

</script>
<!-- /script-for-menu -->
<script src="{{ asset('/js/app.js') }}"></script>

</body>
</html>
