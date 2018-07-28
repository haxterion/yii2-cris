<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\GuestbookSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Guestbook';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="guestbook-index">
    <!-- <h1><?= Html::encode($this->title) ?></h1> -->
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
            'date_transaksi',
            'customer',
            'phone_number',
            'address',
            'status',
            //'date_input',
            //'date_transaksi',
            //'status',
            //'id_user',
            //'person_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
