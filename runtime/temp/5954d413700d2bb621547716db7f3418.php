<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:111:"C:\Users\Administrator\Desktop\phpEnv5.6.0-Green\www\duowan\public/../application/index\view\index\history.html";i:1570584682;s:99:"C:\Users\Administrator\Desktop\phpEnv5.6.0-Green\www\duowan\application\index\view\public\menu.html";i:1570600453;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>帳單記錄 - 多搏世界</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="/static/index/css/bootstrap.min.css">
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

<table class="table table-dark">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">最後更新</th>
        <th scope="col">進度</th>
    </tr>
    </thead>
    <tbody>
    <tr onclick="window.location.href='https://db-668.net/invoice/information/9633'">
        <th scope="row">9633</th>
        <td>2019-10-08 17:51:45</td>
        <td>未付款</td>
    </tr>
    <tr onclick="window.location.href='https://db-668.net/invoice/information/9617'">
        <th scope="row">9617</th>
        <td>2019-10-08 17:11:08</td>
        <td>已取消</td>
    </tr>
    <tr onclick="window.location.href='https://db-668.net/invoice/information/9601'">
        <th scope="row">9601</th>
        <td>2019-10-08 16:28:54</td>
        <td>未付款</td>
    </tr>
    <tr onclick="window.location.href='https://db-668.net/invoice/information/9011'">
        <th scope="row">9011</th>
        <td>2019-10-06 19:55:01</td>
        <td>未付款</td>
    </tr>
    <tr onclick="window.location.href='https://db-668.net/invoice/information/6993'">
        <th scope="row">6993</th>
        <td>2019-09-29 20:01:16</td>
        <td>未付款</td>
    </tr>
    <tr onclick="window.location.href='https://db-668.net/invoice/information/6957'">
        <th scope="row">6957</th>
        <td>2019-09-29 16:49:41</td>
        <td>未付款</td>
    </tr>
    <tr onclick="window.location.href='https://db-668.net/invoice/information/6955'">
        <th scope="row">6955</th>
        <td>2019-09-29 16:43:30</td>
        <td>未付款</td>
    </tr>
    <tr onclick="window.location.href='https://db-668.net/invoice/information/5954'">
        <th scope="row">5954</th>
        <td>2019-09-26 10:14:41</td>
        <td>未付款</td>
    </tr>
    <tr onclick="window.location.href='https://db-668.net/invoice/information/5334'">
        <th scope="row">5334</th>
        <td>2019-09-24 08:06:50</td>
        <td>未付款</td>
    </tr>
    <tr onclick="window.location.href='https://db-668.net/invoice/information/5144'">
        <th scope="row">5144</th>
        <td>2019-09-23 18:23:27</td>
        <td>未付款</td>
    </tr>
    </tbody>
</table>
<nav aria-label="Page navigation">
    <ul class="pagination justify-content-center">
        <li class="page-item disabled"><a class="page-link">1</a></li>
        <li class="page-item"><a class="page-link" href="https://db-668.net/invoice/history?page=2">2</a></li>
        <li class="page-item"><a class="page-link" href="https://db-668.net/invoice/history?page=3">3</a></li>
        <li class="page-item"><a class="page-link" href="https://db-668.net/invoice/history?page=4">4</a></li>
        <li class="page-item"><a class="page-link" href="https://db-668.net/invoice/history?page=25">&raquo;</a></li>
    </ul>
</nav>

<script src="/static/index/js/jquery-3.3.1.min.js"></script>
<script src="/static/index/js/js/bootstrap.min.js"></script>
<script src="/static/index/js/less.min.js"></script>
<script src="/static/plugins/layer/layer.js"></script>

<script>

</script>
</body>
</html>