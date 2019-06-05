<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Personal</title>
    <!-- ==== Font Awesome ==== -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- ==== Bootstrap Framework ==== -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- ==== Owl Carousel Plugin ==== -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- ==== Magnific Popup Plugin ==== -->
    <link rel="stylesheet" href="css/magnific-popup.min.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/responsive-style.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="css/Stars.css">
    <!-- ==== Main Stylesheet ==== -->
    <link rel="stylesheet" href="css/style.css">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        #cssmenu ul {
            width: 50px;
            height: 50px;
            position: relative;
            transform-style: preserve-3d;
            transform: rotateX(-27deg) rotateY(-55deg);
            animation: willRote 3s ease-in-out infinite;
        rgba(0, 0, 0, 0.5)
        }

        @keyframes willRote {
            0% {
                transform: rotateX(-27deg) rotateY(-55deg);
            }
            25% {
                transform: rotateX(-27deg) rotateY(180deg);
            }
            50% {
                transform: rotateX(-27deg) rotateY(360deg);
            }
            75% {
                transform: rotateX(-27deg) rotateY(480deg);
            }
            100% {
                transform: rotateX(-27deg) rotateY(665deg);
            }
        }

        #cssmenu .ul li {
            list-style: none;
            width: 50px;
            height: 50px;
            text-align: center;
            line-height: 50px;
            font-size: 20px;
            position: absolute;
        }

        #cssmenu .ul li:nth-child(1) {
            box-shadow: inset 0px 0px 30px rgba(125, 125, 125, 0.8);
            transform: rotateX(90deg) translateZ(25PX);
        }

        #cssmenu .ul li:nth-child(2) {
            box-shadow: inset 0px 0px 30px rgba(125, 125, 125, 0.8);
            transform: rotateX(180deg) translateZ(25PX);
        }

        #cssmenu .ul li:nth-child(3) {
            box-shadow: inset 0px 0px 30px rgba(125, 125, 125, 0.8);
            transform: rotateX(270deg) translateZ(25PX);
        }

        #cssmenu .ul li:nth-child(4) {
            box-shadow: inset 0px 0px 30px rgba(125, 125, 125, 0.8);
            transform: rotateX(360deg) translateZ(25PX);
        }

        #cssmenu .ul li:nth-child(5) {
            box-shadow: inset 0px 0px 30px rgba(125, 125, 125, 0.8);
            transform: rotateY(90deg) translateZ(25PX);
        }
        #cssmenu .ul li:nth-child(6) {
            box-shadow: inset 0px 0px 30px rgba(125, 125, 125, 0.8);
            transform: rotateY(90deg) translateZ(-25PX);
        }
    </style>
</head>
<body>
<nav class="wrap-body fixed-top">
    <div class="header">
        <div id='cssmenu' class="align-right">
            <ul>
                <li class="active"><a href='#'><span></span></a></li>
                <li><a href='home.php'><span>主页</span></a>
                </li>
                <li><a href='personal.php?userid=2017101088'><span>文章</span></a></li>
                <li><a href='trip.html'><span>旅游</span></a></li>
                <li><a href='#'><span>明星</span></a></li>
                <li class='last'><a href='login.html'><span>退出</span></a></li>
            </ul>
        </div>
    </div>
