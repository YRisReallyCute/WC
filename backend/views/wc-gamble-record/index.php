<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\WcGambleRecordSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Wc Gamble Records';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wc-gamble-record-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Wc Gamble Record', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'gid',
            'pname',
            'gcountry',
            'gmatch_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
