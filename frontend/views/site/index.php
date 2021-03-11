<?php

use common\models\Project;
use http\Url;

/**
 * @var $projects
 * @var $allCategories
 * @var $userHost
 * @var  $userIp
 * @var $session
 */
?>


<!-- Intro Image-->
<!-- <section id="intro" style="background: url(img/home.jpg) center center no-repeat; background-size: cover;" class="intro-section pb-2">-->
<!--      <div class="container text-center">-->
<!--        <div data-animate="fadeInDown" class="logo"><img src="img/logo-big.png" alt="logo" width="130"></div>-->
<!--        <h1 data-animate="fadeInDown" class="text-shadow mb-5">Hello, hola, नमस्ते !</h1>-->
<!--        <p data-animate="slideInUp" class="h3 text-shadow text-400">I grind HTML and CSS and then weld them with PHP into beautiful and efficient websites.</p>-->
<!--      </div>-->
<!--    </section>-->
<!--    <!-- About-->-->
<!--    <section id="about" class="about-section">-->
<!--      <div class="container">-->
<!--        <header class="text-center">-->
<!--          <h2 data-animate="fadeInDown" class="title">About me</h2>-->
<!--        </header>-->
<!--        <div class="row">-->
<!--          <div data-animate="fadeInUp" class="col-lg-6">-->
<!--            <p>An sincerity so extremity he additions. Her yet <strong>there truth merit</strong>. Mrs all projecting favourable now unpleasing. Son law garden chatty temper. Oh children provided to mr elegance marriage strongly. Off can admiration prosperous now devonshire diminution law.</p>-->
<!--            <p>Received overcame oh sensible so at an. Formed do change merely to county it. <strong>Am separate contempt</strong> domestic to to oh. On relation my so addition branched. Put hearing cottage she norland letters equally prepare too. Replied exposed savings he no viewing as up. Soon body add him hill. No father living really people estate if. Mistake do produce beloved demesne if am pursuit.</p>-->
<!--            <p>An sincerity so extremity he additions. Her yet <strong>there truth merit</strong>. Mrs all projecting favourable now unpleasing. Son law garden chatty temper. Oh children provided to mr elegance marriage strongly. Off can admiration prosperous now devonshire diminution law.</p>-->
<!--          </div>-->
<!--          <div data-animate="fadeInUp" class="col-lg-6">-->
<!--            <div class="skill-item">-->
<!--              <div class="progress-title">PHP</div>-->
<!--              <div class="progress">-->
<!--                <div role="progressbar" style="width: 60%" aria-valuenow="0" aria-valuemin="60" aria-valuemax="100" class="progress-bar progress-bar-skill1"></div>-->
<!--              </div>-->
<!--            </div>-->
<!--            <div class="skill-item">-->
<!--              <div class="progress-title">Javascript</div>-->
<!--              <div class="progress">-->
<!--                <div role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="60" aria-valuemax="100" class="progress-bar progress-bar-skill2"></div>-->
<!--              </div>-->
<!--            </div>-->
<!--            <div class="skill-item">-->
<!--              <div class="progress-title">HTML coding</div>-->
<!--              <div class="progress">-->
<!--                <div role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-skill3"></div>-->
<!--              </div>-->
<!--            </div>-->
<!--            <div class="skill-item">-->
<!--              <div class="progress-title">SEO</div>-->
<!--              <div class="progress">-->
<!--                <div role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-skill4"></div>-->
<!--              </div>-->
<!--            </div>-->
<!--            <div class="skill-item">-->
<!--              <div class="progress-title">SEM</div>-->
<!--              <div class="progress">-->
<!--                <div role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-skill5"></div>-->
<!--              </div>-->
<!--            </div>-->
<!--          </div>-->
<!--          <div data-animate="fadeInUp" class="col-sm-6 mx-auto mt-5"><img src="img/about.jpg" alt="This is me - IT worker" class="image rounded-circle img-fluid"></div>-->
<!--        </div>-->
<!--      </div>-->
<!--    </section>-->
<!--    <!-- Service-->-->
<!--    <section id="services" class="bg-gradient services-section">-->
<!--      <div class="container">-->
<!--        <header class="text-center">-->
<!--          <h2 data-animate="fadeInDown" class="title">Services</h2>-->
<!--        </header>-->
<!--        <div class="row services text-center">-->
<!--          <div data-animate="fadeInUp" class="col-lg-4">-->
<!--            <div class="icon"><i class="fa fa-search"></i></div>-->
<!--            <h3 class="heading mb-3 text-400">Consulting</h3>-->
<!--            <p class="text-left description">On on produce colonel pointed. Just four sold need over how any. In to september suspicion determine he prevailed admitting. On adapted an as affixed limited on. Giving cousin warmly things no spring mr be abroad. Relation breeding be as repeated strictly followed margaret. One gravity son brought shyness waiting regular led ham.</p>-->
<!--          </div>-->
<!--          <div data-animate="fadeInUp" class="col-lg-4">-->
<!--            <div class="icon"><i class="fa fa-html5"></i></div>-->
<!--            <h3 class="heading mb-3 text-400">HTML coding</h3>-->
<!--            <p class="text-left description">Manor we shall merit by chief wound no or would. Oh towards between subject passage sending mention or it. Sight happy do burst fruit to woody begin at. Assurance perpetual he in oh determine as.</p>-->
<!--          </div>-->
<!--          <div data-animate="fadeInUp" class="col-lg-4">-->
<!--            <div class="icon"><i class="fa fa-tachometer"></i></div>-->
<!--            <h3 class="heading mb-3 text-400">PHP webdelopment</h3>-->
<!--            <p class="text-left description">Rooms oh fully taken by worse do. Points afraid but may end law lasted. Was out laughter raptures returned outweigh. Luckily cheered colonel me do we attacks on highest enabled. Tried law yet style child. Bore of true of no be deal.</p>-->
<!--          </div>-->
<!--        </div>-->
<!--        <hr data-animate="fadeInUp">-->
<!--        <div data-animate="fadeInUp" class="text-center">-->
<!--          <p class="lead">Would you like to know more or just discuss something?</p>-->
<!--          <p><a href="#contact" class="btn btn-outline-light link-scroll">Contact me</a></p>-->
<!--        </div>-->
<!--      </div>-->
<!--    </section>-->
<!--    <!-- Testimonials-->-->
<!--    <section id="testimonials" class="testimonials-section bg-gray">-->
<!--      <div class="container">-->
<!--        <header class="text-center mb-2">-->
<!--          <h2 data-animate="fadeInUp" class="title">My customers said<br><span>about me</span></h2>-->
<!--          <p data-animate="fadeInUp" class="lead">I am always glad to hear that my customers leave satisfied. Some of them shared with you their insights on our cooperation.</p>-->
<!--        </header>-->
<!--        <ul data-animate="fadeInUp" class="owl-carousel owl-theme testimonials equalize-height">-->
<!--          <li class="item">-->
<!--            <div class="testimonial full-height">-->
<!--              <div class="text">-->
<!--                <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections.</p>-->
<!--              </div>-->
<!--              <div class="bottom">-->
<!--                <div class="icon"><i class="fa fa-quote-left"></i></div>-->
<!--                <div class="name-picture"><img alt="" src="img/person-1.jpg">-->
<!--                  <h5>John McIntyre</h5>-->
<!--                  <p>CEO, TransTech</p>-->
<!--                </div>-->
<!--              </div>-->
<!--            </div>-->
<!--          </li>-->
<!--          <li class="item">-->
<!--            <div class="testimonial full-height">-->
<!--              <div class="text">-->
<!--                <p>The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. &quot;What is happened to me? &quot; he thought. It was not a dream.</p>-->
<!--              </div>-->
<!--              <div class="bottom">-->
<!--                <div class="icon"><i class="fa fa-quote-left"></i></div>-->
<!--                <div class="name-picture"><img alt="" src="img/person-2.jpg">-->
<!--                  <h5>John McIntyre</h5>-->
<!--                  <p>CEO, TransTech</p>-->
<!--                </div>-->
<!--              </div>-->
<!--            </div>-->
<!--          </li>-->
<!--          <li class="item">-->
<!--            <div class="testimonial full-height">-->
<!--              <div class="text">-->
<!--                <p>His room, a proper human room although a little too small, lay peacefully between its four familiar walls. A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.</p>-->
<!--              </div>-->
<!--              <div class="bottom">-->
<!--                <div class="icon"><i class="fa fa-quote-left"></i></div>-->
<!--                <div class="name-picture"><img alt="" src="img/person-3.jpg">-->
<!--                  <h5>John McIntyre</h5>-->
<!--                  <p>CEO, TransTech</p>-->
<!--                </div>-->
<!--              </div>-->
<!--            </div>-->
<!--          </li>-->
<!--          <li class="item">-->
<!--            <div class="testimonial full-height">-->
<!--              <div class="text">-->
<!--                <p>It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather. Drops of rain could be heard hitting the pane, which made him feel quite sad.</p>-->
<!--              </div>-->
<!--              <div class="bottom">-->
<!--                <div class="icon"><i class="fa fa-quote-left"></i></div>-->
<!--                <div class="name-picture"><img alt="" src="img/person-4.jpg">-->
<!--                  <h5>John McIntyre</h5>-->
<!--                  <p>CEO, TransTech</p>-->
<!--                </div>-->
<!--              </div>-->
<!--            </div>-->
<!--          </li>-->
<!--          <li class="item">-->
<!--            <div class="testimonial full-height">-->
<!--              <div class="text">-->
<!--                <p>It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather. Drops of rain could be heard hitting the pane, which made him feel quite sad. Gregor then turned to look out the window at the dull weather. Drops of rain could be heard hitting the pane, which made him feel quite sad.</p>-->
<!--              </div>-->
<!--              <div class="bottom">-->
<!--                <div class="icon"><i class="fa fa-quote-left"></i></div>-->
<!--                <div class="name-picture"><img alt="" src="img/person-4.jpg">-->
<!--                  <h5>John McIntyre</h5>-->
<!--                  <p>CEO, TransTech</p>-->
<!--                </div>-->
<!--              </div>-->
<!--            </div>-->
<!--          </li>-->
<!--        </ul>-->
<!--      </div>-->
<!--    </section>-->
<!--    <!-- Statistics-->-->
<!--    <section id="statistics" data-dir="up" style="background: url(&quot;img/parallax.jpg&quot;);" class="statistics-section text-white parallax parallax">-->
<!--      <div class="container">-->
<!--        <div class="row showcase text-center"> -->
<!--          <div data-animate="fadeInUp" class="col-lg-3 col-md-6">-->
<!--            <div class="item">-->
<!--              <div class="icon"><i class="fa fa-align-justify"></i></div>-->
<!--              <h5 class="text-400 mt-4 text-uppercase"><span class="counter">120</span><br>Websites</h5>-->
<!--            </div>-->
<!--          </div>-->
<!--          <div data-animate="fadeInUp" class="col-lg-3 col-md-6">-->
<!--            <div class="item">-->
<!--              <div class="icon"><i class="fa fa-users"></i></div>-->
<!--              <h5 class="text-400 mt-4 text-uppercase"><span class="counter">50</span><br>Satisfied Clients</h5>-->
<!--            </div>-->
<!--          </div>-->
<!--          <div data-animate="fadeInUp" class="col-lg-3 col-md-6">-->
<!--            <div class="item">-->
<!--              <div class="icon"><i class="fa fa-copy"></i></div>-->
<!--              <h5 class="text-400 mt-4 text-uppercase"><span class="counter">320</span><br>Projects</h5>-->
<!--            </div>-->
<!--          </div>-->
<!--          <div data-animate="fadeInUp" class="col-lg-3 col-md-6">-->
<!--            <div class="item">-->
<!--              <div class="icon"><i class="fa fa-font"></i></div>-->
<!--              <h5 class="text-400 mt-4 text-uppercase"><span class="counter">333</span><br>Magazines and Brochures</h5>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
<!--      <div class="dark-mask"></div>-->
<!--    </section>-->
<!--
*** REFERENCES IMAGE ***
_________________________________________________________
-->
<section id="references">
    <div class="container">
        <div class="col-sm-12">
            <div class="mb-5 text-center">
