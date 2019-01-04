<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <!-- 若您需要使用Kendo UI Professional，请联系版权人获得合法的授权或许可。 -->
    <!-- Bootstrap css -->
    <link href="https://magicbox.bk.tencent.com/static_api/v3/assets/bootstrap-3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <!-- kendo ui css -->
    <link href="https://magicbox.bk.tencent.com/static_api/v3/assets/kendoui-2015.2.624/styles/kendo.common.min.css" rel="stylesheet">
    <link href="https://magicbox.bk.tencent.com/static_api/v3/assets/kendoui-2015.2.624/styles/kendo.default.min.css" rel="stylesheet">
    <!-- font-awesome -->
    <link href="https://magicbox.bk.tencent.com/static_api/v3/assets/fontawesome/css/font-awesome.css" rel="stylesheet">
    <!--蓝鲸提供的公用样式库 -->
    <link href="https://magicbox.bk.tencent.com/static_api/v3/bk/css/bk.css" rel="stylesheet">
    <link href="https://magicbox.bk.tencent.com/static_api/v3/bk/css/bk_pack.css" rel="stylesheet">
    <!-- 如果要使用Bootstrap的js插件，必须先调入jQuery -->
    <style>
        body{
            border: 1px solid #808080;
        }

        .head, .foot {
            background-color: #808080;
            color: #ffffff;
            font-weight: bold;
            text-align: center;
            font-size: xx-large;
        }

        .foot{
            margin-top: 802px;
        }
        .left-top, .right-top{
            width: 50%;
            height: 600px;
        }

        .left-bottom, .right-bottom{
            border-top: 1px solid #808080;
            width: 50%;
            height: 200px;
        }

        .body div{
            float: left;
        }
        .right-top, .right-bottom{
            border-left: 1px solid #808080;
            margin-left: -1px;
        }
        .button{
            margin-top: 20px;
            margin-left: 10px;
            font-size: large;
        }
        #image{
            width: 70%;
        }
        #tesla{
            font-size: large;
        }
    </style>
    <script src="https://magicbox.bk.tencent.com/static_api/v3/assets/js/jquery-1.10.2.min.js"></script>
    <!-- 包括所有bootstrap的js插件或者可以根据需要使用的js插件调用　-->
    <script src="https://magicbox.bk.tencent.com/static_api/v3/assets/echarts-2.0/echarts-all.js"></script>
    <script src="https://magicbox.bk.tencent.com/static_api/v3/assets/bootstrap-3.3.4/js/bootstrap.min.js"></script>
    <!-- 包括所有kendoui的js插件或者可以根据需要使用的js插件调用　-->
    <script src="https://magicbox.bk.tencent.com/static_api/v3/assets/kendoui-2015.2.624/js/kendo.all.min.js"></script>
    <script src="https://magicbox.bk.tencent.com/static_api/v3/assets/echarts-2.0/echarts-all.js"></script>
    <script src="https://magicbox.bk.tencent.com/static_api/v3/bk/js/bk.js"></script>
    <!-- 数据埋点统计 -->
    <script src="http://magicbox.bk.tencent.com/static_api/analysis.js"></script>
    <!-- 以下两个插件用于在IE8以及以下版本浏览器支持HTML5元素和媒体查询，如果不需要用可以移除 -->
    <!--[if lt IE 9]><script src="https://magicbox.bk.tencent.com/static_api/v3/assets/js/html5shiv.min.js"></script><script src="https://magicbox.bk.tencent.com/static_api/v3/assets/js/respond.min.js"></script><![endif]-->
</head>

