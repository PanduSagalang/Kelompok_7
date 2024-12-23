<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Owner;

/**
 * OwnerSearch represents the model behind the search form of `app\models\Owner`.
 */
class OwnerSearch extends Owner
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_Owner', 'Id_Karyawan', 'No_Hp'], 'integer'],
            [['Nama_Owner', 'Jenis_Kelamin', 'Alamat'], 'safe'],
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
        $query = Owner::find();

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
            'Id_Owner' => $this->Id_Owner,
            'Id_Karyawan' => $this->Id_Karyawan,
            'No_Hp' => $this->No_Hp,
        ]);

        $query->andFilterWhere(['like', 'Nama_Owner', $this->Nama_Owner])
            ->andFilterWhere(['like', 'Jenis_Kelamin', $this->Jenis_Kelamin])
            ->andFilterWhere(['like', 'Alamat', $this->Alamat]);

        return $dataProvider;
    }
}
