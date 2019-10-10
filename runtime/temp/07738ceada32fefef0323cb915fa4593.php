<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:94:"C:\Users\Administrator\Desktop\duowan\public/../application/admin\view\admin_user\profile.html";i:1569679790;s:81:"C:\Users\Administrator\Desktop\duowan\application\admin\view\template\layout.html";i:1569679790;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <title>多玩后台管理</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="msapplication-tap-highlight" content="no">
    <meta itemprop="image" content="/static/admin/images/touch-icon-iphone-retina.png">

    <link rel="stylesheet" href="/static/admin/css/app.min.css">

    <script>
        var dataDelIds = [];
    </script>
    <script src="/static/admin/js/app.min.js"></script>
    <script src="/static/admin/plugins/layer/layer.js"></script>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php if(\think\Session::get('error_message')): ?>
    <script>
        layer.msg('<?php echo \think\Session::get('error_message'); ?>',{icon:2});
    </script>
    <?php endif; if(\think\Session::get('success_message')): ?>
    <script>
        layer.msg('<?php echo \think\Session::get('success_message'); ?>',{icon:1});
    </script>
    <?php endif; ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <header class="main-header">
        <a class="logo">
            <span class="logo-lg"><b>多玩后台管理</b></span>
        </a>
        <nav class="navbar navbar-static-top">
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">切换导航</span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="<?php echo $webData['user_info']['avatar']; ?>" class="user-image"
                                 alt="User Image">
                            <span class="hidden-xs"><?php echo $webData['user_info']['nickname']; ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="user-header">
                                <img src="<?php echo $webData['user_info']['avatar']; ?>" class="img-circle"
                                     alt="User Image">
                                <p>
                                    <?php echo $webData['user_info']['nickname']; ?>
                                    <small><?php echo $webData['user_info']['name']; ?></small>
                                </p>
                            </li>
                            <li class="user-body">
                                <div class="row">
                                    <div class="col-xs-4 text-center">
                                        <a href="#"></a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#"></a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#"></a>
                                    </div>
                                </div>
                            </li>
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="<?php echo url('admin_user/profile'); ?>" class="btn btn-default btn-flat">个人资料</a>
                                </div>
                                <div class="pull-right">
                                    <a href="<?php echo url('auth/logout'); ?>" class="btn btn-default btn-flat">退出</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a data-toggle="control-sidebar"><i class="fa fa-cog"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <aside class="main-sidebar">
        <section class="sidebar">
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="<?php echo $webData['user_info']['avatar']; ?>" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p><?php if(!empty($user_info['name'])): ?><?php echo $user_info['name']; endif; ?></p>
                    <a><i class="fa fa-circle text-success"></i> 正常</a>
                </div>
            </div>
            <form method="get" class="sidebar-form" id="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="搜索菜单" id="search-input">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
                </div>
            </form>
            <ul class="sidebar-menu">
                <?php echo $webData['left_menu']; ?>
            </ul>
        </section>
    </aside>
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                <?php echo $webData['title']; ?>
            </h1>
            <ol class="breadcrumb">
                <?php if(isset($webData['current_nav']) && !empty($webData['current_nav'])): ?>
                <li><a href="<?php echo url('admin/index/index'); ?>"><i class="fa fa-home"></i> 主页</a></li>
                <?php echo $webData['current_nav']; endif; ?>
            </ol>
        </section>
        <section class="content">
            <div class="row">
    <div class="col-md-3">
        <div class="box box-primary">
            <div class="box-body box-profile">
                <img class="profile-user-img img-responsive img-circle" src="<?php echo $user['avatar']; ?>" alt="头像">
                <h3 class="profile-username text-center"><?php echo $user['nickname']; ?></h3>
                <p class="text-muted text-center"><?php echo $user['name']; ?></p>
            </div>
        </div>
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">详情资料</h3>
            </div>
            <div class="box-body">
                <strong><i class="fa fa-envelope"></i> 手机</strong>
                <p class="text-muted"><?php echo $user->mobile; ?></p>
                <hr>
                <strong><i class="fa fa-envelope"></i> 邮箱</strong>
                <p class="text-muted"><?php echo $user->email; ?></p>
            </div>
        </div>
    </div>
    <div class="col-md-9">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#profile" data-toggle="tab" aria-expanded="true">个人信息</a></li>
                <li class=""><a href="#privacy" data-toggle="tab" aria-expanded="false">修改密码</a></li>
                <li class=""><a href="#avatars" data-toggle="tab" aria-expanded="false">修改头像</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="profile">
                    <form class="dataForm form-horizontal" action="" method="post">
                        <input type="hidden" value="profile" name="update_type" placeholder="请勿修改">

                        <div class="form-group">
                            <label for="nickname" class="col-sm-2 control-label">昵称</label>
                            <div class="col-sm-10 col-md-4">
                                <input class="form-control" value="<?php echo $user->nickname; ?>" name="nickname"
                                       id="nickname" maxlength="30"
                                       placeholder="昵称或姓名">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="mobile" class="col-sm-2 control-label">手机</label>
                            <div class="col-sm-10 col-md-4">
                                <input type="tel" maxlength="11" autocomplete='tel-national' class="form-control" value="<?php echo $user->mobile; ?>" name="mobile"
                                       id="mobile" placeholder="手机号">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">邮箱</label>
                            <div class="col-sm-10 col-md-4">
                                <input type="email" autocomplete='email' class="form-control" value="<?php echo $user->email; ?>" name="email"
                                       id="email" placeholder="邮箱">
                            </div>
                        </div>
                        <?php echo token(); ?>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-danger">保存</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="tab-pane" id="privacy">
                    <form class="dataForm form-horizontal" action="" method="post">
                        <input type="hidden" value="password" name="update_type" placeholder="请勿修改">
                        <div class="form-group">
                            <label for="password" class="col-sm-2 control-label">当前密码</label>
                            <div class="col-sm-10 col-md-4">
                                <input type="password" autocomplete='password' class="form-control" name="password" id="password"
                                       placeholder="请输入当前密码">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="newpassword" class="col-sm-2 control-label">新密码</label>
                            <div class="col-sm-10 col-md-4">
                                <input type="password" class="form-control" autocomplete='newpassword' name="newpassword" id="newpassword"
                                       placeholder="请输入新密码">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="newpassword_do" class="col-sm-2 control-label">确认新密码</label>
                            <div class="col-sm-10 col-md-4">
                                <input type="password" class="form-control" autocomplete='newpassword_do' name="newpassword_do" id="newpassword_do"
                                       placeholder="再次输入新密码">
                            </div>
                        </div>
                        <?php echo token(); ?>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-danger">保存</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane" id="avatars">
                    <form class="dataForm form-horizontal" action="" method="post" enctype="multipart/form-data">
                        <input type="hidden" value="avatar" name="update_type" placeholder="请勿淘气修改">
                        <div class="form-group">
                            <label for="avatar" class="col-sm-2 control-label">头像</label>
                            <div class="col-sm-10 col-md-4">
                                <input type="file" class="form-control" name="avatar" id="avatar"
                                       placeholder="头像可空">
                            </div>
                        </div>
                        <?php echo token(); ?>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-danger">保存</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
        </section>
    </div>

    <!--删除操作modal-->
    <div class="modal fade" id="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">提示</h4>
                </div>
                <div class="modal-body">
                    <p id="modal_message">您确认执行本次操作吗？</p>
                    <input name="modal_do_url" id="modal_do_url" value="" placeholder="modal_do_url" type="hidden">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">取消</button>
                    <button onclick="modal_do()" type="button" class="btn btn-primary">确认</button>
                </div>
            </div>
        </div>
    </div>
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>V</b> 1.0
        </div>
        <strong>Copyright &copy; 2018 <a></a>.</strong> All rights
        reserved.
    </footer>
    <aside class="control-sidebar control-sidebar-dark">
        <div class="tab-content">
            <div class="tab-pane" id="control-sidebar-home-tab">
            </div>
        </div>
    </aside>
    <div class="control-sidebar-bg"></div>
