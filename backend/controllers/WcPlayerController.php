<?php

namespace backend\controllers;

use Yii;
use backend\models\WcPlayer;
use backend\models\WcPlayerSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * WcPlayerController implements the CRUD actions for WcPlayer model.
 */
class WcPlayerController extends Controller
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
     * Lists all WcPlayer models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new WcPlayerSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single WcPlayer model.
     * @param string $Player_country
     * @param string $Player_number
     * @return mixed
     */
    public function actionView($Player_country, $Player_number)
    {
        return $this->render('view', [
            'model' => $this->findModel($Player_country, $Player_number),
        ]);
    }

    /**
     * Creates a new WcPlayer model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new WcPlayer();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Player_country' => $model->Player_country, 'Player_number' => $model->Player_number]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing WcPlayer model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $Player_country
     * @param string $Player_number
     * @return mixed
     */
    public function actionUpdate($Player_country, $Player_number)
    {
        $model = $this->findModel($Player_country, $Player_number);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Player_country' => $model->Player_country, 'Player_number' => $model->Player_number]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing WcPlayer model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $Player_country
     * @param string $Player_number
     * @return mixed
     */
    public function actionDelete($Player_country, $Player_number)
    {
        $this->findModel($Player_country, $Player_number)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the WcPlayer model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $Player_country
     * @param string $Player_number
     * @return WcPlayer the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Player_country, $Player_number)
    {
        if (($model = WcPlayer::findOne(['Player_country' => $Player_country, 'Player_number' => $Player_number])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
