<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\WcCountryLike */

$this->title = 'Update Wc Country Like: ' . ' ' . $model->cname;
$this->params['breadcrumbs'][] = ['label' => 'Wc Country Likes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cname, 'url' => ['view', 'cname' => $model->cname, 'lcountry' => $model->lcountry]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="wc-country-like-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
