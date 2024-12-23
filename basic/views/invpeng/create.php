<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Invpeng */

$this->title = 'Create Invpeng';
$this->params['breadcrumbs'][] = ['label' => 'Invpengs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="invpeng-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
