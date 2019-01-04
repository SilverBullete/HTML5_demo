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
                        <h1>用户注册</h1>
                        <form action="" name="login" method="get">
                            <div class="name">
                                <span>名称：</span></br>
                                <input type="text" name="name" onblur="checkName()">
                                <p class="info" id="name">必填，长度为5～15个字符，首字符必须为字母</p>
                            </div>
                            <div class="pass">
                                <span>密码：</span></br>
                                <input type="text" name="pass" onblur="checkPass()">
                                <p class="info" id="pass">请输入密码，需至少包含数字和字母两种类型</p>
                            </div>
                            <div class="checkpass">
                                <span>密码确认：</span></br>
                                <input type="text" name="checkpass" onblur="checkPassAgain()">
                                <p class="info" id="checkpass">再次输入相同的密码</p>
                            </div>
                            <div class="email">
                                <span>邮箱：</span></br>
                                <input type="text" name="email" onblur="checkEmail()">
                                <p class="info" id="email">输入您的邮箱</p>
                            </div>
                            <div class="phone">
                                <span>手机：</span></br>
                                <input type="text" name="phone" onblur="checkPhone()">
                                <p class="info" id="phone">输入您的手机号码</p>
                            </div>
                            <div class="num">
                                <input type="text" name="num" value="请输入验证码" style="color: #858585" onclick="clickNum()">
                                <a onclick="showImage()"><image id="num"></image></a>
                            </div>
                            <input type="submit" class="button" value="提交" onclick="check()">
                        </form>
                        <script>
                            var firstClick = true;
                            var index = Math.floor(Math.random()*8+1);
                            function showImage() {
                                index = Math.floor(Math.random()*8+1);
                                var image = document.getElementById('num').src="./vcode/0"+index+".PNG"
                            }
                            function checkName() {
                                var name = login.name.value;
                                var p = document.getElementById('name');
                                var a = /^[A-z]/;
                                if (!a.test(name)){
                                    p.innerHTML="首字符必须为字母";
                                    p.style.color='red';
                                }
                                else if(name.length < 5 || name.length > 15){
                                    p.innerHTML="名称长度必须为5～15个字符";
                                    p.style.color='red';
                                }
                                else {
                                    p.innerHTML="必填，长度为5～15个字符，首字符必须为字母";
                                    p.style.color='grey';
                                }
                            }
                            function checkPass() {
                                var pass = login.pass.value;
                                var p = document.getElementById('pass');
                                var a = /[A-z|[0-9]/;
                                if (!a.test(pass)){
                                    p.innerHTML="密码至少包含数字和字母两种类型";
                                    p.style.color='red';
                                }
                                else {
                                    p.innerHTML="请输入密码，需至少包含数字和字母两种类型";
                                    p.style.color='grey';
                                }
                            }
                            function checkPassAgain() {
                                var pass = login.pass.value;
                                var checkpass = login.checkpass.value;
                                var p = document.getElementById('checkpass');
                                if (pass!=checkpass){
                                    p.innerHTML="密码输入不一致";
                                    p.style.color='red';
                                }
                                else {
                                    p.innerHTML="再次输入相同的密码";
                                    p.style.color='grey';
                                }
                            }
                            function checkEmail() {
                                var email = login.email.value;
                                var p = document.getElementById('email');
                                var a = /@/;
                                if (!a.test(email)){
                                    p.innerHTML="邮箱格式错误";
                                    p.style.color='red';
                                }
                                else {
                                    p.innerHTML="输入您的邮箱";
                                    p.style.color='grey';
                                }
                            }
                            function checkPhone() {
                                var phone = login.phone.value;
                                var p = document.getElementById('phone');
                                var a = /^[1][3,4,5,7,8][0-9]{9}$/;
                                if (!a.test(phone)){
                                    p.innerHTML="手机格式错误";
                                    p.style.color='red';
                                }
                                else {
                                    p.innerHTML="输入您的手机号码";
                                    p.style.color="grey";
                                }
                            }
                            function clickNum() {
                                if (firstClick){
                                    login.num.value="";
                                    document.getElementById('num').style.color='balck';
                                }
                                firstClick = false;
                            }
                            function checknum() {
                                var num = login.num.value;
                                var myArray = new Array(/2A2X/i,/2A5R/i,/2A5Z/i,/2A9N/i,/2A98/i,/2AEF/i,/2APC/i,/2AQ7/i,/2BN9/i);
                                if (!myArray[index].test(num)){
                                    return false;
                                }
                                return true;
                            }
                            function check() {
                                var bool = true;
                                var list = document.getElementsByClassName('info');
                                for (var i = 0;i<list.length;i++){
                                    if (list[i].style.color!='grey'){
                                        bool = false;
                                    }
                                }
                                bool = bool&&checknum();
                                if (!bool){
                                    alert('error')
                                }
                            }
                            showImage();
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