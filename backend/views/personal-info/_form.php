<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->context->layout = 'main';

/* @var $this yii\web\View */
/* @var $model backend\models\PersonalInfo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="personal-info-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'sid')->textInput() ?>

    <?= $form->field($model, 'sname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'smajor')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
