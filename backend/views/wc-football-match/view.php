<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\WcFootballMatch */

$this->title = $model->mid;
$this->params['breadcrumbs'][] = ['label' => 'Wc Football Matches', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wc-football-match-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->mid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->mid], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'mid',
            'country1',
            'country2',
            'mtime',
            'mtype',
            'mresult',
            'mvideo',
        ],
    ]) ?>

</div>
