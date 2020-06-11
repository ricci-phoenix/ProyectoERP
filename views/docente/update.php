<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AdminDocente */

$this->title = 'Update Admin Docente: ' . $model->id_docente;
$this->params['breadcrumbs'][] = ['label' => 'Admin Docentes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_docente, 'url' => ['view', 'id' => $model->id_docente]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="admin-docente-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
