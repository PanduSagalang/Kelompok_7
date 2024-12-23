<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\InvpengSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="invpeng-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'Kode_Invoice') ?>

    <?= $form->field($model, 'Id_Karyawan') ?>

    <?= $form->field($model, 'Nama_Pembeli') ?>

    <?= $form->field($model, 'Alamat_Pemesanan') ?>

    <?= $form->field($model, 'Tanggal_Pengiriman') ?>

    <?php // echo $form->field($model, 'Metode_Pengiriman') ?>

    <?php // echo $form->field($model, 'Total_Harga') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
