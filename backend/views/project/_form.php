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

    <?= $form->field($model, 'title_uz')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'title_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description_uz')
    ->widget(\dosamigos\ckeditor\CKEditor::class, [
        'options' => [
            'id' => 'CK-desc_uz'
        ],
        'preset' => 'custom',
        'clientOptions' => [
            'height' => 400,
            'language' => 'en',
            'extraPlugins' => 'font,smiley,colorbutton,iframe,selectall,copyformatting,justify',
            'removeButtons' => 'About,Anchor,Styles,Font',
            "toolbarGroups" => [
                ['name' => 'document', 'groups' => ['mode']],
                ['name' => 'clipboard', 'groups' => ['undo', 'clipboard']],
                ['name' => 'editing', 'groups' => ['find', 'selection', 'editing']],
                ['name' => 'links', 'groups' => ['links']],
                ['name' => 'insert', 'groups' => ['insert']],
                ['name' => 'colors', 'groups' => ['colors']],
                '/',
                ['name' => 'basicstyles', 'groups' => ['basicstyles', 'cleanup']],
                ['name' => 'paragraph', 'groups' => ['list', 'indent', 'blocks', 'align', 'paragraph']],
                ['name' => 'styles', 'groups' => ['styles']]
            ],
            'toolbar' => [
                ['name' => 'document', 'items' => ['Source']],
                ['name' => 'clipboard', 'items' => ['Undo', 'Redo', '-', 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord']],
                ['name' => 'editing', 'items' => ['SelectAll']],
                ['name' => 'links', 'items' => ['Link', 'Unlink']],
                ['name' => 'insert', 'items' => ['Image', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar', 'Iframe']],
                ['name' => 'colors', 'items' => ['TextColor', 'BGColor']],
                ['name' => 'tools', 'items' => ['Maximize']],
                '/',
                ['name' => 'basicstyles', 'items' => ['Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'CopyFormatting', 'RemoveFormat']],
                ['name' => 'paragraph', 'items' => ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock']],
                ['name' => 'styles', 'items' => ['Format', 'FontSize']]
            ],
        ],
    ])?>
    <?= $form->field($model, 'description_ru')
        ->widget(\dosamigos\ckeditor\CKEditor::class, [
            'options' => [
                'id' => 'CK-desc_ru'
            ],
            'preset' => 'custom',
            'clientOptions' => [
                'height' => 400,
                'language' => 'en',
                'extraPlugins' => 'font,smiley,colorbutton,iframe,selectall,copyformatting,justify',
                'removeButtons' => 'About,Anchor,Styles,Font',
                "toolbarGroups" => [
                    ['name' => 'document', 'groups' => ['mode']],
                    ['name' => 'clipboard', 'groups' => ['undo', 'clipboard']],
                    ['name' => 'editing', 'groups' => ['find', 'selection', 'editing']],
                    ['name' => 'links', 'groups' => ['links']],
                    ['name' => 'insert', 'groups' => ['insert']],
                    ['name' => 'colors', 'groups' => ['colors']],
                    '/',
                    ['name' => 'basicstyles', 'groups' => ['basicstyles', 'cleanup']],
                    ['name' => 'paragraph', 'groups' => ['list', 'indent', 'blocks', 'align', 'paragraph']],
                    ['name' => 'styles', 'groups' => ['styles']]
                ],
                'toolbar' => [
                    ['name' => 'document', 'items' => ['Source']],
                    ['name' => 'clipboard', 'items' => ['Undo', 'Redo', '-', 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord']],
                    ['name' => 'editing', 'items' => ['SelectAll']],
                    ['name' => 'links', 'items' => ['Link', 'Unlink']],
                    ['name' => 'insert', 'items' => ['Image', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar', 'Iframe']],
                    ['name' => 'colors', 'items' => ['TextColor', 'BGColor']],
                    ['name' => 'tools', 'items' => ['Maximize']],
                    '/',
                    ['name' => 'basicstyles', 'items' => ['Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'CopyFormatting', 'RemoveFormat']],
                    ['name' => 'paragraph', 'items' => ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock']],
                    ['name' => 'styles', 'items' => ['Format', 'FontSize']]
                ],
            ],
        ])?>
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
