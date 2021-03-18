<?php
/**
 * Created by PhpStorm.
 * User: Abrorxon Obidov
 * Date: 15-Mar-21
 * Time: 20:00
 */

namespace frontend\controllers;


use common\models\Project;
use common\models\User;
use frontend\models\FeedBackForm;
use yii\filters\ContentNegotiator;
use yii\rest\Controller;
use Yii;
use yii\web\Response;
use yii\web\UploadedFile;

class ApiController extends Controller
{

    public function behaviors()
    {
        $b = parent::behaviors();
        $b['contentNegotiator'] = [
            'class' => ContentNegotiator::class,
            'formats' => [
                'application/json' => Response::FORMAT_JSON
            ],
        ];
        /*$b[] = [
            'class' => 'yii\filters\AjaxFilter',
        ];*/
        return $b;
    }

    public function actionFeedback()
    {
        $model = new FeedBackForm();

        if ($model->load(Yii::$app->request->post())) {
            $image = UploadedFile::getInstance($model, 'fileHelper');
            if ($image) {
                $imageName = Project::createGuid() . '_' . '.' . $image->getExtension();
                $model->files = $imageName;
                $image->saveAs(Project::uploadImagePath() . '/feedback/' . $imageName);
            }
            return [
                'status' => $model->save(),
                'message' => $model->errors
            ];
        }
        return [
            'status' => false,
            'message' => 'No post data'
        ];
    }

    public function actionTest($id = 0) {
        return [
            'id' => 3 * $id,
            'status' => 'OK',
            'data' => [
                'sfsd',
                'sfsd',
                'sfsd',
                'sfsd',
            ]
        ];
    }

    public function actionGetData() {
        return Yii::$app->request->get();
    }

    public function actionGetProjects($limit = 5) {

        $projects = Project::find()
            ->alias('p')
            ->select([
                'p.id',
                'p.title',
                'p.image',
                'u.username'
            ])
            ->innerJoin(['u' => User::tableName()], 'u.id = p.user_id')
            ->limit($limit)
            ->asArray()
            ->all();

        return $projects;
    }

    protected function response($data)
    {
        return $data;
    }

    public function actionTask ($id)
    {
        $users=Feedback::find()
            ->where(['id'=> $id ])
//            ->orderBy('id')
            ->asArray()
            ->one();
        return $users;
    }

    public function actionComp ($one,$two)
    {
         $item=" katta";
         if($one>$two){
             return $one . $item;
         }
         elseif($one<$two){
             return $two . $item;
         }
         else{
             return " teng";
         }


    }


}