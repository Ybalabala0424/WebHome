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
    <!-- ==== Main Stylesheet ==== -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/an-skill-bar.css">
<!--    <link rel="stylesheet" href="css/main.css">-->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<?php
$userid     = $_GET['userid'];
$servername = "127.0.0.1";
$username   = "root";
$password   = "";
$dbname     = "project1";
//$seen=0;
// 创建连接
$conn = new mysqli( $servername, $username, $password, $dbname );
// 检测连接
if ( $conn->connect_error ) {
	die( "连接失败: " . $conn->connect_error );
}
//设定字符集,解决数据库插入可能出现乱码，设置编码为GBK
mysql_query( "set names 'utf8'" );
//构造sql查询语句
$sql = "select * from user where userid = '$userid'";
//执行SQL语句
$result = $conn->query( $sql );
//统计执行结果影响的行数
$num = $result->num_rows;
//如果已经存在该用户
if ( $num ) {
	//将数据以索引的方式存储在数组中
	$row      = mysqli_fetch_array( $result );
	$userid   = $row[0];
	$username = $row[2];
} else {
	echo "没有找到相应对象";
}
?>
<body>
<nav class="wrap-body fixed-top">
    <div class="header">
        <div id='cssmenu' class="align-right">
            <ul>
                <li class="active"><a href='#'><span></span></a></li>
                <li><a href='http://localhost:8080/vuepress/'><span>主页</span></a>
                </li>
                <li><a href='#'><span>文章</span></a></li>
                <li><a href='trip.html'><span>旅游</span></a></li>
                <li><a href='stars.php'><span>明星</span></a></li>
                <li class='last'><a href='login.html'><span>退出</span></a></li>
            </ul>
        </div>
    </div>
