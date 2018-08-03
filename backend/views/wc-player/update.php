<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\WcPlayer */

$this->title = 'Update Wc Player: ' . ' ' . $model->Player_country;
$this->params['breadcrumbs'][] = ['label' => 'Wc Players', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Player_country, 'url' => ['view', 'Player_country' => $model->Player_country, 'Player_number' => $model->Player_number]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="wc-player-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
