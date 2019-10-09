<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:108:"C:\Users\Administrator\Desktop\phpEnv5.6.0-Green\www\duowan\public/../application/admin\view\auth\login.html";i:1569465869;}*/ ?>
<!---->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>登录 | 后台管理</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="/static/admin/css/app.min.css">
    <script src="/static/admin/plugins/geetest/gt.js"></script>
    <script src="/static/admin/js/app.min.js"></script>
    <script src="/static/admin/plugins/layer/layer.js"></script>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        #embed-captcha {
            width: 300px;
            margin: 0 auto;
        }
        .show {
            display: block;
        }
        .hide {
            display: none;
        }
    </style>
</head>
<body class="hold-transition login-page" style="background-image: url('/static/admin/images/background/<?php echo $bg_num; ?>.jpg');">
<div class="login-box">
    <div class="login-logo">
        <a style="color: white;font-family: 'Microsoft Yahei'">后台登录</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body" style="border-radius: 10px;">
        <p class="login-box-msg">欢迎来到后台管理系统</p>
        <form action="" method="post" class="dataForm">
            <div class="row">
                <div class="col-xs-12">
                    <div class="form-group has-feedback">
                        <input id="name" maxlength="30" name="name" class="form-control" placeholder="帐号">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="form-group has-feedback">
                        <input name="password" type="password" class="form-control" placeholder="密码">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                </div>
            </div>
            <!--
            <div id="wait" class="alert alert-warning alert-dismissible show" style="padding: 8px;margin-bottom: 10px;">
                正在加载验证码...
            </div>
            -->
            <div class="row">
                <div class="col-xs-12">
                    <div class="form-group">
                        <div id="embed-captcha"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox">
                        <label>
                            <input id="remember" name="remember" value="1" type="checkbox"> 记住我
                        </label>
                    </div>
                </div>
                <div class="col-xs-4">
                    <?php echo token(); ?>
                    <button type="submit" class="btn btn-primary btn-block btn-flat" id="login_button" >登录</button>
                </div>
            </div>
        </form>

    </div>
</div>
<script>
    /*
    $(function () {
        $("#user_name").focus();
    });

    var handlerEmbed = function (captchaObj) {

        $("#login_button").click(function (e) {
            var validate = captchaObj.getValidate();
            if (!validate) {
                layer.msg('请先完成验证',{
                    icon:2
                });
                e.preventDefault();
            }
        });

        captchaObj.appendTo("#embed-captcha");
        captchaObj.onReady(function () {
            $("#login_button").attr("disabled",false);
            $("#wait")[0].className = "hide";
        });
        // 更多接口参考：http://www.geetest.com/install/sections/idx-client-sdk.html
    };
    $.ajax({
        url: "get_geetest_status.html",
        type: "post",
        dataType: "json",
        success: function (data) {
            console.log(data);
            initGeetest({
                gt: data.gt,
                challenge: data.challenge,
                new_captcha: data.new_captcha,
                product: "embed",
                offline: !data.success
            }, handlerEmbed);
        }
    });

     */
</script>
</body>
</html>

