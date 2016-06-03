<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Category */

$this->params['breadcrumbs'][] = ['label' => '栏目管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="category-update">
    <h1>编辑栏目</h1>
    <div class="category-form">
        <form id="w0" action="/index.php?r=category/update&id=<?php echo $model->id;?>" method="post">
            <input type="hidden" name="_csrf" value="d1k5RGt4TW81CGk.AhALHh0Ae3xcDzk3JCpzcxwUADw.OF4BMhoAIA==">
            <div class="form-group field-category-name required">
                <label class="control-label" for="category-name">名称</label>
                <input type="text" id="category-name" class="form-control" name="Category[name]" maxlength="255" value="<?php echo $model->name;?>">
                <div class="help-block"></div>
            </div>
            <div class="form-group field-category-parent_id">
                <label class="control-label" for="category-parent_id">父栏目</label>
                <select class="form-control" id="parent_category" name="Category[parent_id]"></select>

                <div class="help-block"></div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">提交</button>
            </div>
        </form>
        <input type="hidden" id="cur_cat_parent_id" value="<?php echo $model->parent_id;?>">
    </div>

</div>

<script type="text/javascript">
    $(function(){
        getProductParentCategory();
    });

    //获取产品父类别
    function getProductParentCategory(){
        var cur_cat_parent_id = $('#cur_cat_parent_id').val();
        $.ajax({
            url: 'index.php?r=category/get-category-list',
            type: 'POST',
            data: '',
            dataType: 'json',
            success: function(response) {
                var list = response.param.list;
                var category = '<option value="0">无</option>';
                $.each(list, function(index,item){
                    category += '<option value="'+item.id+'">'+item.name+'</option>';
                });
                $('#parent_category').html(category);
                $('#parent_category').val(cur_cat_parent_id);
            }
        });
    }
</script>