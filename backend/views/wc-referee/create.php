<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\WcReferee */

$this->title = 'Create Wc Referee';
$this->params['breadcrumbs'][] = ['label' => 'Wc Referees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wc-referee-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
