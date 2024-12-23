<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Invpeng;

/**
 * InvpengSearch represents the model behind the search form of `app\models\Invpeng`.
 */
class InvpengSearch extends Invpeng
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Kode_Invoice', 'Nama_Pembeli', 'Alamat_Pemesanan', 'Tanggal_Pengiriman', 'Metode_Pengiriman', 'Total_Harga'], 'safe'],
            [['Id_Karyawan'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Invpeng::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'Id_Karyawan' => $this->Id_Karyawan,
        ]);

        $query->andFilterWhere(['like', 'Kode_Invoice', $this->Kode_Invoice])
            ->andFilterWhere(['like', 'Nama_Pembeli', $this->Nama_Pembeli])
            ->andFilterWhere(['like', 'Alamat_Pemesanan', $this->Alamat_Pemesanan])
            ->andFilterWhere(['like', 'Tanggal_Pengiriman', $this->Tanggal_Pengiriman])
            ->andFilterWhere(['like', 'Metode_Pengiriman', $this->Metode_Pengiriman])
            ->andFilterWhere(['like', 'Total_Harga', $this->Total_Harga]);

        return $dataProvider;
    }
}
