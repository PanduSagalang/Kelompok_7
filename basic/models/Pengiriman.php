<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pengiriman".
 *
 * @property int $Id_Pengiriman
 * @property string|null $Id_Produk
 * @property string|null $Kode_Invoice
 *
 * @property Barang $produk
 * @property Invpeng $kodeInvoice
 */
class Pengiriman extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pengiriman';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_Pengiriman'], 'required'],
            [['Id_Pengiriman'], 'integer'],
            [['Id_Produk', 'Kode_Invoice'], 'string', 'max' => 10],
            [['Id_Pengiriman'], 'unique'],
            [['Id_Produk'], 'exist', 'skipOnError' => true, 'targetClass' => Barang::className(), 'targetAttribute' => ['Id_Produk' => 'Id_Produk']],
            [['Kode_Invoice'], 'exist', 'skipOnError' => true, 'targetClass' => Invpeng::className(), 'targetAttribute' => ['Kode_Invoice' => 'Kode_Invoice']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id_Pengiriman' => 'Id Pengiriman',
            'Id_Produk' => 'Id Produk',
            'Kode_Invoice' => 'Kode Invoice',
        ];
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

    /**
     * Gets query for [[KodeInvoice]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeInvoice()
    {
        return $this->hasOne(Invpeng::className(), ['Kode_Invoice' => 'Kode_Invoice']);
    }
}
