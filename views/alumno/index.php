<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AlumnoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Admin Alumnos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admin-alumno-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Admin Alumno', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_alumno',
            'nombre',
            'apaterno',
            'amaterno',
            'carrera',
            'grado',
            'id_materia1',
            'id_materia2',
            'id_materia3',
            'id_materia4',
            'id_materia5',
            'id_campus',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