</nav>
<br>
<section class="section">
    <div class="row clearfix">
        <div class="col-md-10 col-md-offset-1 column">
            <div class="jumbotron">
                <div class="row">
                    <div class="col-md-6 col-md-offset-1 pb--60">
                        <div id="myCarousel" class="carousel slide">
                            <!-- 轮播（Carousel）指标 -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                                <li data-target="#myCarousel" data-slide-to="3"></li>
                                <li data-target="#myCarousel" data-slide-to="4"></li>
                                <li data-target="#myCarousel" data-slide-to="5"></li>
                            </ol>
                            <!-- 轮播（Carousel）项目 -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="img/posts-img/blackpink1.jpg" alt="First slide">
                                </div>
                                <div class="item">
                                    <img src="img/posts-img/blackpink2.jpg" alt="Second slide">
                                </div>
                                <div class="item">
                                    <img src="img/posts-img/blackpink3.jpg" alt="Third slide">
                                </div>
                                <div class="item">
                                    <img src="img/posts-img/blackpink4.jpg" alt="Forth slide">
                                </div>
                                <div class="item">
                                    <img src="img/posts-img/blackpink5.jpg" alt="Fifth slide">
                                </div>
                                <div class="item">
                                    <img src="img/posts-img/blackpink6.jpg" alt="Sixth slide">
                                </div>
                            </div>
                            <!-- 轮播（Carousel）导航 -->
                            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="alert alert-dismissable alert-info" id="infor">
                            <h2><strong>
                                    BlackPink
                                </strong></h2>
                            <p>
                                <small>BLACKPINK是YG
                                    Entertainment于2016年8月8日推出的女子演唱组合，由金智秀（JISOO）、金智妮（JENNIE）、朴彩英（ROSÉ）、LISA
                                    4名成员组成。BLACKPINK这个组合名在看起来很美的粉色中稍微加入了否定的意义，旨在传达出“不要只看漂亮的部分”、“看到的并不是全部”的意思。BLACKPINK散发出强烈的Girl
                                    Crush魅力,BLACKPINK四名成员在强烈的节奏下从容有序地展现了自己精湛的舞技,融入节奏的表情和有序的群舞。
                                </small>
                            </p>
                            <a class="alert-link"
                               href="https://baike.baidu.com/item/BLACKPINK/19776124?fr=aladdin">-百度一下-</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-1">
                        <div class="ddu">
                            <h3>
                                Ddu Du Ddu Du
                                <small class="sm">Blackpink</small>
                            </h3>
                        </div>
                        <div class="widget-container widget-video boxed">
                            <video id="video1" controls preload="auto" poster="img/posts-img/blackpink.jpg"
                                   class="video-js vjs-styled-skin">
                                <source src="video/blackpink1.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <div class="col-md-2 pb--50">
                        <nav class="navbar navbar-default" role="navigation">
                            <div class="container-fluid">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                                            data-target="#example-navbar-collapse">
                                        <span class="sr-only">切换导航</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <div class="navbar-brand" id="all">成员</div>
                                </div>
                                <div class="collapse navbar-collapse" id="member">
                                    <ul class="nav navbar-nav"><a name="bl"></a>
                                        <li class="active" id="Jennie"><a href="#b1"><img src="img/posts-img/jennie.jpg"
                                                                                          id="blink"
                                                                                          onclick="showJennie()"/>Jennie</a>
                                        </li>
                                        <li id="Lisa"><a href="#b1"><img src="img/posts-img/lisa.jpg" id="blink"
                                                                         onclick="showLisa()"/>Lisa</a></li>
                                        <li id="Rose"><a href="#b1"><img src="img/posts-img/rose.jpg" id="blink"
                                                                         onclick="showRose()"/>Rose</a></li>
                                        <li id="Jisoo"><a href="#b1"><img src="img/posts-img/jisoo.jpg" id="blink"
                                                                          onclick="showJisoo()"/>Jisoo</a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <div class=col-md-2 pb--50
                    ">
                    <div class="angel" id="angel">
                        <span class="bot"></span>
                        <span class="top"></span>
                    </div>
                    <div class="picture">
                        <img id="pic" src="img/posts-img/p1.gif"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- jQuery (Bootstrap 的所有 JavaScript 插件都依赖 jQuery，所以必须放在前边) -->
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
    var picture = document.getElementById('pic');
    var Jennie = document.getElementById('Jennie');
    var Lisa = document.getElementById('Lisa');
    var Rose = document.getElementById('Rose');
    var Jisoo = document.getElementById('Jisoo');
    var angel = document.getElementById('angel');
    function showJennie() {
        picture.src = 'img/posts-img/p1.gif';
        Jennie.setAttribute("class", "active");
        Lisa.setAttribute("class", "");
        Rose.setAttribute("class", "");
        Jisoo.setAttribute("class", "");
        angel.style.marginTop = 20 + '%';
    }
    function showLisa() {
        picture.src = 'img/posts-img/p3.gif';
        Lisa.setAttribute("class", "active");
        Jennie.setAttribute("class", "");
        Rose.setAttribute("class", "");
        Jisoo.setAttribute("class", "");
        angel.style.marginTop = 90 + '%';
    }
    function showRose() {
        picture.src = 'img/posts-img/p4.gif';
        Rose.setAttribute("class", "active");
        Lisa.setAttribute("class", "");
        Jennie.setAttribute("class", "");
        Jisoo.setAttribute("class", "");
        angel.style.marginTop = 180 + '%';
    }
    function showJisoo() {
        picture.src = 'img/posts-img/p2.gif';
        Jisoo.setAttribute("class", "active");
        Lisa.setAttribute("class", "");
        Rose.setAttribute("class", "");
        Jennie.setAttribute("class", "");
        angel.style.marginTop = 250 + '%';
    }
</script>
</body>
</html>
