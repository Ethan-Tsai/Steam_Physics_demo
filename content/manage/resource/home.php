<?php
// 更改時
// type放類別的數字 item放項目的名字，要跟資料夾中一模一樣!!
$type=1;
$item="1-playstation";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap core CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- carousel 箭頭消失-->

    <!-- jquery-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- bootstrap js-->

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="./physic_web.js"></script>
    <!-- <script src="../../side_btn_move.js"></script> -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!--font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&display=swap" rel="stylesheet">
    <!--font-->

    <link rel="stylesheet" href="../../all_common.css">
    <script src="../../all_common.js"></script>
    <title>遊戲機的物理</title>








    <script type="text/javascript">
        /*$(document).ready(function(){
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    var art_html = 500;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    var eng_html = 700;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    var tec_html = 1500;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    var sci_html = 2000;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    var math_html = 2500;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    var chat_html = 2000;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    /*$("#obj").width($("#cont").width());
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    $("#obj").height($("#cont").height());
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    $("#inner-html").height(math_html+"px");

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               });*/
        /*設定底下的html長度*/
        /*var art_html_height = 500;
        var eng_html_height = 700;
        var tec_html_height = 1500;
        var sci_html_height = 2000;
        var math_html_height = 2500;
        var oth_html_height = 4000;
        var chat_html_height = 4000;*/
        /*============================================================*/
        $(document).ready(function() { /*每次進入頁面 就觸發button*/

            $("#chat_btn").trigger("click");




        });
    </script>
    <script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
</head>

