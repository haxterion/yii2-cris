<?php
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\models\Vehicle;

/* @var $this yii\web\View */
/* @var $model frontend\models\Schedule */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="schedule-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'vehicle')->dropDownList(
        ArrayHelper::map(Vehicle::find()->all(),'id','licence_plat'),
        ['prompt'=>'Select licence plat']
    ) ?>

    <?= $form->field($model, 'id_booking')->textInput() ?>

    <?= $form->field($model, 'id_vehicle')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
