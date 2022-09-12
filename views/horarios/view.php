<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Horarios $model */

$this->title = $model->ID_HORARIOS;
$this->params['breadcrumbs'][] = ['label' => 'Horarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="horarios-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'ID_HORARIOS' => $model->ID_HORARIOS], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'ID_HORARIOS' => $model->ID_HORARIOS], [
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
            'ID_HORARIOS',
            'NOMBRE_HORARIO',
            'HORA_INICIO',
            'HORA_TERMINO',
        ],
    ]) ?>

</div>
