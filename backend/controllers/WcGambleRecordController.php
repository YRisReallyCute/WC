<?php

namespace backend\controllers;

use Yii;
use backend\models\WcGambleRecord;
use backend\models\WcGambleRecordSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * WcGambleRecordController implements the CRUD actions for WcGambleRecord model.
 */
class WcGambleRecordController extends Controller
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
     * Lists all WcGambleRecord models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new WcGambleRecordSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single WcGambleRecord model.
     * @param integer $gid
     * @param string $pname
     * @return mixed
     */
    public function actionView($gid, $pname)
    {
        return $this->render('view', [
            'model' => $this->findModel($gid, $pname),
        ]);
    }

    /**
     * Creates a new WcGambleRecord model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new WcGambleRecord();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'gid' => $model->gid, 'pname' => $model->pname]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing WcGambleRecord model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $gid
     * @param string $pname
     * @return mixed
     */
    public function actionUpdate($gid, $pname)
    {
        $model = $this->findModel($gid, $pname);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'gid' => $model->gid, 'pname' => $model->pname]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing WcGambleRecord model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $gid
     * @param string $pname
     * @return mixed
     */
    public function actionDelete($gid, $pname)
    {
        $this->findModel($gid, $pname)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the WcGambleRecord model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $gid
     * @param string $pname
     * @return WcGambleRecord the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($gid, $pname)
    {
        if (($model = WcGambleRecord::findOne(['gid' => $gid, 'pname' => $pname])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
