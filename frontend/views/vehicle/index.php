<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\VehicleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Vehicles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vehicle-index">
    <?= Html::a('Create Vehicle', ['create'], ['class' => 'btn btn-success']) ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'licence_plat',
            'vehicle_type',
            'vehicle_status',
            'partner',
            //'id_driver',
            //'status_schedule',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>


