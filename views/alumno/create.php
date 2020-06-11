<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AdminAlumno */

$this->title = 'Create Admin Alumno';
$this->params['breadcrumbs'][] = ['label' => 'Admin Alumnos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admin-alumno-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
