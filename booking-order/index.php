<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\BookingOrderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Booking Orders';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="booking-order-index">

<br>
<br>
<br>



    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <p>
        <?= Html::a('Create Booking Order', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_guestbook',
            'guest_name',
            'name_driver',
            'guest_phone',
            //'address',
            //'first_date',
            //'last_date',
            //'vehicle',
            //'origin',
            //'destination',
            //'packet',
            //'price',
            //'date_today',
            //'date_input',
            //'date_transaksi',
            //'id_user',
            //'person_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
