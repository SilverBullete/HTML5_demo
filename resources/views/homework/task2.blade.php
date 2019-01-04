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
        h1{
            text-align: center;
        }
        ol{
            margin-left: 50px;
        }
        li{
            padding-top: 10px;
        }
        #advice{

        }
        select{
            color: purple;
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
                        <h1>问卷调查</h1>
                        <form method="get" onsubmit="">
                            <ol>
                                <li>姓名：
                                    <input type="text" name="name" id="name">
                                </li>
                                <li>性别：
                                    <input type="radio" name="sex" value="male" checked="checked">男
                                    <input type="radio" name="sex" value="female">女
                                </li>
                                <li>生源地：
                                    <select name="province" onchange="select()">
                                        <option value="北京">北京</option>
                                        <option value="上海">上海</option>
                                        <option value="天津">天津</option>
                                        <option value="重庆">重庆</option>
                                        <option value="河北">河北</option>
                                        <option value="山西">山西</option>
                                        <option value="内蒙古">内蒙古</option>
                                        <option value="辽宁">辽宁</option>
                                        <option value="吉林">吉林</option>
                                        <option value="黑龙江">黑龙江</option>
                                        <option value="江苏">江苏</option>
                                        <option value="浙江" selected="selected">浙江</option>
                                        <option value="安徽">安徽</option>
                                        <option value="福建">福建</option>
                                        <option value="江西">江西</option>
                                        <option value="山东">山东</option>
                                        <option value="河南">河南</option>
                                        <option value="湖北">湖北</option>
                                        <option value="湖南">湖南</option>
                                        <option value="广东">广东</option>
                                        <option value="广西">广西</option>
                                        <option value="海南">海南</option>
                                        <option value="四川">四川</option>
                                        <option value="贵州">贵州</option>
                                        <option value="云南">云南</option>
                                        <option value="西藏">西藏</option>
                                        <option value="陕西">陕西</option>
                                        <option value="甘肃">甘肃</option>
                                        <option value="宁夏">宁夏</option>
                                        <option value="青海">青海</option>
                                        <option value="新疆">新疆</option>
                                        <option value="香港">香港</option>
                                        <option value="澳门">澳门</option>
                                        <option value="台湾">台湾</option>
                                    </select>
                                </li>
                                <li>已选课程：
                                    <input type="checkbox" name="course" value="离散数学">离散数学
                                    <input type="checkbox" name="course" value="数据结构">数据结构
                                    <input type="checkbox" name="course" value="高等数学">高等数学
                                    <input type="checkbox" name="course" value="线性代数">线性代数
                                    <input type="checkbox" name="course" value="编译原理">编译原理
                                    <input type="checkbox" name="course" value="操作系统">操作系统
                                </li>
                                <li>每周课外花费学习本课程的时间：
                                    <input type="text" name="hours" id="hours">小时
                                </li>
                                <li>你觉得老师的案例有没有借鉴价值：<br/>
                                    <input type="radio" name="value" value="具有借鉴价值">具有借鉴价值<br/>
                                    <input type="radio" name="value" value="具有一定借鉴价值">具有一定借鉴价值<br/>
                                    <input type="radio" name="value" value="借鉴价值不大">借鉴价值不大<br/>
                                    <input type="radio" name="value" value="完全没有借鉴价值">完全没有借鉴价值<br/>
                                </li>
                                <li>对本课程的意见或建议：
                                    <br/>
                                    <textarea name="advice" id="advice" cols="100" rows="10"></textarea>
                                    <br/>
                                    或上传文件：
                                    <input type="file">
                                </li>
                                <input type="submit">
                                <input type="reset">
                            </ol>
                        </form>
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