</nav>
<br>
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 pb--60" id="content">
				<?php
				$sql1    = "select * from article";
				$result1 = $conn->query( $sql1 );
				$num1    = $result->num_rows;
				while ( $row1 = mysqli_fetch_array( $result1 ) ) {
					$id          = $row1[0];
					$passagename = $row1[1];
					$likes       = $row1[2];
					$content1    = $row1[3];
					$content2    = $row1[4];
					$tag         = $row1[5];
					$commentsnum = $row1[6];
					$likeid      = "like$id";
					$commentid   = "comment$id";
					$spanid      = "span$id";
					$sql2        = "select * from comment WHERE articleId = '$id'";
					$result2     = $conn->query( $sql2 );
					$num2        = $result->num_rows;
					echo "
                        <div class=\"post--item sticky text-center\">
                        <div class=\"post--cat\">
                            <a href=\"#\" data-overlay=\"0.5\" data-overlay-color=\"primary\">$tag</a>
				        </div >
                        <div class=\"post--title\">
                            <h2 class=\"h3\" ><a href=\"#\" class=\"btn-link\" >$passagename</a ></h2 >
                        </div >
                        <div class=\"post--excerpt\">$content1</div >
                        <div class=\"post--excerpt collapse\" id =\"$id\" >
                            <p > $content2</p >
                        </div >
                        <div class=\"post--action\" >
                            <a class=\"btn btn-default collapsed\" data-toggle = \"collapse\" href = \"#$id\"
                            aria-expanded = \"false\" aria-controls = \"allContent\" > 阅读全文</a >
                        </div >
                        <div class=\"post--meta clearfix\" >
						    <p class=\"float--left\">
							    <i class=\"fa fa-clock-o text-primary\"></i>
							    <span>2019/04/27</span>
							    <a href=\"personal.php\">瑶九九</a>
						    </p>
                            <p class=\"float--right\" >
                            <i class=\"fa fa-heart-o text-primary\"  id =\"$likeid\" onclick =\"changelike()\" ></i >
                            <span id=\"$spanid\">$likes</span >
                            </p >
                            <p class=\"float--right\" >
                            <a class=\"btn-link collapse\" data-toggle = \"collapse\" href = \"#$commentid\"
                               aria-expanded = \"false\" aria-controls = \"$commentid\" >
                                <i class=\"fa fa-comments-o text-primary\"></i>
                                <span > $commentsnum </span >
                            </a >
                            </p >
                            <div class=\"collapse\" id=\"$commentid\">
                            <div id=\"comments\" class=\"post --comments pt --40\">
                                <div class=\"post--comments-title text-uppercase text-center\">
                                    <h2 class=\"h5\">评论</h2>
                                </div>
                                <ul class=\"comment--items\">
                                    <li>
                                        <div class=\"comment--item clearfix\">
                                            <div class=\"comment--info ov--h\">
                                                <div class=\"comment--header clearfix\">
                                                    <h3 class=\"name h5\">commentUser</h3>
                                                </div>
                                                <div class=\"comment--content\">
                                                    <p>commentContent</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <form action = \"php/postComment.php?userid=$userid&&articleId=$id\"data-form=\"validate\" method=\"post\">
                            <div class=\"form-group\">
                                <input type=\"text\" name=\"comment\" placeholder=\"请输入评论内容\" class=\"form-control\" required>
                                <button type=\"submit\" class=\"reply btn-link float--right\">确定</button>
                            </div>
                        </form>
                            </div>
                            </div>
                        </div>
                        </div>
						";
				}
				?>
            </div>
            <div class="col-md-4 pb--60">
                <!-- Widget Start -->
                <div class="widget">
                    <h2 class="h4 widget--title">个人</h2>
                    <!-- About Widget Start -->
                    <div class="about--widget pb--3 text-center">
                        <div class="img">
                            <a href="#">
                                <img src="img/posts-img/head.jpg" alt="" class="img-circle">
                            </a>
                        </div>

                        <div class="info">
                            <h3 class="name h5 text-primary"><a href="#" class="btn-link">
                                    瑶九九
                                </a></h3>

                            <p class="role">秃头程序媛</p>
                        </div>

                        <div class="social">
                            <ul class="nav">
                                <li><a data-toggle="modal" data-target="#messege"><i
                                                class="fa fa-address-book-o"></i></a></li>
                                <div class="modal fade" id="messege" tabindex="-1" role="dialog"
                                     aria-labelledby="myModalLabel" aria-hidden="true" style="margin-top:5% ">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true">&times;
                                                </button>
                                                <h4 class="modal-title" id="myModalLabel">个人信息</h4>
                                            </div>
                                            <div class="modal-body" style="align-content: center">
                                                <span>
                                                <i class="glyphicon glyphicon-user pull-left" aria-hidden="true"></i>
                                                </span>
                                                <div>瑶九九</div>
                                                <br>
                                                <span>
                                                <i class="fa fa-drivers-license-o pull-left" aria-hidden="true"></i>
                                                </span>
                                                <div><?php
											        echo $userid;
											        ?></div>
                                                <br>
                                                <span>
                                                <i class="fa fa-lock pull-left" aria-hidden="false"></i>
                                                </span>
                                                <span>
                                                <i class="fa fa-eye pull-right" aria-hidden="false" onclick="showPsw()"
                                                   id="pswicon"></i>
                                                </span>
                                                <div id="password">******</div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">关闭
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <li><a data-toggle="modal" data-target="#passege"><i class="fa fa-file-text-o"></i></a>
                                </li>
                                <div class="modal fade" id="passege" tabindex="-1" role="dialog"
                                     aria-labelledby="myModalLabel" aria-hidden="true" style="margin-top:5% ">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true">&times;
                                                </button>
                                                <h4 class="modal-title" id="myModalLabel">发帖</h4>
                                            </div>
                                            <div class="modal-body" style="align-content: center">
                                                <form action="php/sendpassage.php" data-form="validate" method="post">
                                                    <div class="form-group">
                                                        <input type="text" name="passagename" placeholder="请输入文章标题"
                                                               class="form-control" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" name="tag" placeholder="请输入文章标签"
                                                               class="form-control" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <textarea name="content1" placeholder="请输入文章第一段"
                                                                  class="form-control" required></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <textarea name="content2" placeholder="请输入之后的文章"
                                                                  class="form-control" required></textarea>
                                                    </div>
                                                    <button type="submit" class="btn btn-default">确认</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <li><a data-toggle="modal" data-target="#schedule"><i class="fa fa-bar-chart-o"></i></a>
                                </li>
                                <div class="modal fade" id="schedule" tabindex="-1" role="dialog"
                                     aria-labelledby="myModalLabel" aria-hidden="true" style="margin-top:5% ">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true">&times;
                                                </button>
                                                <h4 class="modal-title" id="myModalLabel">学习进度</h4>
                                            </div>
                                            <div class="modal-body" style="align-content: center">
                                                <div id="skill">
                                                    <div class="skillbar html">
                                                        <div class="filled" data-width="75%"></div>
                                                        <span class="title">HTML</span>
                                                        <span class="percent">75%</span>
                                                    </div>

                                                    <div class="skillbar css">
                                                        <span class="title"></i> CSS</span>
                                                        <span class="percent">75%</span>
                                                        <div class="filled" data-width="75%"></div>
                                                    </div>

                                                    <div class="skillbar js">
                                                        <span class="title">JS</span>
                                                        <span class="percent">60%</span>
                                                        <div class="filled" data-width="60%"></div>
                                                    </div>

                                                    <div class="skillbar php">
                                                        <span class="title">php</span>
                                                        <span class="percent">40%</span>
                                                        <div class="filled" data-width="40%"></div>
                                                    </div>

                                                    <div class="skillbar nodejs">
                                                        <span class="title"></i> nodejs</span>
                                                        <span class="percent">30%</span>
                                                        <div class="filled" data-width="30%"></div>
                                                    </div>

                                                    <div class="skillbar mysql">
                                                        <span class="title"></i> mysql</span>
                                                        <span class="percent">40%</span>
                                                        <div class="filled" data-width="40%"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </ul>
                        </div>

                        <div class="bio">
                            <p>To be. It will be worth it.
                            </p>
                        </div>
                    </div>
                    <!-- About Widget End -->
                </div>
                <div class="widget">
                    <h2 class="h4 widget--title">文章分类</h2>

                    <!-- Links Widget Start -->
                    <div class="links--widget pb--10">
                        <ul class="nav">
                            <li>
                                <a class="collapsed" data-toggle="collapse" href="#allsimple"
                                   aria-expanded="false" aria-controls="allsimple">
                                    <span class="text">前端学习</span>
                                    <span class="count">5</span>
                                </a>
                                <div class="panel-collapse collapse" id="allsimple">
                                    <ul>
                                        <li><a href="#"><span class="post--excerpt h5 text-primary">框架学习</span></a></li>
                                        <li><a href="#"><span class="post--excerpt h5 text-primary">框架学习</span></a></li>
                                        <li><a href="#"><span class="post--excerpt h5 text-primary">框架学习</span></a></li>
                                        <li><a href="#"><span class="post--excerpt h5 text-primary">框架学习</span></a></li>
                                        <li><a href="#"><span class="post--excerpt h5 text-primary">框架学习</span></a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="text">JS红宝书</span>
                                    <span class="count">7</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="text">后台学习</span>
                                    <span class="count">4</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="text">调试工具学习</span>
                                    <span class="count">14</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="text">网络学习</span>
                                    <span class="count">6</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</section>
