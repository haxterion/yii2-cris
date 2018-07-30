<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\BookingOrder */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Booking Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="booking-order-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
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
            'name_driver',
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
        ],
    ]) ?>

</div>
