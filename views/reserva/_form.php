<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use \app\models\Users;
use \app\models\Laboratorios;
use \app\models\Horarios;


/** @var yii\web\View $this */
/** @var app\models\Reserva $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="reserva-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= Html::activeDropDownList($model, 'ID_USER',
      ArrayHelper::map(Users::find()->all(), 'ID_USER', 'USERNAME')) ?>

    <?= Html::activeDropDownList($model, 'ID_LABORATORIO',
      ArrayHelper::map(Laboratorios::find()->all(), 'ID_LABORATORIO', 'NOMBRE_LABORATORIO')) ?>

    <?= Html::activeDropDownList($model, 'ID_HORARIOS',
      ArrayHelper::map(Horarios::find()->all(), 'ID_HORARIOS', 'NOMBRE_HORARIO')) ?>
   








    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
