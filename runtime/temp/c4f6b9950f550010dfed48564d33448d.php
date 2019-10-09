<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:109:"C:\Users\Administrator\Desktop\phpEnv5.6.0-Green\www\duowan\public/../application/index\view\login\login.html";i:1570517835;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>多搏世界</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="/static/index/css/bootstrap.min.css">
</head>
<!--<link rel="stylesheet/less" type="text/css" href="/static/index/css/styles.less">-->
</head>
</head>
<body style="background-color: #333;">
<nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="/">多搏世界</a>
    <span style="color:#fff;font-size: 1.25rem;"></span>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo url('index/index'); ?>">首頁</a>
            </li>
        </ul>
    </div>
</nav><div class="container">
    <img src="https://db-668.net/html/images/3.jpg" class="img-fluid rounded mx-auto d-block" style="margin-top: 20px;">
    <div class="input-group mb-3" style="margin-top: 20px;">
        <div class="input-group-prepend">
            <span class="input-group-text" id="InputLoginCode">@</span>
        </div>
        <input type="text" class="form-control" id="LoginCode" data-url="<?php echo url('login/login'); ?>" placeholder="帳戶號碼" aria-label="帳戶號碼" aria-describedby="InputLoginCode">
    </div>
    <div class="input-group">
        <button id="LoginButton" type="button" class="btn btn-primary btn-lg btn-block">登入</button>
    </div>
</div>
<script src="/static/index/js/jquery-3.3.1.min.js"></script>
<script src="/static/index/js/bootstrap.min.js"></script>
<script src="/static/index/js/less.min.js"></script>
<script src="/static/admin/plugins/layer/layer.js"></script>


<script>
    $('#LoginButton').click(function(){
         var url  = $(this).attr('data-url');

         var name = $("#LoginCode").val();

         if(name == '' || name== undefined){
             layer.msg('登錄名不能為空！');
             return ;
         }

         $.post(url,{'name':name},function(ret){
               if(ret.code == 200){
                   window.location.href="<?php echo url('index/index'); ?>";
               }

               if(ret.code == 401) {
                   layer.msg(ret.msg, function () {
                       parent.location.reload();
                   })
               }

              if(ret.code == 403){
                       layer.msg(ret.msg,function(){
                           parent.location.reload();
                       })
               }

         },'json')
    })

</script>

</body>
</html>