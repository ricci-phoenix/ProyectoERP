<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Calificaciones */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="calificaciones-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_alumno')->textInput() ?>

    <?= $form->field($model, 'id_materia')->textInput() ?>

    <?= $form->field($model, 'parcial1')->textInput() ?>

    <?= $form->field($model, 'parcial2')->textInput() ?>

    <?= $form->field($model, 'parcial3')->textInput() ?>

    <?= $form->field($model, 'final')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
