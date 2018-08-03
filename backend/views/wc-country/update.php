<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\WcCountry */

$this->title = 'Update Wc Country: ' . ' ' . $model->country_name;
$this->params['breadcrumbs'][] = ['label' => 'Wc Countries', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->country_name, 'url' => ['view', 'id' => $model->country_name]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="wc-country-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
