<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "owner".
 *
 * @property int $Id_Owner
 * @property int|null $Id_Karyawan
 * @property string|null $Nama_Owner
 * @property string|null $Jenis_Kelamin
 * @property string|null $Alamat
 * @property int|null $No_Hp
 *
 * @property Karyawan $karyawan
 */
class Owner extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'owner';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_Owner'], 'required'],
            [['Id_Owner', 'Id_Karyawan', 'No_Hp'], 'integer'],
            [['Nama_Owner'], 'string', 'max' => 30],
            [['Jenis_Kelamin'], 'string', 'max' => 10],
            [['Alamat'], 'string', 'max' => 50],
            [['Id_Owner'], 'unique'],
            [['Id_Karyawan'], 'exist', 'skipOnError' => true, 'targetClass' => Karyawan::className(), 'targetAttribute' => ['Id_Karyawan' => 'Id_Karyawan']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id_Owner' => 'Id Owner',
            'Id_Karyawan' => 'Id Karyawan',
            'Nama_Owner' => 'Nama Owner',
            'Jenis_Kelamin' => 'Jenis Kelamin',
            'Alamat' => 'Alamat',
            'No_Hp' => 'No Hp',
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
}
