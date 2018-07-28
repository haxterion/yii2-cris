<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use frontend\models\Driver;
use frontend\models\VehicleType;

/* @var $this yii\web\View */
/* @var $model app\models\Vehicle */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vehicle-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'licence_plat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vehicle_type')->dropDownList(
        ArrayHelper::map(VehicleType::find()->all(),'id','type'),
        ['prompt'=>'Pilih Driver']
    ) ?>

    <?= $form->field($model, 'vehicle_status')->radioList(array('Internal'=>'Internal' , 'Mitra'=>'Mitra')); ?>

    <?= $form->field($model, 'partner')->textInput(['maxlength' => true]) ?>

    <!-- <?= $form->field($model, 'id_driver')->textInput() ?> -->
    <?= $form->field($model, 'id_driver')->dropDownList(
        ArrayHelper::map(Driver::find()->all(),'id','name'),
        ['prompt'=>'Pilih Driver']
    ) ?>


    <!-- <?= $form->field($model, 'status_schedule')->textInput() ?> -->

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
