<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:109:"C:\Users\Administrator\Desktop\phpEnv5.6.0-Green\www\duowan\public/../application/index\view\index\types.html";i:1570583009;s:99:"C:\Users\Administrator\Desktop\phpEnv5.6.0-Green\www\duowan\application\index\view\public\menu.html";i:1570526199;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> 增值方式- 多搏世界</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="/static/index/css/bootstrap.min.css">
</head>

</head>
</head>
<body style="background-color: #333;">

<nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="https://db-668.net/">多搏世界</a>
    <span style="color:#fff;font-size: 1.25rem;"><?php echo \think\Session::get('member.name'); ?></span>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo url('index/index'); ?>">增值</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://db-668.net/invoice/history">帳單記錄</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://db-668.net/start">開始遊戲</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://db-668.net/news">最新消息</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" target="_blank" href="https://api.whatsapp.com/send?phone=85256348549">WhatsApp 查詢</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" target="_blank" href="https://dl3.pushbulletusercontent.com/HYePdIQYFn1LeQsLUGMGXNxWzCWKcfVi/DB-World.mobileconfig">下載多搏世界(IOS)</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" target="_blank" href="https://db-668.net/Download/db-668.apk">下載多搏世界(安卓)</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" target="_blank" href="https://www.facebook.com/db668/">FB粉絲專頁</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo url('login/logout'); ?>">登出</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container" id="Invoice" data-url="https://db-668.net/invoice/submit" data-formurl="https://db-668.net/invoice/information">
    <img src="https://db-668.net/html/images/3.jpg" class="img-fluid rounded mx-auto d-block" style="margin-top: 20px;">
    <div class="input-group" style="margin-top: 20px;">
        <select class="form-control" id="pid">
            <option value="">請選擇充值類型</option>
            <option value="1">轉數塊</option>
            <option value="2">7-11充值</option>
            <option value="3">好友轉賬</option>
        </select>
    </div>
    <input type="hidden" name="orderid" id="orderid" value="<?php echo \think\Request::instance()->get('order'); ?>">
    <div class="input-group" style="margin-top: 20px;">
        <button id="InvoiceButton" type="button" class="btn btn-primary btn-lg btn-block">開設</button>
    </div>
</div>

<script src="/static/index/js/jquery-3.3.1.min.js"></script>
<script src="/static/index/js/bootstrap.min.js"></script>
<script src="/static/index/js/less.min.js"></script>
<script src="/static/admin/plugins/layer/layer.js"></script>

<script>
  $("#InvoiceButton").click(function(){
      var pid   = $('#pid option:selected').val();
      var order = $("#orderid").val();

      if(pid == '' || pid == undefined){
          layer.msg('請選擇充值類型');
          return false;
      }

      if(order == '' ||  order == undefined){
          layer.msg('資料丟失，提交不合法');
          return ;
      }

      var url = "<?php echo url('index/types'); ?>";

      $.post(url,{'pid':pid,'order':order},function(ret){
            if(ret.code == 200){
                if(ret.pid ==1){
                    window.location.href="<?php echo url('index/zhuan'); ?>?order="+order;
                }
                if(ret.pid == 2){
                    window.location.href="<?php echo url('index/chong'); ?>?order="+order;
                }

                if(ret.pid == 3){
                    window.location.href="<?php echo url('index/info'); ?>?order="+order;
                }
            }

            if(ret.code == 400){
                layer.msg(ret.msg,function(){
                    parent.location.reload();
                })
            }
      },'json')
  })



</script>

</body>
</html>