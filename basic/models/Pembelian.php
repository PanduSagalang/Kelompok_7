<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pembelian".
 *
 * @property int $Id_Pembelian
 * @property int|null $Id_Pelanggan
 * @property string|null $Id_Produk
 *
 * @property Pelanggan $pelanggan
 * @property Barang $produk
 */
class Pembelian extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pembelian';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_Pembelian'], 'required'],
            [['Id_Pembelian', 'Id_Pelanggan'], 'integer'],
            [['Id_Produk'], 'string', 'max' => 10],
            [['Id_Pembelian'], 'unique'],
            [['Id_Pelanggan'], 'exist', 'skipOnError' => true, 'targetClass' => Pelanggan::className(), 'targetAttribute' => ['Id_Pelanggan' => 'Id_Pelanggan']],
            [['Id_Produk'], 'exist', 'skipOnError' => true, 'targetClass' => Barang::className(), 'targetAttribute' => ['Id_Produk' => 'Id_Produk']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id_Pembelian' => 'Id Pembelian',
            'Id_Pelanggan' => 'Id Pelanggan',
            'Id_Produk' => 'Id Produk',
        ];
    }

    /**
     * Gets query for [[Pelanggan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPelanggan()
    {
        return $this->hasOne(Pelanggan::className(), ['Id_Pelanggan' => 'Id_Pelanggan']);
    }

    /**
     * Gets query for [[Produk]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProduk()
    {
        return $this->hasOne(Barang::className(), ['Id_Produk' => 'Id_Produk']);
    }
}
