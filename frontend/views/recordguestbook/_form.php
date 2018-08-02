<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use frontend\models\User;
use frontend\models\Guestbook;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model frontend\models\Recordguestbook */
/* @var $form yii\widgets\ActiveForm */
?>
<?php
$id = Yii::$app->session->get('__id');
$user = User::findOne(['id' => $id]);
$users = ArrayHelper::toarray($user);
$model->id_user=$id == '' ? '' : $users ['id'];
$model->person_name=$id == '' ? '' : $users ['username'];
?>
<div class="recordguestbook-form">

    <?php $form = ActiveForm::begin(); ?>

<div class="row">
        <div class="col-sm-2">
    <?= $form->field($model, 'id_user')->textInput(['readOnly' => true]) ?>
        </div>
        <div class="col-sm-6">
    <?= $form->field($model, 'person_name')->textInput(['readOnly' => true]) ?>
        </div>
        <div class="col-sm-3">
    <?= $form->field($model, 'date_transaksi')->widget(
        DatePicker::className(),[
            'name' => 'check_issue_date',
            'value' => date('d-M-Y', strtotime('+2 days')),
            'options' => ['placeholder' => 'Select Issue date....'],
            'pluginOptions' => [
                'format' => 'yyyy-mm-dd',
                'todayHighlight' => true,
                'autoclose'=>true
            ]
        ]);?>
        </div>
        
        <div class="col-sm-2">
    <?= $form->field($model, 'id')->dropDownList(
        ArrayHelper::map(Guestbook::find()->all(),'id', 'id'),
        ['prompt'=>'Choose Id']
    ) ?>
        </div>
        <div class="col-sm-3">
    <?= $form->field($model, 'date_phone')->widget(
        DatePicker::className(),[
            'name' => 'check_issue_date',
            'value' => date('d-M-Y', strtotime('+2 days')),
            'options' => ['placeholder' => 'Select Issue date....'],
            'pluginOptions' => [
                'format' => 'yyyy-mm-dd',
                    'todayHighlight' => true,
                    'autoclose'=>true
            ]
        ]);?>
        </div>
        <div class="col-sm-3">
    <?= $form->field($model, 'price')->textInput() ?>
        </div>
        <div class="col-sm-3">
    <?= $form->field($model, 'status')->radioList(array('intro'=>'Intro','nego'=>'Nego' ,'deal'=>'Deal', 'reject'=>'Reject'))?>
        </div>
        <div class="col-sm-11">
    <?= $form->field($model, 'explanation')->textArea(['maxlength' => true]) ?>
        </div></div>



    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        <?= Html::a('Lihat Data', ['/guestbook'], ['class' => 'btn btn-default', 'target' => '_blank']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