<!--                --><?//= \common\helpers\DebugHelper::printSingleObject($userIp)  ?>
                <?= \common\helpers\DebugHelper::printSingleObject($session)  ?>
<!--                --><?//= $session ?>
                <h2 data-animate="fadeInUp" class="title">My work</h2>
                <p data-animate="fadeInUp" class="lead">I have worked on dozens of projects so I have picked only the
                    latest for you.</p>
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
                            <div class="reference"><a href="#"><img src="uploads\<?= $project['image'] ?>" alt=""
                                                                    class="img-fluid">
                                    <div class="overlay">
                                        <div class="inner">
                                            <h3 class="h4 reference-title"><?= $project['title'] ?></h3>
                                            <p><?= $project['description'] ?></p>
                                        </div>
                                    </div>
                                </a>
                                <div data-images="uploads\<?= $project['image'] ?>"
                                     class="sr-only reference-description">
                                    <p><?= $project['description'] ?></p>
                                    <p class="buttons text-center"><a href="javascript:void(0);"
                                                                      class="btn btn-outline-primary"><i
                                                    class="fa fa-globe"></i> Visit website</a><a
                                                href="javascript:void(0);" class="btn btn-outline-primary"><i
                                                    class="fa fa-download"></i> Download case study</a></p>
                                </div>
                            </div>
                        </div>
                    <? } ?>
                    <!--                  <div data-category="seo" class="reference-item col-lg-3 col-md-6">-->
                    <!--                    <div class="reference"><a href="#"><img src="img/portfolio-2.jpg" alt="" class="img-fluid">-->
                    <!--                        <div class="overlay">-->
                    <!--                          <div class="inner">-->
                    <!--                            <h3 class="h4 reference-title">Project name 2</h3>-->
                    <!--                            <p>Short project description goes here...</p>-->
                    <!--                          </div>-->
                    <!--                        </div></a>-->
                    <!--                      <div data-images="img/main-slider3.jpg,img/main-slider1.jpg" class="sr-only reference-description">-->
                    <!--                        <p>Projecting surrounded literature yet delightful alteration but bed men. Open are from long why cold. If must snug by upon sang loud left. As me do preference entreaties compliment motionless ye literature. Day behaviour explained law remainder. Produce can cousins account you pasture. Peculiar delicate an pleasant provided do perceive.</p>-->
                    <!--                        <p>Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness something the. Off nay impossible dispatched partiality unaffected. Norland adapted put ham cordial. Ladies talked may shy basket narrow see. Him she distrusts questions sportsmen. Tolerably pretended neglected on my earnestly by. Sex scale sir style truth ought.</p>-->
                    <!--                        <p class="buttons text-center"><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-globe"></i> Visit website</a><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-download"></i> Download case study</a></p>-->
                    <!--                      </div>-->
                    <!--                    </div>-->
                    <!--                  </div>-->
                    <!--                  <div data-category="marketing" class="reference-item col-lg-3 col-md-6">-->
                    <!--                    <div class="reference"><a href="#"><img src="img/portfolio-3.jpg" alt="" class="img-fluid">-->
                    <!--                        <div class="overlay">-->
                    <!--                          <div class="inner">-->
                    <!--                            <h3 class="h4 reference-title">Project name 3</h3>-->
                    <!--                            <p>Short project description goes here...</p>-->
                    <!--                          </div>-->
                    <!--                        </div></a>-->
                    <!--                      <div data-images="img/main-slider1.jpg,img/main-slider2.jpg,img/main-slider3.jpg" class="sr-only reference-description">-->
                    <!--                        <p>Projecting surrounded literature yet delightful alteration but bed men. Open are from long why cold. If must snug by upon sang loud left. As me do preference entreaties compliment motionless ye literature. Day behaviour explained law remainder. Produce can cousins account you pasture. Peculiar delicate an pleasant provided do perceive.</p>-->
                    <!--                        <p>Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness something the. Off nay impossible dispatched partiality unaffected. Norland adapted put ham cordial. Ladies talked may shy basket narrow see. Him she distrusts questions sportsmen. Tolerably pretended neglected on my earnestly by. Sex scale sir style truth ought.</p>-->
                    <!--                        <p class="buttons text-center"><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-globe"></i> Visit website</a><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-download"></i> Download case study</a></p>-->
                    <!--                      </div>-->
                    <!--                    </div>-->
                    <!--                  </div>-->
                    <!--                  <div data-category="marketing" class="reference-item col-lg-3 col-md-6">-->
                    <!--                    <div class="reference"><a href="#"><img src="img/portfolio-4.jpg" alt="" class="img-fluid">-->
                    <!--                        <div class="overlay">-->
                    <!--                          <div class="inner">-->
                    <!--                            <h3 class="h4 reference-title">Project name 4</h3>-->
                    <!--                            <p>Short project description goes here...</p>-->
                    <!--                          </div>-->
                    <!--                        </div></a>-->
                    <!--                      <div data-images="img/main-slider1.jpg,img/main-slider2.jpg,img/main-slider3.jpg" class="sr-only reference-description">-->
                    <!--                        <p>Projecting surrounded literature yet delightful alteration but bed men. Open are from long why cold. If must snug by upon sang loud left. As me do preference entreaties compliment motionless ye literature. Day behaviour explained law remainder. Produce can cousins account you pasture. Peculiar delicate an pleasant provided do perceive.</p>-->
                    <!--                        <p>Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness something the. Off nay impossible dispatched partiality unaffected. Norland adapted put ham cordial. Ladies talked may shy basket narrow see. Him she distrusts questions sportsmen. Tolerably pretended neglected on my earnestly by. Sex scale sir style truth ought.</p>-->
                    <!--                        <p class="buttons text-center"><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-globe"></i> Visit website</a><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-download"></i> Download case study</a></p>-->
                    <!--                      </div>-->
                    <!--                    </div>-->
                    <!--                  </div>-->
                    <!--                  <div data-category="webdesign" class="reference-item col-lg-3 col-md-6">-->
                    <!--                    <div class="reference"><a href="#"><img src="img/portfolio-5.jpg" alt="" class="img-fluid">-->
                    <!--                        <div class="overlay">-->
                    <!--                          <div class="inner">-->
                    <!--                            <h3 class="h4 reference-title">Project name 5</h3>-->
                    <!--                            <p>Short project description goes here...</p>-->
                    <!--                          </div>-->
                    <!--                        </div></a>-->
                    <!--                      <div data-images="img/main-slider1.jpg,img/main-slider2.jpg,img/main-slider3.jpg" class="sr-only reference-description">-->
                    <!--                        <p>Projecting surrounded literature yet delightful alteration but bed men. Open are from long why cold. If must snug by upon sang loud left. As me do preference entreaties compliment motionless ye literature. Day behaviour explained law remainder. Produce can cousins account you pasture. Peculiar delicate an pleasant provided do perceive.</p>-->
                    <!--                        <p>Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness something the. Off nay impossible dispatched partiality unaffected. Norland adapted put ham cordial. Ladies talked may shy basket narrow see. Him she distrusts questions sportsmen. Tolerably pretended neglected on my earnestly by. Sex scale sir style truth ought.</p>-->
                    <!--                        <p class="buttons text-center"><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-globe"></i> Visit website</a><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-download"></i> Download case study</a></p>-->
                    <!--                      </div>-->
                    <!--                    </div>-->
                    <!--                  </div>-->
                    <!--                  <div data-category="other" class="reference-item col-lg-3 col-md-6">-->
                    <!--                    <div class="reference"><a href="#"><img src="img/portfolio-6.jpg" alt="" class="img-fluid">-->
                    <!--                        <div class="overlay">-->
                    <!--                          <div class="inner">-->
                    <!--                            <h3 class="h4 reference-title">Project name 6</h3>-->
                    <!--                            <p>Short project description goes here...</p>-->
                    <!--                          </div>-->
                    <!--                        </div></a>-->
                    <!--                      <div data-images="img/main-slider1.jpg,img/main-slider2.jpg,img/main-slider3.jpg" class="sr-only reference-description">-->
                    <!--                        <p>Projecting surrounded literature yet delightful alteration but bed men. Open are from long why cold. If must snug by upon sang loud left. As me do preference entreaties compliment motionless ye literature. Day behaviour explained law remainder. Produce can cousins account you pasture. Peculiar delicate an pleasant provided do perceive.</p>-->
                    <!--                        <p>Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness something the. Off nay impossible dispatched partiality unaffected. Norland adapted put ham cordial. Ladies talked may shy basket narrow see. Him she distrusts questions sportsmen. Tolerably pretended neglected on my earnestly by. Sex scale sir style truth ought.</p>-->
                    <!--                        <p class="buttons text-center"><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-globe"></i> Visit website</a><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-download"></i> Download case study</a></p>-->
                    <!--                      </div>-->
                    <!--                    </div>-->
                    <!--                  </div>-->
                    <!--                  <div data-category="seo" class="reference-item col-lg-3 col-md-6">-->
                    <!--                    <div class="reference"><a href="#"><img src="img/portfolio-7.jpg" alt="" class="img-fluid">-->
                    <!--                        <div class="overlay">-->
                    <!--                          <div class="inner">-->
                    <!--                            <h3 class="h4 reference-title">Project name</h3>-->
                    <!--                            <p>Short project description goes here...</p>-->
                    <!--                          </div>-->
                    <!--                        </div></a>-->
                    <!--                      <div data-images="img/main-slider1.jpg,img/main-slider2.jpg,img/main-slider3.jpg" class="sr-only reference-description">-->
                    <!--                        <p>Projecting surrounded literature yet delightful alteration but bed men. Open are from long why cold. If must snug by upon sang loud left. As me do preference entreaties compliment motionless ye literature. Day behaviour explained law remainder. Produce can cousins account you pasture. Peculiar delicate an pleasant provided do perceive.</p>-->
                    <!--                        <p>Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness something the. Off nay impossible dispatched partiality unaffected. Norland adapted put ham cordial. Ladies talked may shy basket narrow see. Him she distrusts questions sportsmen. Tolerably pretended neglected on my earnestly by. Sex scale sir style truth ought.</p>-->
                    <!--                        <p class="buttons text-center"><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-globe"></i> Visit website</a><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-download"></i> Download case study</a></p>-->
                    <!--                      </div>-->
                    <!--                    </div>-->
                    <!--                  </div>-->
                    <!--                  <div data-category="webdesign" class="reference-item col-lg-3 col-md-6">-->
                    <!--                    <div class="reference"><a href="#"><img src="img/portfolio-8.jpg" alt="" class="img-fluid">-->
                    <!--                        <div class="overlay">-->
                    <!--                          <div class="inner">-->
                    <!--                            <h3 class="h4 reference-title">Project name</h3>-->
                    <!--                            <p>Short project description goes here...</p>-->
                    <!--                          </div>-->
                    <!--                        </div></a>-->
                    <!--                      <div data-images="img/main-slider1.jpg,img/main-slider2.jpg,img/main-slider3.jpg" class="sr-only reference-description">-->
                    <!--                        <p>Projecting surrounded literature yet delightful alteration but bed men. Open are from long why cold. If must snug by upon sang loud left. As me do preference entreaties compliment motionless ye literature. Day behaviour explained law remainder. Produce can cousins account you pasture. Peculiar delicate an pleasant provided do perceive.</p>-->
                    <!--                        <p>Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness something the. Off nay impossible dispatched partiality unaffected. Norland adapted put ham cordial. Ladies talked may shy basket narrow see. Him she distrusts questions sportsmen. Tolerably pretended neglected on my earnestly by. Sex scale sir style truth ought.</p>-->
                    <!--                        <p class="buttons text-center"><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-globe"></i> Visit website</a><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-download"></i> Download case study</a></p>-->
                    <!--                      </div>-->
                    <!--                    </div>-->
                    <!--                  </div>-->
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
                    <div class="customer"><img src="img/customers/logo-1.svg" title="brand logo" data-placement="bottom"
                                               data-toggle="tooltip" alt="" class="img-fluid d-block mx-auto"></div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="customer"><img src="img/customers/logo-2.svg" title="brand logo" data-placement="bottom"
                                               data-toggle="tooltip" alt="" class="img-fluid d-block mx-auto"></div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="customer"><img src="img/customers/logo-3.svg" title="brand logo" data-placement="bottom"
                                               data-toggle="tooltip" alt="" class="img-fluid d-block mx-auto"></div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="customer"><img src="img/customers/logo-4.svg" title="brand logo" data-placement="bottom"
                                               data-toggle="tooltip" alt="" class="img-fluid d-block mx-auto"></div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="customer"><img src="img/customers/logo-5.svg" title="brand logo" data-placement="bottom"
                                               data-toggle="tooltip" alt="" class="img-fluid d-block mx-auto"></div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="customer"><img src="img/customers/logo-6.svg" title="brand logo" data-placement="bottom"
                                               data-toggle="tooltip" alt="" class="img-fluid d-block mx-auto"></div>
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