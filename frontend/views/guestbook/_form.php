<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use yii\widgets\MaskedInput;
use frontend\models\User;
use frontend\models\Recordguestbook;
use yii\helpers\ArrayHelper;
use frontend\models\Guestbook;
use frontend\controllers\RecordguestbookController;
/* @var $this yii\web\View */
/* @var $model frontend\models\Guestbook */
/* @var $form yii\widgets\ActiveForm */

?>
<?php

$model->date_today=date('Y-m-d',strtotime($model->hariini()));
$id = Yii::$app->session->get('__id');
$user = User::findOne(['id' => $id]);
$users = ArrayHelper::toarray($user);
// $model->id_user=$id == '' ? '' : $users ['id'];
// $model->person_name=$id == '' ? '' : $users ['username'];

?>
<div class="col-md-6">
<div class="box box-primary">
 <div class="box-header with-border">   
<h3 class="box-title">Customer</h3>
</div>

<div class="box-body">
    <?php $form = ActiveForm::begin(); ?>
     <!-- <div class="col-sm-2">
    <?= $form->field($model, 'id')->textInput(['maxlength' => true]) ?>
    </div> -->
    <div class="form-group">
    <?= $form->field($model, 'customer')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="form-group">
    <?= $form->field($model, 'phone_number')->widget(
        MaskedInput::className(),[
            'mask' => '(+99)999-9999-9999-9',
            'clientOptions' => [
            'removeMaskOnSubmit' => true,
            ] 
            ]) ?>
    </div>
    <div class="form-group">
    <?= $form->field($model, 'address')->textArea(['maxlength' => true]) ?>
    </div>
    </div>
</div>
</div>
</div>

    <!--GUEST-->
    <div class="col-md-6">
<div class="box box-primary">
 <div class="box-header with-border">   
<h3 class="box-title">Guest</h3>
</div>

<div class="box-body">
    <div class="form-group">
    <?= $form->field($model, 'guest')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="form-group">
    <?= $form->field($model, 'guest_pn')->widget(
        MaskedInput::className(),[
            'mask' => '(+99)999-9999-9999-9',
            'clientOptions' => [
            'removeMaskOnSubmit' => true,
            ] 
            ]) ?>
    </div>
    <div class="form-group">
    <?= $form->field($model, 'guest_address')->textArea(['maxlength' => true]) ?>
    </div>
    </div>

</div>
</div>
<div class="col-md-12">
<div class="box box-primary">
 

<div class="box-body">
    <div class="form-group">
    <?= $form->field($model, 'date_transaksi')->widget(DatePicker::classname(), [
                'options' => ['placeholder' => 'Masukkan Tanggal'],
                'pluginOptions' => [
                    'format' => 'yyyy-mm-dd',
                    'todayHighlight' => true,
                    'autoclose'=>true
            ]
        ])?>
    </div>
    <div class="form-group">
            <?= $form->field($model, 'origin')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="form-group">
            <?= $form->field($model, 'destination')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="form-group">
            <?= $form->field($model, 'vehicle')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="form-group">
            <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="form-group">
            <?= $form->field($model, 'packet')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="form-group">
            <?= $form->field($model, 'explanation')->textArea(['maxlength' => true]) ?>
    </div>
    <div class="form-group">
    <?= $form->field($model, 'status')->radioList(array('Intro'=>'Intro','Deal'=>'Deal')); ?>
    </div>
    <div class="form-group">
            <?= $form->field($model, 'date_today')->textInput(['maxlength', 'readOnly' => true]) ?>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
    </div>
    
    <?php ActiveForm::end(); ?>
</div>
</div>
</div>
</div>
</div>
</div>
</div>