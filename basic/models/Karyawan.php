<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "karyawan".
 *
 * @property int $Id_Karyawan
 * @property string|null $Nama_Karyawan
 * @property string|null $Jenis_Kelamin
 * @property string|null $Divisi
 * @property string|null $Status
 * @property string|null $Umur
 *
 * @property Invpeng[] $invpengs
 * @property Owner[] $owners
 */
class Karyawan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'karyawan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_Karyawan'], 'required'],
            [['Id_Karyawan'], 'integer'],
            [['Nama_Karyawan'], 'string', 'max' => 20],
            [['Jenis_Kelamin'], 'string', 'max' => 10],
            [['Divisi', 'Status'], 'string', 'max' => 15],
            [['Umur'], 'string', 'max' => 7],
            [['Id_Karyawan'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id_Karyawan' => 'Id Karyawan',
            'Nama_Karyawan' => 'Nama Karyawan',
            'Jenis_Kelamin' => 'Jenis Kelamin',
            'Divisi' => 'Divisi',
            'Status' => 'Status',
            'Umur' => 'Umur',
        ];
    }

    /**
     * Gets query for [[Invpengs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInvpengs()
    {
        return $this->hasMany(Invpeng::className(), ['Id_Karyawan' => 'Id_Karyawan']);
    }

    /**
     * Gets query for [[Owners]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOwners()
    {
        return $this->hasMany(Owner::className(), ['Id_Karyawan' => 'Id_Karyawan']);
    }
}
