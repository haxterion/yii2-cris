<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use yii\widgets\MaskedInput;
use frontend\models\User;
use frontend\models\Recordguestbook;
use yii\helpers\ArrayHelper;
use frontend\models\Guestbook;
/* @var $this yii\web\View */
/* @var $model frontend\models\Guestbook */
/* @var $form yii\widgets\ActiveForm */

?>
<?php
$model = new Guestbook();
$model->date_today=date('Y-m-d',strtotime($model->hariini()));
$id = Yii::$app->session->get('__id');
$user = User::findOne(['id' => $id]);
$users = ArrayHelper::toarray($user);
$model->id_user=$id == '' ? '' : $users ['id'];
$model->person_name=$id == '' ? '' : $users ['username'];
?>
<div class="guestbook-form">
    <?php $form = ActiveForm::begin([
        'enableClientValidation'=>false,
    ]); ?>
    <div class="row">
        <div class="col-sm-2">
            <?= $form->field($model, 'id_user')->textInput(['maxlength', 'readOnly' => true]) ?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'person_name')->textInput(['maxlength', 'readOnly' => true]) ?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'date_today')->textInput(['maxlength', 'readOnly' => true]) ?>
        </div>
        
        
    </div>

    <div class="row">
     <div class="col-sm-2">
    <?= $form->field($model, 'id')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-sm-4">
    <?= $form->field($model, 'customer')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-sm-4">
    <?= $form->field($model, 'phone_number')->widget(
        MaskedInput::className(),[
            'mask' => '(+99)999-9999-9999-9',
            'clientOptions' => [
            'removeMaskOnSubmit' => true,
            ] 
            ]) ?>
    </div>
    </div>
    <div class="row">
    <div class="col-sm-4">
    <?= $form->field($model, 'date_transaksi')->widget(DatePicker::classname(), [
                'options' => ['placeholder' => 'Masukkan Tanggal'],
                'pluginOptions' => [
                    'format' => 'yyyy-mm-dd',
                    'todayHighlight' => true,
                    'autoclose'=>true
            ]
        ])?>
    </div>  
    <div class="col-sm-4">
    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>
    </div>
    </div>
    <div class="row">
    <div class="col-sm-4">
    <?= $form->field($model, 'status')->radioList(array('Intro'=>'Intro','Deal'=>'Deal')); ?>
    </div>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
