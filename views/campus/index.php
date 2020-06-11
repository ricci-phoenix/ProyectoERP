<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CampusSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Campuses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="campus-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Campus', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_campus',
            'nombre',
            'calle',
            'colonia',
            'numero',
            'codigopostal',
            'telefono',
            'ciudad',
            'estado',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
