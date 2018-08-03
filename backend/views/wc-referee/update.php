<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\WcReferee */

$this->title = 'Update Wc Referee: ' . ' ' . $model->rname;
$this->params['breadcrumbs'][] = ['label' => 'Wc Referees', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->rname, 'url' => ['view', 'rname' => $model->rname, 'rcountry' => $model->rcountry]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="wc-referee-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
