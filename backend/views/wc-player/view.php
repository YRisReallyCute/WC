<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\WcPlayer */

$this->title = $model->Player_country;
$this->params['breadcrumbs'][] = ['label' => 'Wc Players', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wc-player-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'Player_country' => $model->Player_country, 'Player_number' => $model->Player_number], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'Player_country' => $model->Player_country, 'Player_number' => $model->Player_number], [
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
            'Player_country',
            'Player_number',
            'identity',
            'Player_name',
            'Player_age',
        ],
    ]) ?>

</div>
