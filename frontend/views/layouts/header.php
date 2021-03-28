  <!-- navbar-->
  <header class="header">
      <nav class="navbar navbar-expand-lg fixed-top">
          <div class="container"><a href="http://front.port/" class="navbar-brand scrollTo"><?= Yii::t('main','IT Ishchi') ?> </a>
              <button type="button" data-toggle="collapse" data-target="#navbarcollapse"
                      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
                      class="navbar-toggler navbar-toggler-right"><span class="fa fa-bars"></span></button>
              <div id="navbarcollapse" class="collapse navbar-collapse">
                  <ul class="navbar-nav ml-auto">
                      <li class="nav-item"><a href="#references" class="nav-link link-scroll"><?= Yii::t('main','Loyihalarim') ?></a></li>
                      <li class="nav-item"><a href="#customers" class="nav-link link-scroll"><?= Yii::t('main','Hamkorlar') ?></a></li>
                      <li class="nav-item"><a href="#contact" class="nav-link link-scroll"><?= Yii::t('main','Aloqa') ?></a></li>
                  </ul>
              </div>

              <?=\frontend\widgets\LanguagePicker::widget()?>

          </div>
      </nav>
  </header>