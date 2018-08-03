<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AdminInfoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Admin Infos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admin-info-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Admin Info', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'aid',
            'aname',
            'phonenumber',
            'atime',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
