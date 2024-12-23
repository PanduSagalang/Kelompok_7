<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Karyawan;

/**
 * KaryawanSearch represents the model behind the search form of `app\models\Karyawan`.
 */
class KaryawanSearch extends Karyawan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_Karyawan'], 'integer'],
            [['Nama_Karyawan', 'Jenis_Kelamin', 'Divisi', 'Status', 'Umur'], 'safe'],
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
        $query = Karyawan::find();

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

        $query->andFilterWhere(['like', 'Nama_Karyawan', $this->Nama_Karyawan])
            ->andFilterWhere(['like', 'Jenis_Kelamin', $this->Jenis_Kelamin])
            ->andFilterWhere(['like', 'Divisi', $this->Divisi])
            ->andFilterWhere(['like', 'Status', $this->Status])
            ->andFilterWhere(['like', 'Umur', $this->Umur]);

        return $dataProvider;
    }
}
