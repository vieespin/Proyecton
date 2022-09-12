<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Reserva $model */

$this->title = 'Update Reserva: ' . $model->ID_RESERVA;
$this->params['breadcrumbs'][] = ['label' => 'Reservas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_RESERVA, 'url' => ['view', 'ID_RESERVA' => $model->ID_RESERVA, 'ID_USER' => $model->ID_USER, 'ID_LABORATORIO' => $model->ID_LABORATORIO, 'ID_HORARIOS' => $model->ID_HORARIOS]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="reserva-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
