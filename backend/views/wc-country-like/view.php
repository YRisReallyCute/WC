<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\WcCountryLike */

$this->title = $model->cname;
$this->params['breadcrumbs'][] = ['label' => 'Wc Country Likes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wc-country-like-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'cname' => $model->cname, 'lcountry' => $model->lcountry], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'cname' => $model->cname, 'lcountry' => $model->lcountry], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'cname',
            'lcountry',
        ],
    ]) ?>

</div>
