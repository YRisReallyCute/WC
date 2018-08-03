<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PersonalInfoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Personal Infos';
$this->params['breadcrumbs'][] = $this->title;
$this->context->layout = 'main';
?>
<div class="personal-info-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Personal Info', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'sid',
            'sname',
            'smajor',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
