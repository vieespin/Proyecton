<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Horarios $model */

$this->title = 'Update Horarios: ' . $model->ID_HORARIOS;
$this->params['breadcrumbs'][] = ['label' => 'Horarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_HORARIOS, 'url' => ['view', 'ID_HORARIOS' => $model->ID_HORARIOS]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="horarios-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