</div>
</body>
</html>
<script src="/static/admin/js/demo.js"></script>
<script>
    $(function () {
        $('#sidebar-form').on('submit', function (e) {
            e.preventDefault();
        });

        $('.sidebar-menu li.active').data('lte.pushmenu.active', true);

        $('#search-input').on('keyup', function () {
            var term = $('#search-input').val().trim();

            if (term.length === 0) {
                $('.sidebar-menu li').each(function () {
                    $(this).show(0);
                    $(this).removeClass('active');
                    if ($(this).data('lte.pushmenu.active')) {
                        $(this).addClass('active');
                    }
                });
                return;
            }

            $('.sidebar-menu li').each(function () {
                if ($(this).text().toLowerCase().indexOf(term.toLowerCase()) === -1) {
                    $(this).hide(0);
                    $(this).removeClass('pushmenu-search-found', false);

                    if ($(this).is('.treeview')) {
                        $(this).removeClass('active');
                    }
                } else {
                    $(this).show(0);
                    $(this).addClass('pushmenu-search-found');

                    if ($(this).is('.treeview')) {
                        $(this).addClass('active');
                    }

                    var parent = $(this).parents('li').first();
                    if (parent.is('.treeview')) {
                        parent.show(0);
                    }
                }

                if ($(this).is('.header')) {
                    $(this).show();
                }
            });

            $('.sidebar-menu li.pushmenu-search-found.treeview').each(function () {
                $(this).find('.pushmenu-search-found').show(0);
            });
        });
    });
</script>
