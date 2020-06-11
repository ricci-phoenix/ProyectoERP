<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Materias */

$this->title = 'Update Materias: ' . $model->id_materia;
$this->params['breadcrumbs'][] = ['label' => 'Materias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_materia, 'url' => ['view', 'id' => $model->id_materia]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="materias-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
