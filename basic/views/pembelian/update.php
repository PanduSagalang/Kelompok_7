<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pembelian */

$this->title = 'Update Pembelian: ' . $model->Id_Pembelian;
$this->params['breadcrumbs'][] = ['label' => 'Pembelians', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id_Pembelian, 'url' => ['view', 'id' => $model->Id_Pembelian]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pembelian-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
