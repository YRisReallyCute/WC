<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\WcMemberInfo */

$this->title = 'Update Wc Member Info: ' . ' ' . $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Wc Member Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->username, 'url' => ['view', 'id' => $model->username]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="wc-member-info-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
