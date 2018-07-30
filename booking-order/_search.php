<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\BookingOrderSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="booking-order-search">
<?= $this->render('header');?>
<br>
<br>
<br>

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_guestbook') ?>

    <?= $form->field($model, 'guest_name') ?>

    <?= $form->field($model, 'name_driver') ?>

    <?= $form->field($model, 'guest_phone') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'first_date') ?>

    <?php // echo $form->field($model, 'last_date') ?>

    <?php // echo $form->field($model, 'vehicle') ?>

    <?php // echo $form->field($model, 'origin') ?>

    <?php // echo $form->field($model, 'destination') ?>

    <?php // echo $form->field($model, 'packet') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'date_today') ?>

    <?php // echo $form->field($model, 'date_input') ?>

    <?php // echo $form->field($model, 'date_transaksi') ?>

    <?php // echo $form->field($model, 'id_user') ?>

    <?php // echo $form->field($model, 'person_name') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
