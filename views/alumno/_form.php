<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AdminAlumno */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="admin-alumno-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'apaterno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'amaterno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'carrera')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'grado')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_materia1')->textInput() ?>

    <?= $form->field($model, 'id_materia2')->textInput() ?>

    <?= $form->field($model, 'id_materia3')->textInput() ?>

    <?= $form->field($model, 'id_materia4')->textInput() ?>

    <?= $form->field($model, 'id_materia5')->textInput() ?>

    <?= $form->field($model, 'id_campus')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
