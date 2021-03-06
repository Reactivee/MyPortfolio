<?php

namespace backend\controllers;

use common\helpers\DebugHelper;
use common\models\Category;
use common\widgets\Alert;
use Yii;
use common\models\Project;
use common\models\ProjectSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ProjectController implements the CRUD actions for Project model.
 */
class ProjectController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Project models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProjectSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $category = Category::find()->asArray()->all();
        $data = \yii\helpers\ArrayHelper::map($category, 'id', 'category');
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'data' => $data
        ]);
    }

    /**
     * Displays a single Project model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $category = Category::find()->asArray()->all();
        return $this->render('view', [
            'model' => $this->findModel($id),
            'category' => $category
        ]);
    }

    /**
     * Creates a new Project model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Project();
        $category = Category::find()->asArray()->all();

        if ($model->load(Yii::$app->request->post())) {
//            DebugHelper::printSingleObject($model);
            //$model->user_id = Yii::$app->user->id;
            $model->uploadImage();

            if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            } else {
                DebugHelper::printSingleObject($model->errors, 1);
            }
        }

        return $this->render('create', [
            'model' => $model,
            'category' => $category
        ]);
    }

    /**
     * Updates an existing Project model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $category = Category::find()->asArray()->all();
        if ($model->load(Yii::$app->request->post())) {
            $model->uploadImage();

            if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            } else {
                DebugHelper::printSingleObject($model->errors, 1);
            }
        }

        return $this->render('update', [
            'model' => $model,
            'category' => $category
        ]);
    }

    /**
     * Deletes an existing Project model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();


        return $this->redirect(['index']);
    }

    /**
     * Finds the Project model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Project the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Project::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
