<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\WcFootballMatchSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wc-football-match-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'mid') ?>

    <?= $form->field($model, 'country1') ?>

    <?= $form->field($model, 'country2') ?>

    <?= $form->field($model, 'mtime') ?>

    <?= $form->field($model, 'mtype') ?>

    <?php // echo $form->field($model, 'mresult') ?>

    <?php // echo $form->field($model, 'mvideo') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
