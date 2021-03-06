<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="_token" content="{{ csrf_token() }}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
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
                        <a class="navbar-brand" href="javascript:">
                            <img src="https://magicbox.bk.tencent.com/static_api/v3/bk/images/logo.png" class="logo"> </a>
                    </div>
                    <ul class="nav navbar-nav pull-left m0">
                        <li class="active"><a href="javascript:void(0);">首页</a></li>
                        <li><a href="javascript:void(1);">滑坡提取工具</a></li>
                    </ul>
                    <div class="navbar-header pull-right">
                        <ul class="nav">
                            <li class="user-info">
                                <a href="javascript:">
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
                <li class="active"><a href="/firstStep">云检测</a></li>
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
                <h3 class="king-block-title">第一步 云检测</h3>
            </div>
            <div class="king-block-content">
                <form class="form-horizontal" method="POST" style="padding-left: 14%;padding-right: 14%">
                    <div class="form-group">
                        <label for="inputImg" class="col-sm-3 control-label">输入影像：</label>
                        <div class="col-sm-7">
                            <input type="file" class="form-control" id="inputImg" placeholder="选择影像的路径" name="img">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputIndex" class="col-sm-3 control-label">蓝波段序号：</label>
                        <div class="col-sm-7">
                            <input type="number" value="1" min="1" max="10" class="form-control" id="inputBand" style="width: 100%">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputThreshold" class="col-sm-3 control-label">阈值：</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="inputThreshold" placeholder="" name="threshold">
                        </div>
                    </div>
                    <div class="buttons" style="float: right">
                        {{--<a class="king-btn-demo king-btn king-round king-default king-disabled" title="预览" id="button_preview">预览</a>--}}
                        <a class="king-btn-demo king-btn king-round king-default king-disabled" title="下载" id="button_download">下载</a>
                        <a type="submit" class="king-btn-demo king-btn king-round king-default king-disabled" title="下一步" id="button_next">下一步</a>
                        <a class="king-btn-demo king-btn king-round king-danger" title="取消" id="button_cancel">取消</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    //判断是否可以点击下一步
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
    //根据表单内容是否填满来改变按钮的颜色
    //通过添加和移除class来改变按钮颜色
    function next() {
        var img = $("#inputImg").val();
        var threshold = $("#inputThreshold").val();
        if (img != "" && threshold != ""){
            document.getElementById("button_next").classList.remove("king-disabled");
            document.getElementById("button_download").classList.remove("king-disabled");
//            document.getElementById("button_preview").classList.remove("king-disabled");
        }
        else{
            bool = isReady();
            if (bool){
                document.getElementById("button_next").classList.add("king-disabled");
                document.getElementById("button_download").classList.add("king-disabled");
//                document.getElementById("button_preview").classList.add("king-disabled");
            }
        }
    }


    function my_post() {
        var url = "http://47.100.193.191:8080/api/cloudController/";
        var files = $("#inputImg").prop('files');
        var data = new FormData();
        var response = JSON.stringify({'code':201});
        data.append('img', files[0]);
        var threshold = $("#inputThreshold").val();
        data.append('threshold', threshold);
        data.append('band', $("#inputBand").val());
        $.ajax({
            url: url,
            type: 'POST',
            cache: false,
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

    function setCookie(c_name,value)
    {
        document.cookie=c_name+ "=" +escape(value);
    }

    $(function(){
        next();
        $("#inputBand").kendoNumericTextBox({
            format:""
        });
        $("#inputImg,#inputThreshold").bind('input propertychange', function () {
            next();
        });
        $("#button_next").click(function () {
            if (isReady()){
                var res = my_post();
                if (JSON.parse(res)['code'] ==200){
                    setCookie('fname', $("#inputImg").prop('files')[0].name);
                    window.location.href = 'secondStep';
                }
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
                    var files = $("#inputImg").prop('files');
                    var fname = (files[0].name.split('.')).join("_cloud.");
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
//        $("#button_preview").click(function () {
//            if (isReady()){
//                var res = my_post();
//                console.log(res);
//                if (JSON.parse(res)['code'] !=200){
//                    alert('请求失败');
//                }
//                else {
//                    var files = $("#inputImg").prop('files');
//                    var fname = (files[0].name.split('.')).join("_cloud.");
//                    var link = document.createElement('a');
////                    link.setAttribute("download",fname);
//                    link.href = "http://127.0.0.1:8080/Main/images/" + fname;
//                    link.target = "view_window";
//                    link.click();
//                }
//            }
//        })
    })
</script>

</body>

</html>