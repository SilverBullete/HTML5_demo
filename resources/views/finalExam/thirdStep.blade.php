<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>滑坡提取</title>
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
                        <li><a href="javascript:void(0);">首页</a></li>
                        <li class="active"><a href="javascript:void(1);">滑坡提取工具</a></li>
                    </ul>
                    <div class="navbar-header pull-right">
                        <ul class="nav">
                            <li class="user-info">
                                <a href="javascript:;">
                                    <img class="img-rounded" src="https://magicbox.bk.tencent.com/static_api/v3/components/horizontal_nav1/images/avatar.png">
                                    <span>张炜</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div class="king-layout2-main mt15" style="width:960px;">
    <!-- <div class="king-page-topbar pl20 pr20 "> -->
        <div class="king-page-topbar ">
            <h3 class="king-topbar-title mb0">
                <span>滑坡提取</span>
            </h3>
            <ul class="breadcrumb king-breadcrumb pl0 bg-transparent">
                <li><a href="/">首页</a></li>
                <li><a href="/firstStep">云检测</a></li>
                <li><a href="/secondStep">水体提取</a></li>
                <li class="active"><a href="/thirdStep">植被提取</a></li>
            </ul>
        </div>
        <!-- 面板 编辑 开始 -->
        <!-- 面板 编辑 结束 -->
        <div class="king-block king-block-bordered king-block-themed mb0">
            <div class="king-block-header king-gray-dark">
                <ul class="king-block-options">
                    <li>
                        <!-- <button type="button"><i class="fa fa-cog"></i></button> -->
                    </li>
                </ul>
                <h3 class="king-block-title">第三步 植被检测</h3>
            </div>
            <div class="king-block-content">
                <form class="form-horizontal" method="POST" style="padding-left: 14%;padding-right: 14%">
                    <div class="form-group">
                        <label for="inputBand" class="col-sm-3 control-label">红波段序号：</label>
                        <div class="col-sm-7">
                            <input type="number" value="1" min="1" max="10" class="form-control" id="inputBand" style="width: 100%">
                        </div>
                    </div>
                    <div class="buttons" style="float: right">
                        <a class="king-btn-demo king-btn king-round king-default" title="下载" id="button_download">下载</a>
                        <a class="king-btn-demo king-btn king-round king-default" title="下一步" id="button_next">下一步</a>
                        <a class="king-btn-demo king-btn king-round king-danger" title="取消" id="button_cancel">取消</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    function isReady() {
        var classList = document.getElementById("button_next").classList;
        var bool = true;
        for (var i = 0; i<classList.length;i++){
            if (classList[i]=="king-disabled"){
                bool = false;
            }
        }
        return bool;
    }
    function getCookie(cname)
    {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for(var i=0; i<ca.length; i++)
        {
            var c = ca[i].trim();
            if (c.indexOf(name)==0) return c.substring(name.length,c.length);
        }
        return "";
    }

    function my_post() {
        var url = "http://47.100.193.191:8080/api/treeController/";
        var data = new FormData();
        var response = JSON.stringify({'code':201});
        data.append('fname', getCookie('fname'));
        data.append('band_red', $("#inputBand").val());
        data.append('band_nir',getCookie('band_nir'));
        $.ajax({
            url: url,
            type: 'POST',
            cache: false,
            xhrFields: {
                withCredentials: true
            },
            data: data,
            async: false,
            contentType: false,
            processData: false,
            success:function (res) {
                response = res
            }
        });
        return response;
    }

    $(function(){
        $("#inputBand").kendoNumericTextBox({
            format:""
        });
        $("#button_next").click(function () {
            var res = my_post();
            if (JSON.parse(res)['code'] == 200){
                window.location.href = 'fourthStep';
            }
        });
        $("#button_download").click(function () {
            var csrf_token = "<?php echo csrf_token()?>";
            if (isReady()){
                var res = my_post();
                if (JSON.parse(res)['code'] !=200){
                    alert(JSON.parse(res)['info']);
                }
                else {
                    var files = getCookie('fname');
                    var fname = (files.split('.')).join("_tree.");
//                    $.post('api/download/',{'fname':fname,'_token':csrf_token});
                    var link = document.createElement('a');
                    link.setAttribute("download",fname);
                    link.href = "http://47.100.193.191:8080/Main/images/"+fname;
                    link.click();
                }
            }
        });
        $("#button_cancel").click(function () {
            window.location.href = '/';
        })
    })
</script>
</body>

</html>