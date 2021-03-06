<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Guestbook */

$this->title = 'Update Guestbook: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Guestbooks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="guestbook-update">
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