<script src="js/jquery-3.2.1.min.js"></script>
<!-- ==== Bootstrap Framework ==== -->
<script src="js/bootstrap.min.js"></script>
<!-- ==== Owl Carousel Plugin ==== -->
<script src="js/owl.carousel.min.js"></script>
<!-- ==== Magnific Popup Plugin ==== -->
<script src="js/jquery.magnific-popup.min.js"></script>
<!-- ==== Validation Plugin ==== -->
<script src="js/jquery.validate.min.js"></script>
<!-- ==== Match Height Plugin ==== -->
<script src="js/jquery.matchHeight-min.js"></script>
<!-- ==== Isotope Plugin ==== -->
<script src="js/isotope.min.js"></script>
<!-- ==== Footer Reveal Plugin ==== -->
<script src="js/footer-reveal.min.js"></script>
<!-- ==== Retina Plugin ==== -->
<script src="js/retina.min.js"></script>
<!-- ==== Main Script ==== -->
<script src="js/main1.js"></script>
<script>
    var psw = document.getElementById("password");
    var iconsrc = document.getElementById('pswicon');
    var log = document.getElementById("log");
    var num = 1;
    function showPsw() {
        if (num % 2 == 1) {
            psw.innerHTML = <?php echo "123456" ?>;
            iconsrc.setAttribute('class', "fa fa-eye-slash pull-right");
        }
        else {
            psw.innerHTML = '******';
            iconsrc.setAttribute('class', "fa fa-eye pull-right");
        }
        num++;
    }
    var numlike = 1;
    function changelike() {
        var likeid = window.event.srcElement.id;
        var like = document.getElementById(likeid);
        var spanid = likeid.replace("like", "span");
        var spancontent = document.getElementById(spanid);
        if (numlike % 2 == 1) {
            like.setAttribute('class', "fa fa-heart text-primary");
            spancontent.innerHTML = parseInt(spancontent.innerHTML) + 1;
        }
        else {
            like.setAttribute('class', "fa fa-heart-o text-primary");
            spancontent.innerHTML = parseInt(spancontent.innerHTML) - 1;
        }
        numlike++;
    }
</script>
<script src="js/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="js/an-skill-bar.js"></script>
<script src="js/main2.js"></script>
</body>
</html>
