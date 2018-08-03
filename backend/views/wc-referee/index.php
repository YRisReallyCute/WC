<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\WcRefereeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Wc Referees';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wc-referee-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Wc Referee', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'rname',
            'rcountry',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
