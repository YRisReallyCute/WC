<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\WcPlayer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wc-player-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Player_country')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Player_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'identity')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Player_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Player_age')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
