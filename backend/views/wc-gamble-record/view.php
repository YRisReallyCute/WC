<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\WcGambleRecord */

$this->title = $model->gid;
$this->params['breadcrumbs'][] = ['label' => 'Wc Gamble Records', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wc-gamble-record-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'gid' => $model->gid, 'pname' => $model->pname], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'gid' => $model->gid, 'pname' => $model->pname], [
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
            'gid',
            'pname',
            'gcountry',
            'gmatch_id',
        ],
    ]) ?>

</div>
