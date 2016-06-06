<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Content */

$this->title = '添加内容';
$this->params['breadcrumbs'][] = ['label' => '内容管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="content-form">

        <form id="w0" action="/index.php?r=content%2Fcreate" method="post">
            <input type="hidden" name="_csrf" value="bzNMSzlzQVModyUMDBQ0Iy0EBgJIRwAjIwIVCBQEECBZRh07DTVyFQ==">
            <div class="form-group field-content-title required has-error">
                <label class="control-label" for="content-title">标题</label>
                <input type="text" id="content-title" class="form-control" name="Content[title]" maxlength="255" placeholder="255个字之内">

                <div class="help-block">标题不可为空</div>
            </div>
            <div class="form-group field-content-introtext">
                <label class="control-label" for="content-introtext">摘要</label>
                <textarea id="content-introtext" class="form-control" name="Content[introtext]" rows="2"></textarea>

                <div class="help-block"></div>
            </div>
            <div class="form-group field-content-fulltext required">
                <label class="control-label" for="content-fulltext">内容</label>
                <textarea id="content-fulltext" class="form-control" name="Content[fulltext]" rows="6"></textarea>

                <div class="help-block"></div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">提交</button>
            </div>

        </form>
    </div>
</div>
