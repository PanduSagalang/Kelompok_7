<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Invpeng */

$this->title = $model->Kode_Invoice;
$this->params['breadcrumbs'][] = ['label' => 'Invpengs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="invpeng-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->Kode_Invoice], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->Kode_Invoice], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Kode_Invoice',
            'Id_Karyawan',
            'Nama_Pembeli',
            'Alamat_Pemesanan',
            'Tanggal_Pengiriman',
            'Metode_Pengiriman',
            'Total_Harga',
        ],
    ]) ?>

</div>
