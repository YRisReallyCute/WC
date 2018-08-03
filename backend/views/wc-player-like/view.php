<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\WcPlayerLike */

$this->title = $model->pname;
$this->params['breadcrumbs'][] = ['label' => 'Wc Player Likes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wc-player-like-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'pname' => $model->pname, 'player_name' => $model->player_name, 'player_country' => $model->player_country], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'pname' => $model->pname, 'player_name' => $model->player_name, 'player_country' => $model->player_country], [
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
            'pname',
            'player_name',
            'player_country',
        ],
    ]) ?>

</div>
