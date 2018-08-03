<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\WcGambleRecord */

$this->title = 'Update Wc Gamble Record: ' . ' ' . $model->gid;
$this->params['breadcrumbs'][] = ['label' => 'Wc Gamble Records', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->gid, 'url' => ['view', 'gid' => $model->gid, 'pname' => $model->pname]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="wc-gamble-record-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
