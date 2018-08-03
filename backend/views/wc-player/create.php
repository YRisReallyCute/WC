<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\WcPlayer */

$this->title = 'Create Wc Player';
$this->params['breadcrumbs'][] = ['label' => 'Wc Players', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wc-player-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
