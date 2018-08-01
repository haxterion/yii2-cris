<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use dosamigos\datepicker\DatePicker;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\GuestbookSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Guestbooks';
$this->params['breadcrumbs'][] = $this->title;
$data='3';
?>
<div class="guestbook-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Guestbook', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'customer',
            'phone_number',
            'address',
            // 'date_today',
            //'date_input',
            [
                'attribute' => 'date_transaksi',
                'value'=> 'date_transaksi',
                'format'=> 'raw',
                'filter' =>  DatePicker::widget([
                    'model' => $searchModel,
                    'attribute' => 'date_transaksi',
                        'clientOptions' => [
                            'autoclose' => true,
                            'format' => 'yyyy-m-d'
                        ]
                ])
                        ],
            //'status',
            //'id_user',
            //'person_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
