<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Laboratorios $model */

$this->title = 'Update Laboratorios: ' . $model->ID_LABORATORIO;
$this->params['breadcrumbs'][] = ['label' => 'Laboratorios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_LABORATORIO, 'url' => ['view', 'ID_LABORATORIO' => $model->ID_LABORATORIO]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="laboratorios-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
