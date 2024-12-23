<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\InvpengSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Invpengs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="invpeng-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Invpeng', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Kode_Invoice',
            'Id_Karyawan',
            'Nama_Pembeli',
            'Alamat_Pemesanan',
            'Tanggal_Pengiriman',
            //'Metode_Pengiriman',
            //'Total_Harga',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
