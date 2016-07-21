<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Content */

$this->title = 'Update Content: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => '内容管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = '编辑';
?>
<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.all.min.js"> </script>
<!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
<!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
<script type="text/javascript" charset="utf-8" src="/ueditor/lang/zh-cn/zh-cn.js"></script>

<div class="content-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="content-form">

        <form id="w0" action="/index.php?r=content%2Fupdate&id=<?= $model->id ?>" method="post">
            <input type="hidden" name="_csrf" value="bzNMSzlzQVModyUMDBQ0Iy0EBgJIRwAjIwIVCBQEECBZRh07DTVyFQ==">
            <div class="form-group field-content-title required has-error">
                <label class="control-label" for="content-title">标题</label>
                <input type="text" id="content-title" class="form-control" name="Content[title]" maxlength="255" placeholder="255个字之内"
                    value="<?= $model->title ?>">

<!--                <div class="help-block">标题不可为空</div>-->
            </div>
            <div class="form-group field-content-introtext">
                <label class="control-label" for="content-introtext">摘要</label>
                <textarea id="content-introtext" class="form-control" name="Content[introtext]" rows="2"><?= $model->introtext ?></textarea>

                <div class="help-block"></div>
            </div>
            <div class="form-group field-content-fulltext required">
                <label class="control-label" for="content-fulltext">内容</label>
                <script id="editor" type="text/plain" name="Content[fulltext]" style="height:500px;"><?= $model->fulltext ?></script>
                <div class="help-block"></div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">提交</button>
            </div>

        </form>
    </div>

</div>

<script type="text/javascript">

    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    var ue = UE.getEditor('editor');
</script>