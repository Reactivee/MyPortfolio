<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\Project;

/**
 * @var $this yii\web\View
 * @var $searchModel common\models\ProjectSearch
 * @var $dataProvider yii\data\ActiveDataProvider
 * @var $data backend\controllers\ProjectController
 */

$this->title = 'Projects';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="project-index">


    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Project', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

<!--   --><?// \common\helpers\DebugHelper::printSingleObject($data);?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'id',
            'title',
            [
                'attribute' => 'category_id',
                'format'=>'raw',
                'value' => function($model){
                    return $model->category->category;
                },
                'filter' =>$data
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
//                        \common\helpers\DebugHelper::printSingleObject(Yii::$app->params);
                    return Html::img(Yii::$app->params['frontend_domain'] . '/uploads/' . $model->image, ['class' => 'img img-responsive']);
                },
                'format' => 'raw'
            ],
            'date',
            [
                'attribute' => 'user_name',
                'value' => function (Project $model) {
//                \common\helpers\DebugHelper::printSingleObject($model);
                    return $model->user->username;
                }
            ],
            ['class' => 'yii\grid\ActionColumn']
        ]
    ]);

        //\common\helpers\DebugHelper::printSingleObject($dataProvider->getModels());
    ?>

</div>
