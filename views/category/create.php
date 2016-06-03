<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Category */

$this->title = 'Create Category';
$this->params['breadcrumbs'][] = ['label' => 'Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-create">
    <h1>添加栏目</h1>
    <div class="category-form">
        <form id="w0" action="/index.php?r=category/create" method="post">
            <input type="hidden" name="_csrf" value="d1k5RGt4TW81CGk.AhALHh0Ae3xcDzk3JCpzcxwUADw.OF4BMhoAIA==">
            <div class="form-group field-category-name required">
                <label class="control-label" for="category-name">名称</label>
                <input type="text" id="category-name" class="form-control" name="Category[name]" maxlength="255">
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
    </div>
</div>

<script type="text/javascript" src="/js/category.js"></script>