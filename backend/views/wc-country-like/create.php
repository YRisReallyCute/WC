<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\WcCountryLike */

$this->title = 'Create Wc Country Like';
$this->params['breadcrumbs'][] = ['label' => 'Wc Country Likes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wc-country-like-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
