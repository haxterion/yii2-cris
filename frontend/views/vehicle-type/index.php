<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\VehicleTypeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Vehicle Types';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vehicle-type-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Vehicle Type', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Xml', ['xml'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'type',
            'vendor',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
