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
        th{
            background-color: #e9e9e9;
        }
        table{
            width: 100%;
            line-height: 32px;
        }
    </style>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.min.js"></script>
    <script src="http://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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
                        <h1>用户列表：</h1>
                        <table>
                            <tr>
                                <th style="width: 20%">用户名</th>
                                <th style="width: 40%">邮件</th>
                                <th style="width: 20%">密码</th>
                                <th style="width: 20%">操作</th>
                            </tr>
                            <tbody id="table_body">
                            <tr>
                                <td>张三</td>
                                <td>zhangs@163.com</td>
                                <td>zhangs888</td>
                                <td><button class='change ui-button'>编辑</button><button class='delete ui-button'>删除</button></td>
                            </tr>
                            <tr>
                                <td>李四</td>
                                <td>lis@gmail.com</td>
                                <td>lis666</td>
                                <td><button class='change ui-button'>编辑</button><button class='delete ui-button'>删除</button></td>
                            </tr>
                            </tbody>
                        </table>
                        <button class="ui-button" id="create">新建用户</button>
                        <div id="dialog" title="新建/编辑用户" style="display: none">
                            <div class="body">
                                用户名<br/>
                                <input type="text" id="name">
                                <span id="info_name" style="font-size: 16px; color: #ff0000"></span><br/>
                                邮件<br/>
                                <input type="text" id="email">
                                <span id="info_email" style="font-size: 16px; color: #ff0000"></span><br/>
                                密码<br/>
                                <input type="password" id="password">
                                <span id="info_password" style="font-size: 16px; color: #ff0000"></span><br/>
                            </div>
                            <br/>
                            <button class="ui-button" id="new">新建/编辑</button>
                            <button class="ui-button" id="cancel">取消</button>
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
    });
    var new_or_change = -1;//0 for new, 1 for change
    var tr; //记录要改变的行
    //清除对话框内的内容并初始化全集变量
    function clear(){
        var name = $("#name").val("");
        var email = $("#email").val("");
        var password = $("#password").val("");
        $("#info_name").text("");
        $("#info_email").text("");
        $("#info_password").text("");
        new_or_change = -1;
        tr = 0;
    };
    //修改数据
    function change() {
        $(".change").click(function () {
            tr = $(this).parents("tr");
            new_or_change = 1;
            $("#dialog").dialog("open");
            $("#name").val(tr.children("td").eq(0).html());
            $("#email").val(tr.children("td").eq(1).html());
            $("#password").val(tr.children("td").eq(2).html());
        });
    }
    //删除数据
    function del(){
        $(".delete").click(function () {
            $(this).parents("tr").remove();
        });
    }
    //对话框内判断
    $(function() {
        //打开对话框
        $("#create").click(function() {
            new_or_change = 0;
            $("#dialog").dialog("open");
        });
        //关闭对话框
        $("#dialog").dialog({
            autoOpen: false,
            close: function () {
                clear();
            }
        })
        //判断名字
        $("#name").blur(function () {
            var name = $("#name").val();
            if (name == ""){
                $("#info_name").text("用户名不能为空");
            }
            else {
                $("#info_name").text("");
            }
        });
        //判断邮箱
        $("#email").blur(function () {
            var email = $("#email").val();
            var reg = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/;
            if (email == ""){
                $("#info_email").text("邮箱不能为空");
            }
            else if (!reg.test(email)){
                $("#info_email").text("邮箱格式错误");
            }
            else {
                $("#info_email").text("");
            }
        });
        //判断密码
        $("#password").blur(function () {
            var password = $("#password").val();
            var a = /[0-9]/;
            var b = /[A-z]/;
            if (password == ""){
                $("#info_password").text("密码不能为空");
            }
            else if (!a.test(password)||!b.test(password)){
                $("#info_password").text("密码必须包含数字和字母");
            }
            else {
                $("#info_password").text("");
            }
        });
        //创建或修改数据
        $("#new").click(function () {
            var name = $("#name").val();
            var email = $("#email").val();
            var password = $("#password").val();
            var info_name = $("#info_name").text();
            var info_email = $("#info_email").text();
            var info_password = $("#info_password").text();
            //创建数据
            if (info_name==""&&info_email==""&&info_password==""&&new_or_change==0){
                var html = "<tr>"
                    + "<td>" + name + "</td>"
                    + "<td>" + email + "</td>"
                    + "<td>" + password + "</td>"
                    + "<td><button class='change ui-button'>编辑</button><button class='delete ui-button'>删除</button></td>"
                    + "</tr>";
                $("#table_body").append(html);
                //使按钮可用并清空对话框
                change();
                del();
                clear();
                $("#dialog").dialog("close");
            }
            //修改数据
            else if (info_name==""&&info_email==""&&info_password==""&&new_or_change==1){
                tr.html("<td>" + name + "</td>"
                    + "<td>" + email + "</td>"
                    + "<td>" + password + "</td>"
                    + "<td><button class='change ui-button'>编辑</button><button class='delete ui-button'>删除</button></td>");
                //使按钮可用并清空对话框
                change();
                del();
                clear();
                $("#dialog").dialog("close");
            }
        });
        //取消键
        $("#cancel").click(function () {
            clear();
            $("#dialog").dialog("close");
        });

    });
    change();
    del();
</script>
</body>

</html>