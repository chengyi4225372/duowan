<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:109:"C:\Users\Administrator\Desktop\phpEnv5.6.0-Green\www\duowan\public/../application/index\view\index\index.html";i:1570602978;s:99:"C:\Users\Administrator\Desktop\phpEnv5.6.0-Green\www\duowan\application\index\view\public\menu.html";i:1570600453;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>增值 - 多搏世界</title>
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


<div class="container" id="Invoice" >
    <img src="<?php echo $type_img['imgs']; ?>" class="img-fluid rounded mx-auto d-block" style="margin-top: 20px;">
    <div class="input-group" style="margin-top: 20px;">
        <select class="form-control" id="InvoiceGame">
            <option value="">請選擇遊戲</option>
            <?php if(is_array($cates) || $cates instanceof \think\Collection || $cates instanceof \think\Paginator): $i = 0; $__LIST__ = $cates;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <option value="<?php echo $vo['id']; ?>"><?php echo $vo['title']; ?></option>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </select>
    </div>
    <input type="hidden" name="member" id="member" value="<?php echo \think\Session::get('member.id'); ?>">
    <div class="input-group" style="margin-top: 20px;">
        <button id="InvoiceButton" type="button" class="btn btn-primary btn-lg btn-block">開設帳單</button>
    </div>
</div>

<script src="/static/index/js/jquery-3.3.1.min.js"></script>
<script src="/static/index/js/bootstrap.min.js"></script>
<script src="/static/index/js/less.min.js"></script>
<script src="/static/admin/plugins/layer/layer.js"></script>

<script>
    $('#InvoiceButton').click(function(){
        var cid = $('#InvoiceGame option:selected').val();

        var mid = $('#member').val();

        if(cid == '' || cid == undefined){
            layer.msg('請選擇遊戲類型');
            return false;
        }

        var url = "<?php echo url('index/index'); ?>";

        $.post(url,{'cid':cid,'mid':mid},function(ret){
                  if(ret.code == 200){
                      window.location.href="<?php echo url('index/types'); ?>?order="+ret.order;
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