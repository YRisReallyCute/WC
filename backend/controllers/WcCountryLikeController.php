<?php

namespace backend\controllers;

use Yii;
use backend\models\WcCountryLike;
use backend\models\WcCountryLikeSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * WcCountryLikeController implements the CRUD actions for WcCountryLike model.
 */
class WcCountryLikeController extends Controller
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
     * Lists all WcCountryLike models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new WcCountryLikeSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single WcCountryLike model.
     * @param string $cname
     * @param string $lcountry
     * @return mixed
     */
    public function actionView($cname, $lcountry)
    {
        return $this->render('view', [
            'model' => $this->findModel($cname, $lcountry),
        ]);
    }

    /**
     * Creates a new WcCountryLike model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new WcCountryLike();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'cname' => $model->cname, 'lcountry' => $model->lcountry]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing WcCountryLike model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $cname
     * @param string $lcountry
     * @return mixed
     */
    public function actionUpdate($cname, $lcountry)
    {
        $model = $this->findModel($cname, $lcountry);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'cname' => $model->cname, 'lcountry' => $model->lcountry]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing WcCountryLike model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $cname
     * @param string $lcountry
     * @return mixed
     */
    public function actionDelete($cname, $lcountry)
    {
        $this->findModel($cname, $lcountry)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the WcCountryLike model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $cname
     * @param string $lcountry
     * @return WcCountryLike the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($cname, $lcountry)
    {
        if (($model = WcCountryLike::findOne(['cname' => $cname, 'lcountry' => $lcountry])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
