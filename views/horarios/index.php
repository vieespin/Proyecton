<?php

use app\models\Horarios;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\HorariosSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Horarios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="horarios-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Horarios', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID_HORARIOS',
            'NOMBRE_HORARIO',
            'HORA_INICIO',
            'HORA_TERMINO',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Horarios $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'ID_HORARIOS' => $model->ID_HORARIOS]);
                 }
            ],
        ],
    ]); ?>


</div>
