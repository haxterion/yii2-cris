<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\date\DatePicker;
use yii\widgets\MaskedInput;
use frontend\models\Vehicle;
use frontend\models\Driver;
use frontend\models\Packet;
use frontend\models\User;
use frontend\models\Guestbook;
use kartik\datetime\DateTimePicker;
use frontend\models\Recordguestbook;
use kartik\select2\Select2;
use wbraganca\dynamicform\DynamicFormWidget;

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
$idi = Yii::$app->getRequest()->getQueryParam('id');
$order = Guestbook::findOne(['id', $idi]);
$model->id_guestbook = $idi;
$model->address = $order->address;
$model->date_input = $order->date_input;
$model->customer = $order->customer;
$model->cust_phone = $order->phone_number;
$model->price = $order->price;
$model->guest_name = $order->guest;
$model->guest_phone = $order->guest_pn;

?>

<div class="booking-order-form">
<div class="box-body">
    <?php $form = ActiveForm::begin(); ?>
<div class="row">
        <div class="col-sm-1">
    <?= $form->field($model, 'id_user')->textInput(['maxlength', 'hiddenInput' => true]) ?>
        </div>
         <div class="col-sm-2">
    <?= $form->field($model, 'person_name')->textInput(['maxlength', 'hiddenInput' => true]) ?>
        </div>
         <div class="col-sm-2">
    <?= $form->field($model, 'id_guestbook')->textInput(['maxlength', 'readOnly' => true]) ?>
        </div>
        <div class="col-sm-2">
    <?= $form->field($model, 'customer')->textInput(['maxlength' => true]) ?>
        </div>
<!--     <div class="col-sm-4">
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
 -->        <div class="col-sm-5">
    <?= $form->field($model, 'guest_name')->textInput(['maxlength' => true]) ?>
        </div>
    <div class="col-sm-3">
        <?= $form->field($model, 'guest_phone')->widget(
        MaskedInput::className(),[
            'mask' => '(+99)999-9999-9999',
            'clientOptions' => [
            'removeMaskOnSubmit' => true,
            ] 
            ]) ?>
    </div>
    <div class="col-sm-3">
    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-sm-3">
    <?= $form->field($model, 'first_date')->widget(DateTimePicker::classname(), [
	'options' => ['placeholder' => 'Enter event time ...'],
	'pluginOptions' => [
		'autoclose' => true
            ]
        ]);?>
    </div>
    <div class="col-sm-3">
    <?= $form->field($model, 'last_date')->widget(DateTimePicker::classname(), [
	'options' => ['placeholder' => 'Enter event time ...'],
	'pluginOptions' => [
		'autoclose' => true
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
    <?= $form->field($model, 'salary')->textInput() ?>
    </div>
    <div class="col-sm-3">
    <?= $form->field($model, 'vehicle')->dropDownList(
        ArrayHelper::map(Vehicle::find()->all(),'id','vehicle_type'),
        ['prompt'=>'Choose Vehicle']
    ) ?>
    </div>
    <div class="col-sm-3">
    <?= $form->field($model, 'license_plat')->textInput(['maxlength' => true]) ?>
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
     <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
</div>
<?php ActiveForm::end(); ?>
</div>
</div>

