<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 28-Mar-21
 * Time: 16:05
 */

namespace frontend\modules\api\controllers;


use yii\web\Controller;

class MainController extends Controller
{

    public function actionIndex()
    {
        return $this->render('index');
    }

}