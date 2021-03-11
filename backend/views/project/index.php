<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\Project;

/**
 * @var $this yii\web\View
 * @var $searchModel common\models\ProjectSearch
 * @var $dataProvider yii\data\ActiveDataProvider
 */

$this->title = 'Projects';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="project-index">


    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Project', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'id',
            'title',
            [
                'attribute' => 'category_id',
                'value' => 'category',
                'filter' => $searchModel::getCategories()
            ],
            [
                'attribute' => 'description',
                'value' => function ($model) {
                    return \common\helpers\DebugHelper::cutString($model->description, 100);
                }
            ],
            'link:url',
            [
                'attribute' => 'image',
                'filter' => false,
                'value' => function (Project $model) {
                    return Html::img(Yii::$app->params['frontend_domain'] . '/uploads/' . $model->image, ['class' => 'img img-responsive']);
                },
                'format' => 'raw'
            ],
            'date',
            [
                'attribute' => 'user_name',
                'value' => function (Project $model) {
                    return $model->user->username;
                }
            ],
            ['class' => 'yii\grid\ActionColumn']
        ]
    ]);
        //\common\helpers\DebugHelper::printSingleObject($dataProvider->getModels());
    ?>

</div>
