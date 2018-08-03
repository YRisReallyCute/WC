<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\AdminInfo */

$this->title = 'Create Admin Info';
$this->params['breadcrumbs'][] = ['label' => 'Admin Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admin-info-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
