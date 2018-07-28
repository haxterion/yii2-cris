<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\BookingOrder */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="booking-order-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_guestbook')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'guest_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_driver')->textInput() ?>

    <?= $form->field($model, 'guest_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'first_date')->textInput() ?>

    <?= $form->field($model, 'last_date')->textInput() ?>

    <?= $form->field($model, 'vehicle')->textInput() ?>

    <?= $form->field($model, 'origin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'destination')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'packet')->textInput() ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'date_today')->textInput() ?>

    <?= $form->field($model, 'date_input')->textInput() ?>

    <?= $form->field($model, 'date_transaksi')->textInput() ?>

    <?= $form->field($model, 'id_user')->textInput() ?>

    <?= $form->field($model, 'person_name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