<body>




    <div id="all">
        <!--header-->
        <div id="header" class="header">
            <!--logo-->
            <div id="logo_img" style="background-color: white;">
                <a href="https://www.nsysu.edu.tw/">
                    <img src="../../../../img/content_img/phone_index_img/nsysu.png" alt="">
                </a>
                <p><span id="STEAM">STEAM</span><br><span id="生活物理">生活物理 實驗演示</span></p>
                <a href="https://phys.nsysu.edu.tw/">
                    <img src="../../../../img/content_img/phone_index_img/phylogo.png" alt="">
                </a>

            </div>
            <!--logo_end-->


            <!--title-->
            <div id="title">
                <hr style="margin: 0;">
                <div style="visibility: hidden;">
                    <a href="../../../phone_index.html"><img src="../../../../img/icon/home6.png" alt="" height="40px"></a>
                </div>
                <div>
                    <h1 id="h1">遊戲機的物理</h1>
                </div>
                <div>
                    <a href="../../../phone_index.html"><img src="../../../../img/icon/home7.png" alt="" height="38px" style="padding-bottom: 5px;"></a>
                </div>
                <hr style="margin: 0;">

            </div>
            <!--title-->

            <!--進度條-->
            <div class="progress-container">
                <div class="progress-bar" id="myBar"></div>
            </div>
            <!--進度條__end-->
        </div>
        <!--header_end-->



        <div id="content">

            <!--目錄-->
            <div>
                <div class="container">
                    <!-- <h2 style="color: #dde1e3;">目錄</h2> -->
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                            <li data-target="#myCarousel" data-slide-to="3"></li>
                            <li data-target="#myCarousel" data-slide-to="4"></li>
                            <li data-target="#myCarousel" data-slide-to="5"></li>
                            <li data-target="#myCarousel" data-slide-to="6"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">

                            <div class="item active">
                                <a href="#Art">
                                    <img src="../../../../img/carousel_picture/art.jpg" alt="Art" style="height: 200px;">
                                    <div class="carousel-caption">
                                        <h3>Art/藝術</h3>
                                        <!-- <p>LA is always so much fun!</p> -->
                                    </div>
                                </a>
                            </div>

                            <div class="item">
                                <a href="#Engineering">
                                    <img src="../../../../img/carousel_picture/engineering.jpg" alt="Engineering" style="height: 200px;">
                                    <div class="carousel-caption">
                                        <h3>Engineering/工程</h3>
                                        <!-- <p>Thank you, Chicago!</p> -->
                                    </div>
                                </a>
                            </div>

                            <div class="item">
                                <a href="#Technology">
                                    <img src="../../../../img/carousel_picture/technology.jpg" alt="Technology" style="height: 200px;">
                                    <div class="carousel-caption">
                                        <h3>Technology/技術</h3>
                                        <!-- <p>We love the Big Apple!</p> -->
                                    </div>
                                </a>
                            </div>

                            <div class="item">
                                <a href="#Science">
                                    <img src="../../../../img/carousel_picture/science.jpg" alt="Science" style="height: 200px;">
                                    <div class="carousel-caption">
                                        <h3>Science/科學</h3>
                                        <!-- <p>We love the Big Apple!</p> -->
                                    </div>
                                </a>
                            </div>

                            <div class="item">
                                <a href="#Mathematics">
                                    <img src="../../../../img/carousel_picture/math.jpg" alt="Mathematics" style="height: 200px;">
                                    <div class="carousel-caption">
                                        <h3>Mathematics/數學</h3>
                                        <!-- <p>We love the Big Apple!</p> -->
                                    </div>
                                </a>
                            </div>


                            <div class="item">
                                <a href="#Adv">
                                    <img src="../../../../img/carousel_picture/other.jpg" alt="進階學習" style="height: 200px;">
                                    <div class="carousel-caption">
                                        <h3>進階學習</h3>
                                        <!-- <p>We love the Big Apple!</p> -->
                                    </div>
                                </a>
                            </div>

                            <div class="item">
                                <a href="#高中生實驗">
                                    <img src="../../../../img/carousel_picture/high_5.jpg" alt="高中生實驗" style="height: 200px;">
                                    <div class="carousel-caption">
                                        <h3 style="color:white">高中生實驗</h3>
                                        <!-- <p>We love the Big Apple!</p> -->
                                    </div>
                                </a>
                            </div>

                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>

            <!--目錄end-->



            <!--Art-->
            <div id="Art" class="section" style="background-color: #dde1e3;">

                <h2><button>Art/藝術</button></h2>
                <hr>

                <!--相關影片-->
                <div>
                    <div class="container">

                        <div id="myCarousel_art" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel_art" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel_art" data-slide-to="1"></li>
                                <li data-target="#myCarousel_art" data-slide-to="2"></li>
                                <li data-target="#myCarousel_art" data-slide-to="3"></li>

                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">

                                <div class="item active">
                                    <iframe width="560" height="415" src="https://www.youtube.com/embed/15qWtQkqSps" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>

                                <div class="item">
                                    <iframe width="560" height="415" src="https://www.youtube.com/embed/uqcR3lNCspQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>

                                <div class="item">
                                    <iframe width="560" height="415" src="https://www.youtube.com/embed/SpPHnPIfjSE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>

                                <div class="item">
                                    <iframe width="560" height="415" src="https://www.youtube.com/embed/67rhvLv6Nac" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>





                            </div>

                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel_art" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel_art" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>


                </div>
                <!--相關影片_end-->

                <!--說明-->
                <div class="sec_con">
                    <div class="container">
                        <hr>
                        <h4>說明</h4>
                        <hr>

                        <div id="pdfin">
                            <object data="https://ethan-tsai.github.io/Steam_Physics_demo/content/categories/type<?=$type?>/<?=$item?>/heading_pdf/art.pdf" width="99%" height="500"></object>
                        </div>

                        <h5> 查看 <a href="heading_pdf/art.pdf" target=”_blank”><button>PDF</button></a></h5>
                    </div>

                </div>
                <!--說明_end-->

            </div>
            <!--Art_end-->


            <!--Eng-->
            <div id="Engineering" class="section" style="background-color: #dde1e3;">

                <h2><button>Engineering/工程</button></h2>
                <hr>



                <!--相關影片-->
                <div>
                    <div class="container">


                        <div id="myCarousel_eng" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel_eng" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel_eng" data-slide-to="1"></li>
                                <li data-target="#myCarousel_eng" data-slide-to="2"></li>
                                <li data-target="#myCarousel_eng" data-slide-to="3"></li>

                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">

                                <div class="item active">
                                    <iframe width="560" height="415" src="https://www.youtube.com/embed/2pJ64XM_BRY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>

                                <div class="item">
                                    <iframe width="560" height="415" src="https://www.youtube.com/embed/biI5KkvFKPY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>

                                <div class="item">
                                    <iframe width="560" height="415" src="https://www.youtube.com/embed/d5l8za7E2Ho" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>

                                <div class="item">
                                    <iframe width="560" height="415" src="https://www.youtube.com/embed/UOiigMvBwqA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>

                            </div>

                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel_eng" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel_eng" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>


                </div>
                <!--相關影片_end-->

                <!--說明-->
                <div class="sec_con">
                    <div class="container">
                        <hr>
                        <h4>說明</h4>
                        <hr>
                        <div id="pdfin">
                            <object data="https://ethan-tsai.github.io/Steam_Physics_demo/content/categories/type<?=$type?>/<?=$item?>/heading_pdf/engineering.pdf" width="99%" height="500"></object>
                        </div>
                        <h5> 查看 <a href="heading_pdf/engineering.pdf" target=”_blank”><button>PDF</button></a></h5>
                    </div>
                </div>
                <!--說明_end-->

            </div>
            <!--Eng_end-->



            <!--Tec-->
            <div id="Technology" class="section" style="background-color: #dde1e3;">

                <h2><button>Technology/技術</button></h2>
                <hr>

                <!--相關影片-->
                <div>
                    <div class="container">

                        <div id="myCarousel_tec" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel_tec" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel_tec" data-slide-to="1"></li>
                                <li data-target="#myCarousel_tec" data-slide-to="2"></li>
                                <li data-target="#myCarousel_tec" data-slide-to="3"></li>

                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">

                                <div class="item active">
                                    <iframe width="560" height="415" src="https://www.youtube.com/embed/d3ZO9nI4mkc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                                <div class="item">
                                    <iframe width="560" height="415" src="https://www.youtube.com/embed/O_07SE5f2cg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>

                                <div class="item">
                                    <iframe width="560" height="415" src="https://www.youtube.com/embed/02Xy9wd01FQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>

                                <div class="item">
                                    <iframe width="560" height="415" src="https://www.youtube.com/embed/Rnk_akgSjqg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>

                            </div>

                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel_tec" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel_tec" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>


                </div>
                <!--相關影片_end-->

                <!--說明-->
                <div class="sec_con">
                    <div class="container">
                        <hr>
                        <h4>說明</h4>
                        <hr>
                        <div id="pdfin">
                            <object data="https://ethan-tsai.github.io/Steam_Physics_demo/content/categories/type<?=$type?>/<?=$item?>/heading_pdf/technology.pdf" width="99%" height="500"></object>
                        </div>
                        <h5> 查看 <a href="heading_pdf/technology.pdf" target=”_blank”><button>PDF</button></a></h5>
                    </div>
                </div>
                <!--說明_end-->


            </div>
            <!--Tec_end-->

            <!--Sci-->
            <div id="Science" class="section" style="background-color: #dde1e3;">

                <h2><button>Science/科學</button></h2>
                <hr>

                <!--相關影片-->
                <div>
                    <div class="container">

                        <div id="myCarousel_sci" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel_sci" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel_sci" data-slide-to="1"></li>
                                <li data-target="#myCarousel_sci" data-slide-to="2"></li>
                                <li data-target="#myCarousel_sci" data-slide-to="3"></li>

                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">

                                <div class="item active">
                                    <iframe width="560" height="415" src="https://www.youtube.com/embed/5-hcpyR4YWU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>

                                <div class="item">
                                    <iframe width="560" height="415" src="https://www.youtube.com/embed/bYCH_Gbupzo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>

                                <div class="item">
                                    <iframe width="560" height="415" src="https://www.youtube.com/embed/YJRAJvOU7nI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>

                                <div class="item">
                                    <iframe width="560" height="415" src="https://www.youtube.com/embed/Q89ebAcFaWQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>





                            </div>

                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel_sci" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel_sci" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>


                </div>
                <!--相關影片_end-->

                <!--說明-->
                <div class="sec_con">
                    <div class="container">
                        <hr>
                        <h4>說明</h4>
                        <hr>

                        <div id="pdfin">
                            <object data="https://ethan-tsai.github.io/Steam_Physics_demo/content/categories/type<?=$type?>/<?=$item?>/heading_pdf/science.pdf" width="99%" height="500"></object>
                        </div>

                        <h5> 查看 <a href="heading_pdf/science.pdf" target=”_blank”><button>PDF</button></a></h5>
                    </div>

                </div>
                <!--說明_end-->

            </div>
            <!--Sci_end-->


            <!--Math-->
            <div id="Mathematics" class="section" style="background-color: #dde1e3;">

                <h2><button>Mathematics/數學</button></h2>
                <hr>

                <!--相關影片-->
                <div>
                    <div class="container">

                        <div id="myCarousel_math" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel_math" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel_math" data-slide-to="1"></li>
                                <li data-target="#myCarousel_math" data-slide-to="2"></li>
                                <li data-target="#myCarousel_math" data-slide-to="3"></li>

                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">

                                <div class="item active">
                                    <iframe width="560" height="415" src="https://www.youtube.com/embed/UWrSuEFXxhY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>

                                <div class="item">
                                    <iframe width="560" height="415" src="https://www.youtube.com/embed/uq9SEJxZiUg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>

                                <div class="item">
                                    <iframe width="560" height="415" src="https://www.youtube.com/embed/ztsi0CLxmjw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>

                                <div class="item">
                                    <iframe width="560" height="415" src="https://www.youtube.com/embed/BnpPkPTlkGs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>





                            </div>

                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel_math" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel_math" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>


                </div>
                <!--相關影片_end-->

                <!--說明-->
                <div class="sec_con">
                    <div class="container">
                        <hr>
                        <h4>說明</h4>
                        <hr>

                        <div id="pdfin">
                            <object data="https://ethan-tsai.github.io/Steam_Physics_demo/content/categories/type<?=$type?>/<?=$item?>/heading_pdf/math.pdf" width="99%" height="500"></object>
                        </div>

                        <h5> 查看 <a href="heading_pdf/math.pdf" target=”_blank”><button>PDF</button></a></h5>
                    </div>

                </div>
                <!--說明_end-->

            </div>
            <!--Math_end-->


            <!--進階-->
            <div id="Adv" class="section" style="background-color: #dde1e3;">

                <h2><button>進階學習/Advanced</button></h2>
                <hr>

                <!--相關影片-->
                <div>
                    <div class="container">

                        <div id="myCarousel_Adv" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel_Adv" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel_Adv" data-slide-to="1"></li>
                                <li data-target="#myCarousel_Adv" data-slide-to="2"></li>
                                <li data-target="#myCarousel_Adv" data-slide-to="3"></li>

                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">

                                <div class="item active">
                                    <iframe width="560" height="415" src="https://www.youtube.com/embed/ys9cneFeLxc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>

                                <div class="item">
                                    <iframe width="560" height="415" src="https://www.youtube.com/embed/ecg9JxsrNw8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>

                                <div class="item">
                                    <iframe width="560" height="415" src="https://www.youtube.com/embed/20ZgiAXPuA4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>

                                <div class="item">
                                    <iframe width="560" height="415" src="https://www.youtube.com/embed/BoSuyF3FWAM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>





                            </div>

                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel_Adv" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel_Adv" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>


                </div>
                <!--相關影片_end-->

                <!--說明-->
                <div class="sec_con">
                    <div class="container">
                        <hr>
                        <h4>說明</h4>
                        <hr>

                        <div id="pdfin">
                            <object data="https://ethan-tsai.github.io/Steam_Physics_demo/content/categories/type<?=$type?>/<?=$item?>/heading_pdf/science.pdf" width="99%" height="500"></object>
                        </div>

                        <h5> 查看 <a href="heading_pdf/science.pdf" target=”_blank”><button>PDF</button></a></h5>
                    </div>

                </div>
                <!--說明_end-->

            </div>
            <!--進階_end-->







            <!--高中生實驗-->
            <div id="高中生實驗" class="section" style="background-color: #dde1e3;">

                <h2><button>高中生實驗</button></h2>
                <hr>

                <div class="sec_con">
                    <h4>歷年實驗說明文件</h4>
                    <hr>
                    <div id="pdfin">
                        <object data="https://ethan-tsai.github.io/Steam_Physics_demo/content/categories/type<?=$type?>/<?=$item?>/heading_pdf/chat.pdf" width="99%" height="500"></object>
                    </div>
                    <h5> 查看 <a href="heading_pdf/chat.pdf" target=”_blank”><button>PDF</button></a></h5>
                </div>




                <!--歷屆優秀影片-->

                <div class="sec_con" class="container">
                    <hr>
                    <h4>歷年優秀影片</h4>
                    <hr>

                    <div id="mySidenav" class="sidenav">


                        <div id="allBTN">


                            <!--Use col-lg to control the number of the headingmax width:1170px-->
                            <!--<div class="row">-->
                            <div class="btnDiv">
                                <button id="art_btn" type="button" style="background-color: inherit;border: none"><a href="art_html.html"><img class="img-circle" src="../heading_picture/art.jpg" alt="Generic placeholder image" ></a></button>
                                <p class="btn-text">Art/藝術</p>
                            </div>
                            <!-- /.col-sm-1 -->
                            <div class="btnDiv">
                                <button id="eng_btn" type="button" style="background-color: inherit;border: none"><a href="eng_html.html"><img class="img-circle" src="../heading_picture/engineering.jpg" alt="Generic placeholder image"></a></button>
                                <p class="btn-text">Engineering/工程</p>
                            </div>
                            <!-- /.col-sm-1 -->
                            <div class="btnDiv">
                                <button id="tec_btn" type="button" style="background-color: inherit;border: none"><a href="tec_html.html"><img class="img-circle" src="../heading_picture/technology.jpg" alt="Generic placeholder image"></a></button>
                                <p class="btn-text">Technology/技術</p>
                            </div>
                            <!-- /.col-sm-1 -->
                            <div class="btnDiv">
                                <button id="sci_btn" type="button" style="background-color: inherit;border: none"><a href="sci_html.html"><img class="img-circle" src="../heading_picture/science.jpg" alt="Generic placeholder image"></a></button>
                                <p class="btn-text">Science/科學</p>
                            </div>
                            <!-- /.col-sm-1 -->
                            <div class="btnDiv">
                                <button id="math_btn" type="button" style="background-color: inherit;border: none"><a href="math_html.html"><img class="img-circle" src="../heading_picture/math.jpg" alt="Generic placeholder image"></a></button>
                                <p class="btn-text">Mathematics/數學</p>
                            </div>
                            <div class="btnDiv">
                                <button id="oth_btn" type="button" style="background-color: inherit;border: none"><a href="oth_html.html"><img class="img-circle" src="../heading_picture/other.jpg" alt="Generic placeholder image"></a></button>
                                <p class="btn-text">進階學習</p>
                            </div>
                            <div class="btnDiv">
                                <button id="chat_btn" type="button" style="background-color: inherit;border: none"><a href="chat_html.html"><img class="img-circle" src="../heading_picture/fb.jpg" alt="Generic placeholder image"></a></button>
                                <p class="btn-text">Experiment/高中生實驗</p>
                            </div>

                            <!-- /.col-sm-1 -->
                        </div>

                        <div align="center" width="560" height="415" id="re">
                            <iframe width="560" height="415" id="totalVideo" class="video-style" src="" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <br>
                        <br>
                        <hr>
                        <h4>相關影片</h4>
                        <hr>
                        <div class="html-video">

                            <div class="chat-html-video"><br></div>
                        </div>

                        </br>
                        </br>
                        <!--For changing youtube video link-->
                        <a href="" id="chat_changing_video"></a>

                        </br>
                        </br>

                    </div>
                    <!--For changing youtube video link-->

                    <div align="center">


                    </div>
                </div>
                <!--歷屆優秀影片end-->
            </div>
            <!--高中生實驗_end-->


        </div>
        <!--content_end-->

        <!--footer-->
        <div id="foot">
            <div id="foot_icon">
                <div>
                    <a href="https://www.facebook.com/physdemo/?locale=zh_TW" target=”_blank”>
                        <img src="../../../../img/icon/facebook.png" alt="">
                    </a>
                </div>
                <div>
                    <a href="https://www.youtube.com/@user-cl6kr8jg2x/featured" target=”_blank”>
                        <img src="../../../../img/icon/youtube.png" alt="">
                    </a>
                </div>
                <div>
                    <a href="physaa@mail.nsysu.edu.tw" target=”_blank”>
                        <img src="../../../../img/icon/gmail.png" alt="">
                    </a>
                </div>
            </div>
            <hr>
            <p>本網站內容若有侵權 請聯絡我們 <br>© 2023 STEAM Physics Demo Web <br></p>
            <a href="./manage/login.html" style="color: black;">管理員登入</a>
        </div>
        <!--footer_end-->

    </div>
</body>

</html>