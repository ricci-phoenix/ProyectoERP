<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AdminDocente */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="admin-docente-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'apaterno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'amaterno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'materias')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_campus')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
