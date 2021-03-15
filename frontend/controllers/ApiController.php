<?php
/**
 * Created by PhpStorm.
 * User: Abrorxon Obidov
 * Date: 15-Mar-21
 * Time: 20:00
 */

namespace frontend\controllers;


use common\models\Feedback;
use yii\rest\Controller;
use Yii;

class ApiController extends Controller
{

    public function actionFeedback()
    {
        $model = new Feedback();
        if ($model->load(Yii::$app->request->post()))
            return $model->save();
        return false;
    }

}