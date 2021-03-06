<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Project */

$this->title = $model->{'title_' . Yii::$app->language};
$this->params['breadcrumbs'][] = ['label' => 'Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="project-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title_uz',
            'title_ru',
            'description_uz:raw',
            'description_ru:raw',

            'link',
            [
                'attribute' => 'image',
                'value' => Html::img(Yii::$app->params['frontend_domain'] . '/uploads/' . $model->image, [
                    'class' => 'img-responsive'
                ]),
                'format' => 'raw',
            ],
            'created_at',
            'date',
            [
                'attribute' => 'user_name',
                'value' => $model->user->username,
            ],
            'update_at',
            [
                'attribute' => 'category_id',
                'value' => function ($model) {
                    return $model->category->category;
                }
            ],
        ],
    ]);

    ?>

</div>
