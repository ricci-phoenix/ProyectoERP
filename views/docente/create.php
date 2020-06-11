<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AdminDocente */

$this->title = 'Create Admin Docente';
$this->params['breadcrumbs'][] = ['label' => 'Admin Docentes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admin-docente-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
