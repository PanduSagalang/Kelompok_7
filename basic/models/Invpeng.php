<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "invpeng".
 *
 * @property string $Kode_Invoice
 * @property int|null $Id_Karyawan
 * @property string|null $Nama_Pembeli
 * @property string|null $Alamat_Pemesanan
 * @property string|null $Tanggal_Pengiriman
 * @property string|null $Metode_Pengiriman
 * @property string|null $Total_Harga
 *
 * @property Karyawan $karyawan
 * @property Pengiriman[] $pengirimen
 */
class Invpeng extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'invpeng';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Kode_Invoice'], 'required'],
            [['Id_Karyawan'], 'integer'],
            [['Kode_Invoice'], 'string', 'max' => 10],
            [['Nama_Pembeli'], 'string', 'max' => 25],
            [['Alamat_Pemesanan'], 'string', 'max' => 50],
            [['Tanggal_Pengiriman'], 'string', 'max' => 20],
            [['Metode_Pengiriman'], 'string', 'max' => 15],
            [['Total_Harga'], 'string', 'max' => 30],
            [['Kode_Invoice'], 'unique'],
            [['Id_Karyawan'], 'exist', 'skipOnError' => true, 'targetClass' => Karyawan::className(), 'targetAttribute' => ['Id_Karyawan' => 'Id_Karyawan']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Kode_Invoice' => 'Kode Invoice',
            'Id_Karyawan' => 'Id Karyawan',
            'Nama_Pembeli' => 'Nama Pembeli',
            'Alamat_Pemesanan' => 'Alamat Pemesanan',
            'Tanggal_Pengiriman' => 'Tanggal Pengiriman',
            'Metode_Pengiriman' => 'Metode Pengiriman',
            'Total_Harga' => 'Total Harga',
        ];
    }

    /**
     * Gets query for [[Karyawan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKaryawan()
    {
        return $this->hasOne(Karyawan::className(), ['Id_Karyawan' => 'Id_Karyawan']);
    }

    /**
     * Gets query for [[Pengirimen]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPengirimen()
    {
        return $this->hasMany(Pengiriman::className(), ['Kode_Invoice' => 'Kode_Invoice']);
    }
}
