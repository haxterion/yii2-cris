<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Modal;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DriverSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Drivers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="driver-index">
    <?= Html::a('Create Driver', ['create'], ['class' => 'btn btn-success']) ?>
    <?= Html::a('Xml', ['xml'], ['class' => 'btn btn-success']) ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            // 'id',
            'name',
            'phone_number',
            'address',
            'status',
            //'status_schedule',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
