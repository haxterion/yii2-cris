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
?>
<div class="guestbook-index">
<!-- 
    <h1><?= Html::encode($this->title) ?></h1> -->
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

            // 'id',
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
            'customer',
            'phone_number',
            'address',
            [
                'attribute'=>'status_order',
                'filter' => ['0'=>'No', '1'=>'Yes'],
                'format'=>'raw',
                'value' => function($model, $key, $index)
                {
                     if($model->status_order == '1')
                {
                    return '<span class="label label-success">Yes</span>';
                }
                else
                {   
                    return '<span class="label label-danger">No</span>';
                }
                },
            ],

            [
                'attribute'=>'status_schedule',
                'filter' => ['0'=>'Pending', '1'=>'Scheduled'],
                'format'=>'raw',
                'value' => function($model, $key, $index)
                {
                     if($model->status_schedule == '1')
                {
                    return '<span class="label label-success">Scheduled</span>';
                }
                else
                {   
                    return '<span class="label label-danger">Pending</span>';
                }
                },
            ],

            [
                'attribute'=>'status_close',
                'filter' => ['0'=>'No', '1'=>'Yes'],
                'format'=>'raw',
                'value' => function($model, $key, $index)
                {
                     if($model->status_close == '1')
                {
                    return '<span class="label label-success">Yes</span>';
                }
                else
                {   
                    return '<span class="label label-danger">No</span> ';
                }
                },
            ],
            // 'date_today',
            //'date_input',
            
            //'status',
            //'id_user',
            //'person_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
