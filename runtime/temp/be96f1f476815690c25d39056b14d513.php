<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:106:"C:\Users\Administrator\Desktop\phpEnv5.6.0-Green\www\duowan\public/../application/admin\view\play\add.html";i:1570522335;}*/ ?>

<link rel="stylesheet" href="/static/admin/css/app.min.css">
<script src="/static/admin/js/app.min.js"></script>
<script src="/static/admin/plugins/layer/layer.js"></script>

<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">



            <form id="dataForm" class="form-horizontal dataForm" action="" method="post" enctype="multipart/form-data">
                <div class="box-body">
                    <div class="fields-group">

                        <div class="form-group">
                            <label for="title" class="col-sm-2 control-label">游戏类型名称</label>
                            <div class="col-sm-10 col-md-4">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input  id="title" name="title" value="<?php echo (isset($info['title']) && ($info['title'] !== '')?$info['title']:''); ?>"
                                            class="form-control" placeholder="请输入游戏类型名称">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="box-footer">
                    <div class="col-sm-2">
                    </div>
                    <div class="col-sm-10 col-md-4">
                        <div class="btn-group">
                            <button type="button" class="btn flat btn-info dataform-submit data-add">
                                保存
                            </button>
                        </div>

                        <div class="btn-group">
                            <button type="reset" class="btn flat btn-default dataform-reset">
                                重置
                            </button>
                        </div>

                    </div>
                </div>


            </form>
        </div>
    </div>
</div>

<script>
    $('.data-add').click(function(){
        var url = "<?php echo url('play/add'); ?>";

        var title = $('#title').val();

        if(title == '' || title== undefined){
            layer.msg('遊戲類型不能為空');
            return;
        }

        $.post(url,{'title':title},function(ret){
              if(ret.code == 200){
                  layer.msg(ret.msg,function(){
                      parent.location.href="<?php echo url('play/index'); ?>";
                  })
              }

            if(ret.code == 400){
                layer.msg(ret.msg,function(){
                    parent.location.href="<?php echo url('play/index'); ?>";
                })
            }
        },'json')

    })
</script>