<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\BookingOrder */


$this->title = 'Create Booking Order';
$this->params['breadcrumbs'][] = ['label' => 'Booking Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="booking-order-create"><br>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
