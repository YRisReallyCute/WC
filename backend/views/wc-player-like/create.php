<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\WcPlayerLike */

$this->title = 'Create Wc Player Like';
$this->params['breadcrumbs'][] = ['label' => 'Wc Player Likes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wc-player-like-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
