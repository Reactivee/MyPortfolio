<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Project */

$this->title = 'Update Project: ' . $model->{'title_' . Yii::$app->language};
$this->params['breadcrumbs'][] = ['label' => 'Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->{'title_' . Yii::$app->language}, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="project-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'category'=>$category
    ]) ?>

</div>
