<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:109:"C:\Users\Administrator\Desktop\phpEnv5.6.0-Green\www\duowan\public/../application/index\view\index\zhuan.html";i:1570583309;s:99:"C:\Users\Administrator\Desktop\phpEnv5.6.0-Green\www\duowan\application\index\view\public\menu.html";i:1570600453;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>多搏世界</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="/static/index/css/bootstrap.min.css"></head>
<!--<link rel="stylesheet/less" type="text/css" href="https://db-668.net/html/styles.less?v=d41d8cd98f00b204e9800998ecf8427e"></head>-->
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
                <a class="nav-link" href="<?php echo url('index/history'); ?>">帳單記錄</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo url('index/index'); ?>">開始遊戲</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo url('news/index'); ?>">最新消息</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" target="_blank" href="<?php echo (isset($common['furl']) && ($common['furl'] !== '')?$common['furl']:''); ?>">WhatsApp 查詢</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" target="_blank" href="<?php echo (isset($common['iurl']) && ($common['iurl'] !== '')?$common['iurl']:''); ?>">下載多搏世界(IOS)</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" target="_blank" href="<?php echo (isset($common['aurl']) && ($common['aurl'] !== '')?$common['aurl']:''); ?>">下載多搏世界(安卓)</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" target="_blank" href="<?php echo (isset($common['furl']) && ($common['furl'] !== '')?$common['furl']:''); ?>">FB粉絲專頁</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo url('login/logout'); ?>">登出</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container" style="margin-bottom: 20px;">

    <h3 class="text-center" style="margin-top: 20px; color: #FFF;">轉數快:55738941</h3>
    <h6 class="text-center" style="margin-top: 20px; color: #FFF;">**請務必核實需要的充值帳號,一經充值成功無法退回!</h6>
    <h2 class="text-center" style="margin-top: 20px; color: #FFF;">

        <div class="input-group" style="margin-top: 20px;">
                <input type="file" accept="image/*" name="Capture" id="Capture" capture="camera" accept=".jpg" style="display: none;">
                <input type="hidden" name="imgs" value="">
        </div>

        <img onclick="$('#Capture').click();" src="/static/index/images/images.png" class="img-fluid rounded mx-auto d-block" style="margin-top: 20px; width: 60%; max-width: 120px;">

        <h5 class="text-center" style="margin-top: 20px; color: #FFF;">请先点击圖片上传凭证，在提交</h5>
   <br>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
        <div class="input-group" style="margin-top: 20px;">

                <input type="text" class="form-control" name="Transaction" id="Transaction" placeholder="請輸入你的轉帳名字">
                <input type="hidden" name="orderid" value="<?php echo \think\Request::instance()->get('order'); ?>">
                <div class="input-group" style="margin-top: 20px;">
                    <button id="UpdateButton"  type="button" class="btn btn-primary btn-lg btn-block">上傳收據</button>
                </div>

        </div>
        <h5 class="text-center" style="margin-top: 20px; color: #FFF;">如不懂如何充值可留意下圖示例</h5>
        <img src="https://db-668.net/html/images/123.jpg" class="img-fluid rounded mx-auto d-block" style="margin-top: 20px;">
    </div>
    <script src="/static/index/js/jquery-3.3.1.min.js"></script>
    <script src="/static/index/js/bootstrap.min.js"></script>
    <script src="/static/index/js/less.min.js"></script>
    <script src="/static/admin/plugins/layer/layer.js"></script>
    <script>


     $('#UpdateButton').click(function(){

     })
    </script>

</body>
</html>