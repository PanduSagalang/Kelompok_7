<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\OwnerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="owner-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'Id_Owner') ?>

    <?= $form->field($model, 'Id_Karyawan') ?>

    <?= $form->field($model, 'Nama_Owner') ?>

    <?= $form->field($model, 'Jenis_Kelamin') ?>

    <?= $form->field($model, 'Alamat') ?>

    <?php // echo $form->field($model, 'No_Hp') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
