<?php

namespace backend\controllers;

use Yii;
use backend\models\WcReferee;
use backend\models\WcRefereeSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * WcRefereeController implements the CRUD actions for WcReferee model.
 */
class WcRefereeController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all WcReferee models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new WcRefereeSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single WcReferee model.
     * @param string $rname
     * @param string $rcountry
     * @return mixed
     */
    public function actionView($rname, $rcountry)
    {
        return $this->render('view', [
            'model' => $this->findModel($rname, $rcountry),
        ]);
    }

    /**
     * Creates a new WcReferee model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new WcReferee();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'rname' => $model->rname, 'rcountry' => $model->rcountry]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing WcReferee model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $rname
     * @param string $rcountry
     * @return mixed
     */
    public function actionUpdate($rname, $rcountry)
    {
        $model = $this->findModel($rname, $rcountry);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'rname' => $model->rname, 'rcountry' => $model->rcountry]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing WcReferee model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $rname
     * @param string $rcountry
     * @return mixed
     */
    public function actionDelete($rname, $rcountry)
    {
        $this->findModel($rname, $rcountry)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the WcReferee model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $rname
     * @param string $rcountry
     * @return WcReferee the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($rname, $rcountry)
    {
        if (($model = WcReferee::findOne(['rname' => $rname, 'rcountry' => $rcountry])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
