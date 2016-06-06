<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Content */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => '内容管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('编辑', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '你确定要删除该篇文章吗?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <table id="w0" class="table table-striped table-bordered detail-view"><tbody><tr><th>ID</th><td>1</td></tr>
        <tr><th>标题</th><td><?= $model->title; ?></td></tr>
        <tr><th>文章摘要</th><td><?= $model->introtext; ?></td></tr>
        <tr><th>全文内容</th><td><?= $model->fulltext; ?></td></tr>
        <tr><th>作者</th><td><span class="not-set">(not set)</span></td></tr>
        <tr><th>排序</th><td>0</td></tr>
        <tr><th>创建时间</th><td><?= $model->create_time; ?></td></tr>
        <tr><th>更新时间</th><td><?= $model->update_time; ?></td></tr></tbody></table>

</div>
