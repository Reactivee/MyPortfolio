<?php

/* @var $this yii\web\View */

/**
 * @var $projects
 * @var $allCategories
 * @var $model \common\models\Feedback
 *
 */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about mt-5 pt-5">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>This is the About page. You may modify the following file to customize its content:</p>

    <!--    <code>--><? //= __FILE__ ?><!--</code>-->

    <?

    $form = \yii\widgets\ActiveForm::begin([
        'id' => 'login-form2',
        'action' => '/api/about',
        'method' => 'GET',
        'options' => ['class' => 'form-horizontal'],
    ]) ?>
    <?= $form->field($model, 'first_name',)->textInput(['maxlength' => 255, 'class' => 'w-50'])->label("First name") ?>
    <!--    --><? //= $form->field($model, 'password')->passwordInput() ?>
    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('Вход', ['class' => 'btn btn-primary']) ?>
        </div>
    </div>
    <p class="mb-5 one" id="one" ></p>
    <?php \yii\widgets\ActiveForm::end() ?>



</div>
