<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Recordguestbook */

$this->title = 'Create Recordguestbook';
$this->params['breadcrumbs'][] = ['label' => 'Recordguestbook', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="recordguestbook-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
