<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Horarios $model */

$this->title = 'Create Horarios';
$this->params['breadcrumbs'][] = ['label' => 'Horarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="horarios-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
