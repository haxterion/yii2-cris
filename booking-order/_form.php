<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\date\DatePicker;
use frontend\models\Vehicle;
use frontend\models\Driver;
use frontend\models\Packet;
use frontend\models\User;
use frontend\models\Guestbook;

/* @var $this yii\web\View */
/* @var $model frontend\models\BookingOrder */
/* @var $form yii\widgets\ActiveForm */
?>
<?php
$id = Yii::$app->session->get('__id');
$user = User::findOne(['id' => $id]);
$users = ArrayHelper::toarray($user);
$model->id_user=$id == '' ? '' : $users ['id'];
$model->person_name=$id == '' ? '' : $users ['username'];
?>

<div class="booking-order-form">

    <?php $form = ActiveForm::begin(); ?>
<div class="row">
        <div class="col-sm-2">
    <?= $form->field($model, 'id_user')->textInput(['maxlength', 'readOnly' => true]) ?>
        </div>
         <div class="col-sm-4">
    <?= $form->field($model, 'person_name')->textInput(['maxlength', 'readOnly' => true]) ?>
        </div>
    <div class="col-sm-6">
    <?= $form->field($model, 'date_input')->widget(
        DatePicker::classname(), [
            'name' => 'check_issue_date',
            'value' => date('d-M-Y', strtotime('+9 days')),
            'options' => ['placeholder' => 'Pilih Tanggal ...'],
            'pluginOptions' => [
                'format' => 'yyyy-mm-dd',
                'autoclose'=>true,
                'todayHighlight' => true
            ]
        ]
    );?>
        </div>
        <div class="col-sm-2">
    <?= $form->field($model, 'id_guestbook')->dropDownList(
        ArrayHelper::map(Guestbook::find()->all(),'id', 'id'),
        ['prompt'=>'Choose Id Guestbook']
    ) ?>
        </div>
        <div class="col-sm-4">
    <?= $form->field($model, 'guest_name')->textInput(['maxlength' => true]) ?>
        </div>
    <div class="col-sm-3">
        <?= $form->field($model, 'guest_phone')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-sm-3">
    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-sm-3">
    <?= $form->field($model, 'first_date')->widget(
        DatePicker::classname(), [
            'name' => 'check_issue_date',
            'value' => date('d-M-Y', strtotime('+9 days')),
            'options' => ['placeholder' => 'Pilih Tanggal ...'],
            'pluginOptions' => [
                'format' => 'yyyy-mm-dd',
                'autoclose'=>true,
                'todayHighlight' => true
            ]
        ]
    );?>
    </div>
    <div class="col-sm-3">
    <?= $form->field($model, 'last_date')->widget(
        DatePicker::classname(), [
            'name' => 'check_issue_date',
            'value' => date('d-M-Y', strtotime('+9 days')),
            'options' => ['placeholder' => 'Pilih Tanggal ...'],
            'pluginOptions' => [
                'format' => 'yyyy-mm-dd',
                'autoclose'=>true,
                'todayHighlight' => true
            ]
        ]
    );?>
    </div>

    <div class="col-sm-3">
    <?= $form->field($model, 'name_driver')->dropDownList(
        ArrayHelper::map(Driver::find()->all(),'id','name'),
        ['prompt'=>'Choose Driver']
    ) ?>
    </div>
    <div class="col-sm-3">
    <?= $form->field($model, 'vehicle')->dropDownList(
        ArrayHelper::map(Vehicle::find()->all(),'id','vehicle_type'),
        ['prompt'=>'Choose Vehicle']
    ) ?>
    </div>
    <div class="col-sm-6">
    <?= $form->field($model, 'origin')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-sm-6">
    <?= $form->field($model, 'destination')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-sm-6">
    <?= $form->field($model, 'packet')->dropDownList(
        ArrayHelper::map(Packet::find()->all(),'id','name'),
        ['prompt'=>'Choose Packet']
    ) ?>
    </div>
    <div class="col-sm-6">
    <?= $form->field($model, 'price')->textInput() ?>
    </div>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
