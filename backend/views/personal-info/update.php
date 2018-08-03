<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\PersonalInfo */

$this->title = 'Update Personal Info: ' . ' ' . $model->sid;
$this->params['breadcrumbs'][] = ['label' => 'Personal Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->sid, 'url' => ['view', 'id' => $model->sid]];
$this->params['breadcrumbs'][] = 'Update';
$this->context->layout = 'main';
?>
<div class="personal-info-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
