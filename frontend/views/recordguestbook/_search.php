<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\RecordguestbookSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="recordguestbook-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_guestbook') ?>

    <?= $form->field($model, 'date_phone') ?>

    <?= $form->field($model, 'date_today') ?>

    <?= $form->field($model, 'date_input') ?>

    <?php // echo $form->field($model, 'date_transaksi') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'explanation') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'id_user') ?>

    <?php // echo $form->field($model, 'person_name') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
