<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\WcMemberInfoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Wc Member Infos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wc-member-info-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Wc Member Info', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'username',
            'password',
            'grade',
            'memsex:boolean',
            'memage',
            // 'memphonenumber',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
