<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Invpeng */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="invpeng-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Kode_Invoice')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Id_Karyawan')->textInput() ?>

    <?= $form->field($model, 'Nama_Pembeli')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Alamat_Pemesanan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Tanggal_Pengiriman')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Metode_Pengiriman')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Total_Harga')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
