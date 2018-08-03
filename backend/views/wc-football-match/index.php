<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\WcFootballMatchSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Wc Football Matches';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wc-football-match-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Wc Football Match', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'mid',
            'country1',
            'country2',
            'mtime',
            'mtype',
            // 'mresult',
            // 'mvideo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
