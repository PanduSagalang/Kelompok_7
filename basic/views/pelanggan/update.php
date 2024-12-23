<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pelanggan */

$this->title = 'Update Pelanggan: ' . $model->Id_Pelanggan;
$this->params['breadcrumbs'][] = ['label' => 'Pelanggans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id_Pelanggan, 'url' => ['view', 'id' => $model->Id_Pelanggan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pelanggan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
