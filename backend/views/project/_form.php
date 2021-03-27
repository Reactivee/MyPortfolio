<?php

use kartik\select2\Select2;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model common\models\Project */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="project-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 10]) ?>

    <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>

    <? if ($model->image) {
        echo $form->field($model, 'helpImage')
            ->widget(\kartik\file\FileInput::class, [
                'options' => [
                    'accept' => 'image/*',
                    'initialPreview' => Html::img('http://front.port/uploads/' . $model->image, [
                        'class' => 'img-responsive'
                    ]),
                ],
                'pluginOptions' => [
                    'initialPreview' => [
                        'http://front.port/uploads/' . $model->image,
                    ],
                    'initialPreviewAsData' => true,
                    'initialCaption' => $model->image,

                    'overwriteInitial' => true,
                ]
            ]);

    }
    else{

       echo $form->field($model, 'helpImage')
            ->widget(\kartik\file\FileInput::class, [
                'options' => [
                    'accept' => 'image/*',

                ],
                'pluginOptions' => [
//                    'showPreview' => false,
                    'showCaption' => true,
                    'showRemove' => true,
                    'showUpload' => false
                ]
            ]);
    }
    ?>


    <!--    --><? //= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'date')
        ->widget(DatePicker::class, [
            'type' => DatePicker::TYPE_COMPONENT_APPEND,
            'pluginOptions' => [
                'format' => 'yyyy-mm-dd',
                'todayHighlight' => true,
                'autoclose' => true
            ]
        ])
    ?>
       <? $data=\yii\helpers\ArrayHelper::map($category,'id','category')?>
    <?//= $form->field($model, 'user_id')->textInput() ?>
    <?= $form->field($model, 'category_id')->widget(Select2::className(),[
        'data' => $data,
        'language' => 'ru',
        'options' => ['placeholder' => 'Select a state ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ])
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
