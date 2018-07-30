<?php

use yii\helpers\Html;
use kartik\detail\DetailView;
use yii\widgets\ActiveForm;
/*use yii\widgets\Pjax;*/
use yii\grid\GridView;
use frontend\models\User;
use kartik\date\DatePicker;
use yii\helpers\ArrayHelper;
use frontend\models\Guestbook;

/* @var $this yii\web\View */
/* @var $model frontend\models\Guestbook */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Guestbooks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
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