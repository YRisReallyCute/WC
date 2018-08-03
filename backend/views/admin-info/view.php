<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\AdminInfo */

$this->title = $model->aid;
$this->params['breadcrumbs'][] = ['label' => 'Admin Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admin-info-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->aid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->aid], [
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
            'aid',
            'aname',
            'phonenumber',
            'atime',
        ],
    ]) ?>

</div>
