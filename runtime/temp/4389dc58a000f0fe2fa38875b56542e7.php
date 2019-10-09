<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:106:"C:\Users\Administrator\Desktop\phpEnv5.6.0-Green\www\duowan\public/../application/admin\view\user\add.html";i:1570523285;}*/ ?>

<link rel="stylesheet" href="/static/admin/css/app.min.css">
<script src="/static/admin/js/app.min.js"></script>
<script src="/static/admin/plugins/layer/layer.js"></script>



<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">

            <form id="dataForm" class="form-horizontal dataForm" action="" method="post" enctype="multipart/form-data">
                <div class="box-body">
                    <div class="fields-group">
                        <?php if(isset($info)): ?>
                        <input id="id" name="id" value="<?php echo $info['id']; ?>" hidden placeholder="请勿修改">
                        <?php endif; ?>


                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">帐号</label>
                            <div class="col-sm-10 col-md-4">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input  id="name" name="name" value="<?php echo (isset($info['name']) && ($info['name'] !== '')?$info['name']:''); ?>"
                                           class="form-control" placeholder="请输入用户帐号">
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="status" class="col-sm-2 control-label">启用</label>
                            <div class="col-sm-10 col-md-4">
                                <div class="input-group iconpicker-container">
                                    <input <?php if((isset($info) && $info['status']==1) || !isset($info)): ?>checked<?php endif; ?>
                                    value="<?php echo (isset($info['status']) && ($info['status'] !== '')?$info['status']:'1'); ?>"
                                    class="form-input-switch" type="checkbox" placeholder="status-switch"
                                    data-input="status">
                                    <input id="status" name="status" value="<?php echo (isset($info['status']) && ($info['status'] !== '')?$info['status']:'1'); ?>" type="hidden"/>
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
         var url = "<?php echo url('user/add'); ?>";

         var url1 = "<?php echo url('user/edit'); ?>";

         var item  = {};

         item.name    = $('#name').val();
         item.status  = $('#status').val();
         item.id      = $('#id').val();

         if(item.name == '' || item.name== undefined){
             layer.msg('帳號不能為空!');
             return ;
         }
         console.log(item);

         if(item.id == '' || item.id == undefined){
             $.post(url,item,function(ret){
                 if(ret.code == 200){
                     layer.msg(ret.msg,function(){
                         parent.location.href = "<?php echo url('user/index'); ?>";
                     })
                 }

                 if(ret.code == 400){
                     layer.msg(ret.msg,function(){
                         parent.location.reload();
                     })
                 }
             },'json')
         }else{
             $.post(url1,item,function(ret){
                 if(ret.code == 200){
                     layer.msg(ret.msg,function(){
                         parent.location.href = "<?php echo url('user/index'); ?>";
                     })
                 }

                 if(ret.code == 400){
                     layer.msg(ret.msg,function(){
                         parent.location.reload();
                     })
                 }
             },'json')
         }


    })
</script>
