<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\WcPlayerLike */

$this->title = 'Update Wc Player Like: ' . ' ' . $model->pname;
$this->params['breadcrumbs'][] = ['label' => 'Wc Player Likes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pname, 'url' => ['view', 'pname' => $model->pname, 'player_name' => $model->player_name, 'player_country' => $model->player_country]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="wc-player-like-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
