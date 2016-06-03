<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Category */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => '栏目管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('编辑', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '您确定要删除该栏目吗?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <table id="w0" class="table table-striped table-bordered detail-view"><tbody>
        <tr><th>ID</th><td><?php echo $model->id; ?></td></tr>
        <tr><th>名称</th><td><?php echo $model->name; ?></td></tr>
        <tr><th>Parent ID</th><td><?php echo $model->parent_id; ?></td></tr>
        <tr><th>排序</th><td><?php echo $model->sort; ?></td></tr>
        <tr><th>创建时间</th><td><?php echo $model->create_time; ?></td></tr>
        <tr><th>更新时间</th><td><?php echo $model->update_time; ?></td></tr>
        </tbody>
    </table>

</div>
