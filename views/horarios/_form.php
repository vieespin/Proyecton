<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Horarios $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="horarios-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NOMBRE_HORARIO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'HORA_INICIO')->textInput(['type'=>"time"]) ?>

    <?= $form->field($model, 'HORA_TERMINO')->textInput(['type'=>"time"]) ?>



    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
