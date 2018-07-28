<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Recordguestbook */

$this->title = 'Update Recordguestbook: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Recordguestbooks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="recordguestbook-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
