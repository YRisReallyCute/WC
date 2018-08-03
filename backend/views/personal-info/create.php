<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\PersonalInfo */

$this->title = 'Create Personal Info';
// $this->params['breadcrumbs'][] = ['label' => 'Personal Infos', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
$this->context->layout = 'main';
?>
<div class="personal-info-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
