<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\HorariosSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="horarios-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID_HORARIOS') ?>

    <?= $form->field($model, 'NOMBRE_HORARIO') ?>

    <?= $form->field($model, 'HORA_INICIO') ?>

    <?= $form->field($model, 'HORA_TERMINO') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
