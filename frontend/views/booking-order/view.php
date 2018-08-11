<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\ArrayHelper;
use frontend\models\Vehicle;
use frontend\models\Driver;
use frontend\models\Packet;
use frontend\models\User;
use frontend\models\Guestbook;

/* @var $this yii\web\View */
/* @var $model frontend\models\BookingOrder */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Booking Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
// $namedriver = 'name_driver';
// $named=Driver::find(1);
// $namedriver = (ArrayHelper::map(Driver::find()->all(),'id', 'name'));
// var_dump(Arrayhelper::map($name_driver, 'id', 'name'));
?>
<div class="booking-order-view">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <p>
        <?php
        // var_dump (if($model){
        //     echo $model->username;
        //     echo $model->status;
        // })
        ?>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'id_guestbook',
            'guest_name',
            [
                'attribute' => 'name_driver',
                'value' => $model->name_driver
            ],
            'guest_phone',
            'address',
            'first_date',
            'last_date',
            'vehicle',
            'origin',
            'destination',
            'packet',
            'price',
            'date_today',
            'date_input',
            'date_transaksi',
            'id_user',
            'person_name',

           /* [
                'class'=> 'yii\grid\ActionColumn',
                'template'=> '{view}',
                'buttons'=> [
                    'view' => function ($url,$model){
                        return Html::a('<span class="fa fa-eye"></span>',
                        ['view','id'=>$model->id],['class'=> 'btn btn-info btn-sm']);
                    }
                ]

            ],*/
        ],
    ]) ?>

</div>
