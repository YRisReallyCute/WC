<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\WcFootballMatch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wc-football-match-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'country1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'country2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mtime')->textInput() ?>

    <?= $form->field($model, 'mtype')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mresult')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mvideo')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
