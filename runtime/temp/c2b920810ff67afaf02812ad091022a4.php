<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:116:"C:\Users\Administrator\Desktop\phpEnv5.6.0-Green\www\duowan\public/../application/admin\view\admin_group\access.html";i:1526456506;s:103:"C:\Users\Administrator\Desktop\phpEnv5.6.0-Green\www\duowan\application\admin\view\template\layout.html";i:1570774066;s:108:"C:\Users\Administrator\Desktop\phpEnv5.6.0-Green\www\duowan\application\admin\view\template\form_header.html";i:1526891835;s:108:"C:\Users\Administrator\Desktop\phpEnv5.6.0-Green\www\duowan\application\admin\view\template\form_footer.html";i:1526891822;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <title><?php echo (isset($webData['title']) && ($webData['title'] !== '')?$webData['title']:"后台管理"); ?></title>
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
            <span class="logo-lg"><b><?php echo (isset($webData['backend_name']) && ($webData['backend_name'] !== '')?$webData['backend_name']:''); ?></b></span>
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
    <style scoped>
        .checkbox{
            cursor: pointer;
        }
        .checkmod {
            margin-bottom: 20px;
            border: 1px solid #ebebeb;
            padding-bottom: 5px;
        }
        .checkmod dt {
            padding-left: 10px;
            height: 30px;
            line-height: 30px;
            font-weight: bold;
            border-bottom: 1px solid #ebebeb;
            background-color: #ECECEC;
        }
        .checkmod dt {
            margin-bottom: 5px;
            border-bottom-color: #ebebeb;
            background-color: #ECECEC;
        }
        .checkbox, .radio {
            display: inline-block;
            height: 20px;
            line-height: 20px;
            margin-left: 20px;
        }
        .checkmod dd {
            padding-left: 30px;
            line-height: 30px;
        }
        .checkmod dd .checkbox {
            margin: 0 30px 0 0;
        }
        .checkmod dd .divsion {
            margin-right: 20px;
        }
        .checkmod dt {
            line-height: 30px;
            font-weight: bold;

        }
        .rule_check {
            border: 1px solid #ebebeb;
            margin: auto;
            padding: 5px 15px;
        }
        .menu_parent {
            margin-bottom: 5px;
        }
    </style>

    <div class="col-md-12">
        <div class="box box-primary">
            <?php if($showFormHeader): ?>
<div class="box-header with-border">
    <?php if($showFormHeaderBackButton): ?>
    <div class="btn-group">
        <a class="btn flat btn-sm btn-default form-history-back">
            <i class="fa fa-arrow-left"></i>
            返回
        </a>
    </div>
    <?php endif; ?>
</div>
<?php endif; ?>
            <div class="box-header with-border">
                <h3 class="box-title">【<?php echo $role_name; ?>】授权</h3>
                <label class="checkbox" for="check_all">
                    <input class="checkbox-inline" type="checkbox" name="check_all" id="check_all">全选
                </label>
            </div>
            <div class="box-body" id="all_check">
                <form id="dataForm" class="form-horizontal dataForm" action="" method="post" enctype="multipart/form-data">
                    <div class="box-body">
                        <div class="table_full">
                            <table width="100%" cellspacing="0">
                                <tbody>
                                <?php echo $html['html']; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <?php if($showFormFooter): ?>
<div class="box-footer">
    <?php echo token(); ?>
    <div class="col-sm-2">
    </div>
    <div class="col-sm-10 col-md-4">
        <?php if($showFormFooterSubmitButton): ?>
        <div class="btn-group">
            <button type="submit" class="btn flat btn-info dataform-submit">
                <?php echo (isset($sub_title) && ($sub_title !== '')?$sub_title:'保存'); ?>
            </button>
        </div>
        <?php endif; if($showFormFooterResetButton): ?>
        <div class="btn-group">
            <button type="reset" class="btn flat btn-default dataform-reset">
                重置
            </button>
        </div>
        <?php endif; ?>
    </div>
</div>
<?php endif; ?>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $("#check_all").click(function(){
            if(this.checked){
                $("#all_check").find(":checkbox").prop("checked", true);
            }else{
                $("#all_check").find(":checkbox").prop("checked", false);
            }
        });

        function checknode(obj) {
            var level_bottom;
            var chk = $("input[type='checkbox']");
            var count = chk.length;
            var num = chk.index(obj);
            var level_top = level_bottom = chk.eq(num).attr('level');

            for (var i = num; i >= 0; i--) {
                var le = chk.eq(i).attr('level');
                if (eval(le) < eval(level_top)) {
                    chk.eq(i).prop("checked", true);
                    level_top = level_top - 1;
                }
            }

            for (var j = num + 1; j < count; j++) {
                le = chk.eq(j).attr('level');
                if (chk.eq(num).prop("checked")) {
                    if (eval(le) > eval(level_bottom)) {

                        chk.eq(j).prop("checked", true);
                    }
                    else if (eval(le) == eval(level_bottom)) {
                        break;
                    }
                } else {
                    if (eval(le) > eval(level_bottom)) {
                        chk.eq(j).prop("checked", false);
                    } else if (eval(le) == eval(level_bottom)) {
                        break;
                    }
                }
            }

            var all_length = $("input[name='menu_id[]']").length;
            var checked_length = $("input[name='menu_id[]']:checked").length;
            console.log(all_length);
            console.log(checked_length);
            if(all_length==checked_length){
                $("#check_all").prop("checked",true);
            }else{
                $("#check_all").prop("checked",false);
            }

        }
    </script>
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
