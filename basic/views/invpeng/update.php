<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Invpeng */

$this->title = 'Update Invpeng: ' . $model->Kode_Invoice;
$this->params['breadcrumbs'][] = ['label' => 'Invpengs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Kode_Invoice, 'url' => ['view', 'id' => $model->Kode_Invoice]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="invpeng-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
