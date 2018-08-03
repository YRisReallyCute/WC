<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\WcReferee */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wc-referee-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'rname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rcountry')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
