<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Barang */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="barang-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Id_Produk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Nama_Produk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Unit')->textInput() ?>

    <?= $form->field($model, 'Harga_Produk')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
