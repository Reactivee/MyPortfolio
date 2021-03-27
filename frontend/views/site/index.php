<?php

use yii\bootstrap\Html;
use yii\widgets\ActiveForm;

/**
 * @var $projects
 * @var $allCategories
 * @var $feedback \common\models\Feedback
 */
?>

<section id="references">
    <div class="container">
        <div class="col-sm-12">

            <div class="mb-5 text-center">
                <h2 data-animate="fadeInUp" class="title">My work</h2>
                <p data-animate="fadeInUp" class="lead">
                    I have worked on dozens of projects so I have picked only the
                    latest for you.
                </p>
            </div>
            <br>
            <div class="mb-5 text-center">
                <form action="<?= \yii\helpers\Url::to(['site/search']) ?>">

                    <? echo \kartik\typeahead\Typeahead::widget([
                        'name' => 'search_title',
                        'options' => ['placeholder' => 'Qidiruv ...'],
                        'pluginOptions' => ['highlight' => true],
                        'dataset' => [
                            [
                                'datumTokenizer' => "Bloodhound.tokenizers.obj.whitespace('value')",
                                'display' => 'value',
                                //'prefetch' => $baseUrl . '/samples/countries.json',
                                'remote' => [
                                    'url' => \yii\helpers\Url::to(['api/project-list']) . '?text=%QUERY',
                                    'wildcard' => '%QUERY'
                                ]
                            ]
                        ]
                    ]); ?>

                    <?= Html::submitButton('Search', ['class' => 'btn btn-success']) ?>
                </form>
            </div>
            <br>
            <ul id="filter" data-animate="fadeInUp">
                <li class="active"><a href="#" data-filter="all">All</a></li>
                <? foreach ($allCategories as $category) { ?>
                    <li><a href="#" data-filter="<?= $category ?>"><?= $category ?></a></li>
                <? } ?>
            </ul>
            <div id="detail">
                <div class="row">
                    <div class="col-lg-10 mx-auto"><span class="close">×</span>
                        <div id="detail-slider" class="owl-carousel owl-theme"></div>
                        <div class="text-center">
                            <h1 id="detail-title" class="title"></h1>
                        </div>
                        <div id="detail-content"></div>
                    </div>
                </div>
            </div>
            <div id="references-masonry" data-animate="fadeInUp">
                <div class="row">
                    <? foreach ($projects as $project) { ?>
                        <div data-category="<?= $allCategories[$project['category_id']] ?>"
                             class="reference-item col-lg-3 col-md-6">
                            <div class="reference">
                                <a href="#">
                                    <img src="\uploads\<?= $project['image'] ?>" alt="" class="img-fluid">
                                    <div class="overlay">
                                        <div class="inner">
                                            <h3 class="h4 reference-title"><?= $project['title'] ?></h3>
                                            <p><?= $project['description'] ?></p>
                                        </div>
                                    </div>
                                </a>
                                <div data-images="\uploads\<?= $project['image'] ?>" class="sr-only reference-description">
                                    <p><?= $project['description'] ?></p>
                                    <p class="buttons text-center">
                                        <a href="javascript:void(0);" class="btn btn-outline-primary">
                                            <i class="fa fa-globe"></i>
                                            Visit website
                                        </a>
                                        <a href="javascript:void(0);" class="btn btn-outline-primary">
                                            <i class="fa fa-download"></i>
                                            Download case study
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <? } ?>
                </div>
            </div>
        </div>
    </div>


</section>
<!-- Customers-->
<!--<section id="customers" class="customers-section bg-gray">
    <div class="container">
        <div class="col-md-12">
            <div class="row align-items-center">
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="customer">
                        <img src="/img/customers/logo-1.svg" title="brand logo" data-placement="bottom"
                             data-toggle="tooltip" alt="" class="img-fluid d-block mx-auto">
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="customer">
                        <img src="/img/customers/logo-2.svg" title="brand logo" data-placement="bottom"
                             data-toggle="tooltip" alt="" class="img-fluid d-block mx-auto">
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="customer">
                        <img src="/img/customers/logo-3.svg" title="brand logo" data-placement="bottom"
                             data-toggle="tooltip" alt="" class="img-fluid d-block mx-auto">
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="customer">
                        <img src="/img/customers/logo-4.svg" title="brand logo" data-placement="bottom"
                             data-toggle="tooltip" alt="" class="img-fluid d-block mx-auto">
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="customer">
                        <img src="/img/customers/logo-5.svg" title="brand logo" data-placement="bottom"
                             data-toggle="tooltip" alt="" class="img-fluid d-block mx-auto">
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="customer">
                        <img src="/img/customers/logo-6.svg" title="brand logo" data-placement="bottom"
                             data-toggle="tooltip" alt="" class="img-fluid d-block mx-auto">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>-
Contact-->
<section id="contact" data-animate="bounceIn" class="contact-section contact">
    <div class="container">
        <header class="text-center">
            <h2 class="title">Contact me</h2>
        </header>
        <div class="row">
            <div class="col-lg-8 mx-auto">

                <?
                $form = ActiveForm::begin([
                    'id' => 'contact-form',
//                    'action' => ['site/feedback'],
                    'options' => ['enctype' => 'multipart/form-data']
                ]); ?>
                <div class="messages"></div>
                <div class="controls">
                    <div class="row">

                        <div class="col-md-6">
                            <?= $form->field($feedback, 'first_name')
                                ->textInput(['placeholder' => $feedback->getAttributeLabel('first_name') . ' *'])
                                ->label(false);
                            ?>
                        </div>
                        <div class="col-md-6">
                            <?= $form->field($feedback, 'last_name')
                                ->textInput(['placeholder' => $feedback->getAttributeLabel('last_name') . ' *'])
                                ->label(false);
                            ?>
                        </div>
                        <div class="col-md-6">
                            <?= $form->field($feedback, 'email')
                                ->textInput(['placeholder' => $feedback->getAttributeLabel('email') . ' *'])
                                ->label(false);
                            ?>
                        </div>
                        <div class="col-md-6">
                            <?= $form->field($feedback, 'phone')
                                ->textInput(['placeholder' => $feedback->getAttributeLabel('phone')])
                                ->label(false);
                            ?>
                        </div>
                        <div class="col-md-12">
                            <?= $form->field($feedback, 'message')
                                ->textarea(['placeholder' => $feedback->getAttributeLabel('message') . ' *', 'rows' => 4])
                                ->label(false);
                            ?>
                        </div>
                        <div class="col-md-12">
                            <?= $form->field($feedback, 'captcha')
                                ->widget(\yii\captcha\Captcha::class) ?>
                        </div>
                        <div class="col-md-12">
                            <?= $form->field($feedback, 'fileHelper')->fileInput()
                            ?>
                        </div>

                        <div class="col-md-12 text-center">
                            <?= Html::submitButton('Send message', ['class' => 'btn btn-outline-primary']) ?>
                        </div>
                    </div>
                </div>

                <? ActiveForm::end() ?>

            </div>
        </div>
    </div>
</section>