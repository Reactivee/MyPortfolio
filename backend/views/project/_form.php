<?php

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

    <?= $form->field($model, 'helpImage')
        ->widget(\kartik\file\FileInput::class, [
            'options' => [
                'accept' => 'image/*'
            ],
            'pluginOptions' => [
                'showRemove' => true,
                'showUpload' => false
            ]
        ])
    ?>

    <?//= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'date')
        ->widget(DatePicker::class, [
            'type' => DatePicker::TYPE_COMPONENT_APPEND,
            'pluginOptions' => [
                'format' => 'yyyy-mm-dd',
                'todayHighlight' => true,
                'autoclose'=>true
            ]
        ])
    ?>

    <?//= $form->field($model, 'user_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
