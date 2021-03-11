<?php

/**
 * @var $projects
 * @var $allCategories
 * @var $userHost
 * @var  $userIp
 * @var $session
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
            <!-- Reference detail-->
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
<section id="customers" class="customers-section bg-gray">
    <div class="container">
        <div class="col-md-12">
            <div class="row align-items-center">
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="customer">
                        <img src="img/customers/logo-1.svg" title="brand logo" data-placement="bottom"
                             data-toggle="tooltip" alt="" class="img-fluid d-block mx-auto">
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="customer">
                        <img src="img/customers/logo-2.svg" title="brand logo" data-placement="bottom"
                             data-toggle="tooltip" alt="" class="img-fluid d-block mx-auto">
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="customer">
                        <img src="img/customers/logo-3.svg" title="brand logo" data-placement="bottom"
                             data-toggle="tooltip" alt="" class="img-fluid d-block mx-auto">
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="customer">
                        <img src="img/customers/logo-4.svg" title="brand logo" data-placement="bottom"
                             data-toggle="tooltip" alt="" class="img-fluid d-block mx-auto">
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="customer">
                        <img src="img/customers/logo-5.svg" title="brand logo" data-placement="bottom"
                             data-toggle="tooltip" alt="" class="img-fluid d-block mx-auto">
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="customer">
                        <img src="img/customers/logo-6.svg" title="brand logo" data-placement="bottom"
                             data-toggle="tooltip" alt="" class="img-fluid d-block mx-auto">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact-->
<section id="contact" data-animate="bounceIn" class="contact-section contact">
    <div class="container">
        <header class="text-center">
            <h2 class="title">Contact me</h2>
        </header>
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <form id="contact-form" method="post" action="">
                    <div class="messages"></div>
                    <div class="controls">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="name" placeholder="Your firstname *" required="required"
                                       class="form-control">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="surname" placeholder="Your lastname *" required="required"
                                       class="form-control">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="email" placeholder="Your email *" required="required"
                                       class="form-control">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="phone" placeholder="Your phone" class="form-control">
                            </div>
                            <div class="col-md-12">
                                <textarea name="message" placeholder="Message for me *" rows="4" required="required"
                                          class="form-control"></textarea>
                            </div>
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-outline-primary">Send message</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>