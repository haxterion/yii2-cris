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
$this->params['breadcrumbs'][] = ['label' => 'Guestbooks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$model1 = new Recordguestbook();
?>

<div class="guestbook-view">
     <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
 <div class="row">
        <div class="col-sm-3">
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
            // 'date_today',
            'date_input',
            'date_transaksi',
            'status',
            'id_user',
            'person_name',
        ],
    ]) ?>
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
        <div class="col-sm-3">
    <?= $form->field($model, 'id_user')->textInput(['readOnly' => true]) ?>
        </div>
        <div class="col-sm-4">
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
    <?= $form->field($model, 'id')->textInput(['readOnly'=>true]) ?>

    </div>
        <div class="col-sm-3">
    <?= $form->field($model1, 'status')->radioList(array('intro'=>'Intro','nego'=>'Nego' ,'deal'=>'Deal', 'reject'=>'Reject'))?>
        </div>
        <div class="col-sm-3">
    <?= $form->field($model1, 'price')->textInput() ?>
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
<?php
// $query = (new Query())->from('record_guestbook')->where(['id_guestbook' => 1]);
// $searchModel = new RecordguestbookSearch();
// $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
$model = Recordguestbook::find();
$dataProvider = new ActiveDataProvider([
    'query'=> $model,
    'pagination' => [
        'pageSize' => 10
    ]
]);
?>
<?= GridView::widget([
    'dataProvider' => $dataProvider
])
?>
</div>