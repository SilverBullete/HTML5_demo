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
    <style>
        body {
            border: 2px solid #000000;
        }

        div {
            overflow: auto;
        }

        .italic {
            font-style: italic;
        }

        table {
            width: 100%;
            height: 92%;
        }

        .head, .foot {
            background-color: #808080;
            color: #ffffff;
            font-weight: bold;
            font-size: x-large;
            text-align: center;
        }

        .right {
            position: absolute;
            margin-left: 25%;
            padding: 25px 20px 25px;
            border-left: 2px solid #000000;
            width: 70%;
            height: 430px;
        }

        .left {
            margin-right: 73%;
            height: 480px;
        }

        table, th, td {
            border-collapse: collapse;
            border: 2px solid #000000;
            text-align: left;
        }

        table th {
            font-size: large;
            color: #ffffff;
            background-color: #a7c942;
        }

        table tr.alt td {
            background-color: #eaf2d3;
        }
    </style>
    <!-- 如果要使用Bootstrap的js插件，必须先调入jQuery -->
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
                        <div class="head">&lt;table&gt;标签属性介绍</div>
                        <div class="body">

                            <div class="right">
                                <table>
                                    <caption>&lt;table&gt;标签可选的属性</caption>
                                    <tr>
                                        <th>属性</th>
                                        <th>值</th>
                                        <th>描述</th>
                                    </tr>
                                    <tr>
                                        <td>border</td>
                                        <td class="italic">pixels</td>
                                        <td>规定表格边框的宽度。</td>
                                    </tr>
                                    <tr class="alt">
                                        <td>cellpadding</td>
                                        <td class="italic">
                                            <ul>
                                                <li>pixels</li>
                                                <li>%</li>
                                            </ul>
                                        </td>
                                        <td>规定单元边沿与其内容之间的空白</td>
                                    </tr>
                                    <tr>
                                        <td>cellspacing</td>
                                        <td class="italic">
                                            <ul>
                                                <li>pixels</li>
                                                <li>%</li>
                                            </ul>
                                        </td>
                                        <td>规定单元格之间的空白</td>
                                    </tr>
                                    <tr class="alt">
                                        <td>width</td>
                                        <td>
                                            <ul class="italic">
                                                <li>%</li>
                                                <li>pixels</li>
                                            </ul>
                                        </td>
                                        <td>规定表格的宽度</td>
                                    </tr>
                                </table>
                            </div>

                            <div class="left">
                                <ul>
                                    <li>导航1
                                        <ul>
                                            <li>导航1.1</li>
                                            <li>导航1.2</li>
                                            <li>导航1.3</li>
                                        </ul>
                                    </li>
                                    <li>导航2
                                        <ul>
                                            <li>导航2.1</li>
                                            <li>导航2.2</li>
                                            <li>导航2.3</li>
                                        </ul>
                                    </li>
                                    <li>导航3</li>
                                </ul>
                            </div>

                        </div>
                        <div class="foot">
                            底部
                        </div>
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