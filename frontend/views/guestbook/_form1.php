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
$model= new Guestbook();
$id = Yii::$app->session->get('__id');
$user = User::findOne(['id' => $id]);
$users = ArrayHelper::toarray($user);
$model->id_user=$id == '' ? '' : $users ['id'];
$model->person_name=$id == '' ? '' : $users ['username'];
$coba=Guestbook::findOne();
?>
<div class="recordguestbook-form">

    <?php $form = ActiveForm::begin(); ?>
<?php
var_dump($coba)
?>

    <?php ActiveForm::end(); ?>

</div>
