<?php

use yii\db\Query;
use yii\data\ActiveDataProvider;
use yii\helpers\Html;
use kartik\detail\DetailView;
use yii\widgets\ActiveForm;
use yii\grid\GridView;
use frontend\models\User;
use kartik\date\DatePicker;
use yii\helpers\ArrayHelper;
use frontend\models\Guestbook;
use frontend\models\Recordguestbook;
use frontend\models\RecordguestbookSearch;
use kartik\daterange\DateRangeBehavior;
use kartik\daterange\DateRangePicker;

/* @var $this yii\web\View */
/* @var $model frontend\models\Guestbook */

$this->title = $model->id;
$id_guestbook = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Guestbooks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$model1 = new Recordguestbook();
?>
<div class="guestbook-view">
     <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Buat Order', ['booking-order/create', 'id' => $model->id], [
            'class' => 'btn btn-default',
            'data' => [
                'confirm' => 'Apakah anda yakin untuk membuat pesanan?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
<section class="section">
 <div class="row">
        <div class="col-xs-3">
            <div class="box">
    <?= DetailView::widget([
        'model' => $model,
        'bootstrap' => true,
        'hover'=>true,
        'condensed'=>true,
        'bordered' => true,
        'attributes' => [
            'id',
            'customer',
            'phone_number',
            'address',
            'guest',
            'guest_pn',
            'guest_address',
            // 'date_today',
            'date_input',
            'date_transaksi',
            'vehicle',
            'origin',
            'destination',
            'explanation',
            'price',
            'status',
            'price',
            'id_user',
            'person_name',
        ],
    ]) ?>
</div>
</div>
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
        <div class="col-sm-1">
    <?= $form->field($model, 'id')->textInput(['readOnly'=>true]) ?>
        </div>
        <div class="col-sm-1">
    <?= $form->field($model, 'id_user')->textInput(['readOnly' => true]) ?>
        </div>
        <div class="col-sm-2">
    <?= $form->field($model, 'person_name')->textInput(['readOnly' => true]) ?>
        </div>
        <div class="col-sm-3">
    <?= $form->field($model1, 'date_transaksi')->widget(
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
    <?= $form->field($model1, 'price')->textInput() ?>
        </div>
        <div class="col-sm-3">
    <?= $form->field($model1, 'status')->radioList(array('intro'=>'Intro','nego'=>'Nego' ,'deal'=>'Deal', 'reject'=>'Reject'))?>
        </div>
        <div class="col-sm-7">
    <?= $form->field($model1, 'explanation')->textArea(['maxlength' => true]) ?>
        </div>
    <?php ActiveForm::end(); ?>
    <div class="col-sm-3">
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        <?= Html::a('Lihat Data', ['/guestbook'], ['class' => 'btn btn-default', 'target' => '_blank']) ?>
    </div>
    </div>
    
</div>
<div class="col-sm-12">
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <td>ID</td>
            <td>ID GuestBook</td>
            <td>Date Transaksi</td>
            <td>Status</td>
            <td>Price</td>
            <td>Explanation</td>
            <td>Person Name</td>
        </tr>
    </thead>        
    <tbody>
        <?php foreach ($query1 as $query): ?>
        <tr>
            <td><?= $query['id'] ?></td>
            <td><?= $query['id_guestbook'] ?></td>
            <td><?= $query['date_transaksi'] ?></td>
            <td><?= $query['status'] ?></td>
            <td><?= $query['price'] ?></td>
            <td><?= $query['explanation'] ?></td>
            <td><?= $query['person_name'] ?></td>    
        </tr>
        <?php endforeach;?>
    </tbody>    
</table>
</div>
</section>
