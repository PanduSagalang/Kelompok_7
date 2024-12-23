<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pengiriman */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pengiriman-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Id_Pengiriman')->textInput() ?>

    <?= $form->field($model, 'Id_Produk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Kode_Invoice')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
