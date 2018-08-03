<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\WcCountry */

$this->title = 'Create Wc Country';
$this->params['breadcrumbs'][] = ['label' => 'Wc Countries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wc-country-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
