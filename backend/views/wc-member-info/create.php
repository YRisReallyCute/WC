<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\WcMemberInfo */

$this->title = 'Create Wc Member Info';
$this->params['breadcrumbs'][] = ['label' => 'Wc Member Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wc-member-info-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
