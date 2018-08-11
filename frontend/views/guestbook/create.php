<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Guestbook */
$this->title = 'Create Guestbook';
$this->params['breadcrumbs'][] = ['label' => 'Guestbooks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<<<<<<< HEAD
<session class="content">
	<div class="row">
=======
>>>>>>> f6ba3f3f45f926ef68dcfaee1defe3a7fb563783

<div class="guestbook-create"><!-- 
    <h1><?= Html::encode($this->title) ?></h1> -->

    <?= $this->render('_form', [
        'model' => $model,
        'modelr' => $modelr,
    ]) ?>

</div>
</div>
<<<<<<< HEAD
</session>


=======
</div>
</section>
>>>>>>> f6ba3f3f45f926ef68dcfaee1defe3a7fb563783
