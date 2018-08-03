<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\WcPlayerLikeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Wc Player Likes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wc-player-like-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Wc Player Like', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'pname',
            'player_name',
            'player_country',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
