<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AlumnoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="admin-alumno-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_alumno') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'apaterno') ?>

    <?= $form->field($model, 'amaterno') ?>

    <?= $form->field($model, 'carrera') ?>

    <?php // echo $form->field($model, 'grado') ?>

    <?php // echo $form->field($model, 'id_materia1') ?>

    <?php // echo $form->field($model, 'id_materia2') ?>

    <?php // echo $form->field($model, 'id_materia3') ?>

    <?php // echo $form->field($model, 'id_materia4') ?>

    <?php // echo $form->field($model, 'id_materia5') ?>

    <?php // echo $form->field($model, 'id_campus') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
