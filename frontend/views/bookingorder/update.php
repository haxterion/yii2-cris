<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\BookingOrder */

$this->title = 'Update Booking Order: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Booking Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="booking-order-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
