<?php

namespace backend\controllers;

use Yii;
use backend\models\WcPlayerLike;
use backend\models\WcPlayerLikeSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * WcPlayerLikeController implements the CRUD actions for WcPlayerLike model.
 */
class WcPlayerLikeController extends Controller
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
     * Lists all WcPlayerLike models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new WcPlayerLikeSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single WcPlayerLike model.
     * @param string $pname
     * @param string $player_name
     * @param string $player_country
     * @return mixed
     */
    public function actionView($pname, $player_name, $player_country)
    {
        return $this->render('view', [
            'model' => $this->findModel($pname, $player_name, $player_country),
        ]);
    }

    /**
     * Creates a new WcPlayerLike model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new WcPlayerLike();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'pname' => $model->pname, 'player_name' => $model->player_name, 'player_country' => $model->player_country]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing WcPlayerLike model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $pname
     * @param string $player_name
     * @param string $player_country
     * @return mixed
     */
    public function actionUpdate($pname, $player_name, $player_country)
    {
        $model = $this->findModel($pname, $player_name, $player_country);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'pname' => $model->pname, 'player_name' => $model->player_name, 'player_country' => $model->player_country]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing WcPlayerLike model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $pname
     * @param string $player_name
     * @param string $player_country
     * @return mixed
     */
    public function actionDelete($pname, $player_name, $player_country)
    {
        $this->findModel($pname, $player_name, $player_country)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the WcPlayerLike model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $pname
     * @param string $player_name
     * @param string $player_country
     * @return WcPlayerLike the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($pname, $player_name, $player_country)
    {
        if (($model = WcPlayerLike::findOne(['pname' => $pname, 'player_name' => $player_name, 'player_country' => $player_country])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
