<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

    <h1>栏目管理</h1>

    <p>
        <a class="btn btn-success" href="/index.php?r=category/create">添加栏目</a>
    </p>
    <div id="w0" class="grid-view"><div class="summary">Showing <b>1-1</b> of <b>1</b> item.</div>
        <table class="table table-striped table-bordered"><thead>
            <tr><th><a href="/index.php?r=category%2Findex&amp;sort=id" data-sort="id">ID</a></th>
                <th><a href="/index.php?r=category%2Findex&amp;sort=name" data-sort="name">名称</a></th>
                <th><a href="/index.php?r=category%2Findex&amp;sort=parent_id" data-sort="parent_id">父栏目</a></th>
                <th><a href="/index.php?r=category%2Findex&amp;sort=sort" data-sort="sort">排序</a></th>
                <th><a href="/index.php?r=category%2Findex&amp;sort=create_time" data-sort="create_time">创建时间</a></th>
                <th class="action-column">&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            <tr data-key="1"><td>1</td><td>news</td><td>0</td><td>0</td><td>2016-06-03 11:31:51</td><td><a href="/index.php?r=category%2Fview&amp;id=1" title="View" aria-label="View" data-pjax="0"><span class="glyphicon glyphicon-eye-open"></span></a> <a href="/index.php?r=category%2Fupdate&amp;id=1" title="Update" aria-label="Update" data-pjax="0"><span class="glyphicon glyphicon-pencil"></span></a> <a href="/index.php?r=category%2Fdelete&amp;id=1" title="Delete" aria-label="Delete" data-confirm="Are you sure you want to delete this item?" data-method="post" data-pjax="0"><span class="glyphicon glyphicon-trash"></span></a></td></tr>
            </tbody></table>
    </div>
</div>
