<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\WcCountryLikeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Wc Country Likes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wc-country-like-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Wc Country Like', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'cname',
            'lcountry',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