<body class="bg-white" data-bg-color="bg-white">
<div class="king-page-box">
    <div class="king-layout1-header">
        <nav class="">
            <div style="overflow:hidden; z-index: inherit;" class="navbar king-horizontal-nav1  f14">
                <div class="navbar-container">
                    <div class="navbar-header pull-left">
                        <a class="navbar-brand" href="javascript:;">
                            <img src="https://magicbox.bk.tencent.com/static_api/v3/bk/images/logo.png" class="logo"> </a>
                    </div>
                    <ul class="nav navbar-nav pull-left m0">
                        <li class="active"><a href="javascript:void(0);">首页</a></li>
                    </ul>
                    <div class="navbar-header pull-right">
                        <ul class="nav">
                            <li class="user-info">
                                <a href="javascript:;">
                                    <img class="img-rounded" src="https://magicbox.bk.tencent.com/static_api/v3/components/horizontal_nav1/images/avatar.png">
                                    <span>admin</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div class="king-layout1-main clearfix">
        <!-- sidebar start -->
        <div class="king-layout1-sidebar" style="width:216px;">
            <nav style="overflow:hidden;">
                <div class="king-vertical-nav9    f14"style="height: 650px;">
                    <div class="navbar-collapse navbar-hov"style="height: 100%;">
                        <ul class="nav navbar-nav side-nav" style="height: 100%">
                            <li class="active">
                                <a href="javascript:void(0);"> <i class="fa fa-home ">                            </i>
                                    <span>首页</span> <i class="fa fa-fw "></i> </a>
                                <ul id="demo1" class="collapse"> </ul>
                            </li>
                            <li class="opens">
                                <a href="javascript:void(0);"> <i class="fa fa-laptop ">                            </i>
                                    <span>作业</span> <i class="fa fa-fw fa-caret-down"></i> </a>
                                <ul id="demo2" class="collapse" style="display: block;">
                                    <li><a href="javascript:void(1);">作业一</a></li>
                                    <li><a href="javascript:void(2);">作业二</a></li>
                                    <li><a href="javascript:void(3);">作业三</a></li>
                                    <li><a href="javascript:void(4);">作业四</a></li>
                                    <li><a href="javascript:void(5);">作业五</a></li>
                                    <li><a href="javascript:void(6);">作业六</a></li>
                                    <li><a href="javascript:void(7);">作业七</a></li>
                                    <li><a href="javascript:void(8);">作业八</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <!-- sidebar end -->
        <!-- content start -->
        <div class="king-content-wrap">
            <div class="king-layout1-content" style="margin-left: 216px;">
                <div class="container-fluid mb0 ">
                    <div class="row" style="margin-left: 10px; margin-top: 5px">
                        <div class="head">JavaScript基础练习</div>
                        <div class="body">
                            <div class="left-top">
                                <button class="button" onclick="helloworld()">点点我看看</button>
                                <br>
                                <button class="button" onclick="clickagain()">再点一下</button>
                            </div>
                            <div class="right-top">
                                <p><button class="button" onclick="tesla()">点击这里</button>查看下图中汽车的品牌。</p>
                                <img src="http://i2.hexun.com/2015-11-03/180316559.jpg" alt="" id="image">
                                <p id="tesla"></p>
                            </div>
                            <div class="left-bottom" id="left-bottom">
                                <p id="show1"></p>
                                <p id="show2"></p>
                                <p id="show3"></p>
                            </div>
                            <div class="right-bottom">
                                <p id="showstring1"></p>
                                <p id="showstring2"></p>
                                <p id="showstring3"></p>
                            </div>
                        </div>
                        <div class="foot">@第4次作业</div>
                        <script>
                            function helloworld() {
                                alert('Hello World!');
                            }

                            function clickagain() {
                                document.write('网页内容已被覆盖');
                            }

                            function tesla() {
                                document.getElementById('tesla').innerHTML='Tesla';
                            }
                            function show() {
                                var x = 20;
                                var y = 30;
                                document.getElementById('show1').innerHTML=('x = ' + x +'\n');
                                document.getElementById('show2').innerHTML=('y = ' + y +'\n');
                                document.getElementById('show3').innerHTML=('x + y = ' + (x + y) + '\n');
                            }
                            function showstring(){
                                var t1 = 'php';
                                var t2 = 'html5 javascript';
                                document.getElementById('showstring1').innerHTML=('t1 = ' + t1);
                                document.getElementById('showstring2').innerHTML=('t2 = ' + t2 );
                                document.getElementById('showstring3').innerHTML=('t1 + t2 = ' + t1 + " "+ t2);
                            }
                            show();
                            showstring();
                        </script>
                    </div>
                </div>
            </div>
        </div>
        <!-- content end -->
    </div>
</div>
<script>
    $(function(){
        var li = $('.navbar-nav li');
        li.each(function(){
            $(this).click(function(){
                if( $(this).hasClass('opens')){
                    $(this).find('ul').slideUp(350);
                    $(this).removeClass('opens');
                }else{
                    $(this).find('ul').slideDown(350);
                    $(this).addClass('opens');
                }
            })
        });
    })
</script>
</body>

</html>