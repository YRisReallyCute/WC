<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\WcFootballMatch */

$this->title = 'Create Wc Football Match';
$this->params['breadcrumbs'][] = ['label' => 'Wc Football Matches', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wc-football-match-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
