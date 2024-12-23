<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pelanggan".
 *
 * @property int $Id_Pelanggan
 * @property string|null $Nama_Pelanggan
 * @property string|null $Alamat
 * @property int|null $No_Telepon
 *
 * @property Pembelian[] $pembelians
 */
class Pelanggan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pelanggan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_Pelanggan'], 'required'],
            [['Id_Pelanggan', 'No_Telepon'], 'integer'],
            [['Nama_Pelanggan'], 'string', 'max' => 30],
            [['Alamat'], 'string', 'max' => 50],
            [['Id_Pelanggan'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id_Pelanggan' => 'Id Pelanggan',
            'Nama_Pelanggan' => 'Nama Pelanggan',
            'Alamat' => 'Alamat',
            'No_Telepon' => 'No Telepon',
        ];
    }

    /**
     * Gets query for [[Pembelians]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPembelians()
    {
        return $this->hasMany(Pembelian::className(), ['Id_Pelanggan' => 'Id_Pelanggan']);
    }
}
