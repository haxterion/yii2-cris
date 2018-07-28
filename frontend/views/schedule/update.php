<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Schedule */

$this->title = 'Update Schedule: ' . $model->id_schedule;
$this->params['breadcrumbs'][] = ['label' => 'Schedules', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_schedule, 'url' => ['view', 'id' => $model->id_schedule]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="schedule-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
