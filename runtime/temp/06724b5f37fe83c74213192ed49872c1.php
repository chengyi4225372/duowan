<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:86:"C:\Users\Administrator\Desktop\duowan\public/../application/admin\view\order\edit.html";i:1570720181;}*/ ?>

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
                        <input id="mid"  value="<?php echo $info['id']; ?>" hidden placeholder="请勿修改">
                        <input id="pid"  value="<?php echo $info['pid']; ?>" hidden placeholder="请勿修改">
                        <?php endif; ?>

                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">支付凭证图</label>
                            <div class="col-sm-10 col-md-4">
                                <div class="input-group">
                                    <a href="<?php echo (isset($info['imgs']) && ($info['imgs'] !== '')?$info['imgs']:''); ?>">
                                        <img src="<?php echo (isset($info['imgs']) && ($info['imgs'] !== '')?$info['imgs']:'/static/index/images/images.png'); ?>" alt="" style="max-width: 200px;max-height: 200px">
                                    </a>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">支付寶名称</label>
                            <div class="col-sm-10 col-md-4">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input  id="name" name="name" value="<?php echo (isset($info['names']) && ($info['names'] !== '')?$info['names']:''); ?>"
                                            class="form-control" placeholder="支付寶名称">
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">订单状态</label>
                            <select class="form-control" id="status">
                                <option value="0" <?php if($info['status'] == '0'): ?> selected=""<?php endif; ?>>未確認</option>
                                <option value="1" <?php if($info['status'] == '1'): ?> selected=""<?php endif; ?>>已確認 </option>
                                <option value="-1" <?php if($info['status'] == '-1'): ?> selected=""<?php endif; ?>>已取消</option>
                            </select>
                        </div>

                        {/if}




                    </div>
                </div>


                <div class="box-footer">
                    <div class="col-sm-2">
                    </div>
                    <div class="col-sm-10 col-md-4">
                        <div class="btn-group">
                            <button type="button" class="btn flat btn-info dataform-submit zhuan">

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

    $('.zhuan').click(function(){
        var url = "<?php echo url('order/check_zhuan'); ?>";

        var mid = $('#mid').val();
        var pid = $('#pid').val();
        var status = $('#status option:selected').val();

        if(mid == '' || pid == ''){
            return false;
        }

        $.post(url,{'pid':pid,'mid':mid,'status':status},function(ret){
            if(ret.code==200){
                layer.msg(ret.msg,function(){
                    parent.location.href="<?php echo url('order/wei'); ?>";
                })
            }

            if(ret.code==400){
                layer.msg(ret.msg,function(){
                    parent.location.href="<?php echo url('order/wei'); ?>"
                }
            }

        },'json')

    });


</script>

