<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\WcGambleRecord */

$this->title = 'Create Wc Gamble Record';
$this->params['breadcrumbs'][] = ['label' => 'Wc Gamble Records', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wc-gamble-record-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
