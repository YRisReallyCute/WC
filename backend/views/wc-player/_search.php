<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\WcPlayerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wc-player-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Player_country') ?>

    <?= $form->field($model, 'Player_number') ?>

    <?= $form->field($model, 'identity') ?>

    <?= $form->field($model, 'Player_name') ?>

    <?= $form->field($model, 'Player_age') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
