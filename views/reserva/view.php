<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Reserva $model */

$this->title = $model->ID_RESERVA;
$this->params['breadcrumbs'][] = ['label' => 'Reservas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="reserva-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'ID_RESERVA' => $model->ID_RESERVA, 'ID_USER' => $model->ID_USER, 'ID_LABORATORIO' => $model->ID_LABORATORIO, 'ID_HORARIOS' => $model->ID_HORARIOS], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'ID_RESERVA' => $model->ID_RESERVA, 'ID_USER' => $model->ID_USER, 'ID_LABORATORIO' => $model->ID_LABORATORIO, 'ID_HORARIOS' => $model->ID_HORARIOS], [
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
            'ID_RESERVA',
            'ID_USER',
            'ID_LABORATORIO',
            'ID_HORARIOS',
        ],
    ]) ?>

</div>
