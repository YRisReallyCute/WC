<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\WcFootballMatch */

$this->title = 'Update Wc Football Match: ' . ' ' . $model->mid;
$this->params['breadcrumbs'][] = ['label' => 'Wc Football Matches', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->mid, 'url' => ['view', 'id' => $model->mid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="wc-football-match-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
