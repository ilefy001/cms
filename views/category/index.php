<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '栏目管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

    <h1>栏目管理</h1>

    <p>
        <a class="btn btn-success" href="/index.php?r=category/create">添加栏目</a>
    </p>
    <div id="w0" class="grid-view"><div class="summary">Showing <b>1-1</b> of <b>1</b> item.</div>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>名称</th>
                    <th>排序</th>
                    <th>创建时间</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody id="data_list"></tbody>
            <script type="text/my-template" id="data_tpl">
                <tr data-key="1">
                    <td>%id</td>
                    <td>%name</td>
                    <td>%sort</td>
                    <td>%create_time</td>
                    <td><a href="/index.php?r=category/view&id=%id" title="View" aria-label="View" data-pjax="0">
                        <span class="glyphicon glyphicon-eye-open"></span></a>
                        <a href="/index.php?r=category/update&id=%id" title="Update" aria-label="Update" data-pjax="0">
                            <span class="glyphicon glyphicon-pencil"></span></a>
                        <a href="/index.php?r=category/delete&id=%id" title="Delete" aria-label="Delete"
                           data-confirm="您确定要删除该栏目吗?" data-method="post" data-pjax="0">
                            <span class="glyphicon glyphicon-trash"></span></a>
                    </td>
                </tr>
            </script>
        </table>
    </div>
</div>

<script type="text/javascript" src="/js/category.js"></script>
<script type="text/javascript">
    $(function(){
        getTopCategory();
    });
</script>
