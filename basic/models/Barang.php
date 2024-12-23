<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "barang".
 *
 * @property string $Id_Produk
 * @property string|null $Nama_Produk
 * @property int|null $Unit
 * @property string|null $Harga_Produk
 *
 * @property Pembelian[] $pembelians
 * @property Pengiriman[] $pengirimen
 */
class Barang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'barang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_Produk'], 'required'],
            [['Unit'], 'integer'],
            [['Id_Produk'], 'string', 'max' => 10],
            [['Nama_Produk', 'Harga_Produk'], 'string', 'max' => 30],
            [['Id_Produk'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id_Produk' => 'Id Produk',
            'Nama_Produk' => 'Nama Produk',
            'Unit' => 'Unit',
            'Harga_Produk' => 'Harga Produk',
        ];
    }

    /**
     * Gets query for [[Pembelians]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPembelians()
    {
        return $this->hasMany(Pembelian::className(), ['Id_Produk' => 'Id_Produk']);
    }

    /**
     * Gets query for [[Pengirimen]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPengirimen()
    {
        return $this->hasMany(Pengiriman::className(), ['Id_Produk' => 'Id_Produk']);
    }
}
