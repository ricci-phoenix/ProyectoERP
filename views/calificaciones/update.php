<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Calificaciones */

$this->title = 'Update Calificaciones: ' . $model->id_alumno;
$this->params['breadcrumbs'][] = ['label' => 'Calificaciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_alumno, 'url' => ['view', 'id_alumno' => $model->id_alumno, 'id_materia' => $model->id_materia]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="calificaciones-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
