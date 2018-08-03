<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\WcReferee */

$this->title = $model->rname;
$this->params['breadcrumbs'][] = ['label' => 'Wc Referees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wc-referee-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'rname' => $model->rname, 'rcountry' => $model->rcountry], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'rname' => $model->rname, 'rcountry' => $model->rcountry], [
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
            'rname',
            'rcountry',
        ],
    ]) ?>

</div>
