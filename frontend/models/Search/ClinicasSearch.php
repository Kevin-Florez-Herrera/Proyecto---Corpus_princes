<?php

namespace frontend\models\Search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Clinicas;

/**
 * ClinicasSearch represents the model behind the search form of `frontend\models\Clinicas`.
 */
class ClinicasSearch extends Clinicas
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_Clinica'], 'integer'],
            [['Nombre_Clinica', 'Direccion', 'Barrio'], 'safe'],
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
        $query = Clinicas::find();

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
            'ID_Clinica' => $this->ID_Clinica,
        ]);

        $query->andFilterWhere(['like', 'Nombre_Clinica', $this->Nombre_Clinica])
            ->andFilterWhere(['like', 'Direccion', $this->Direccion])
            ->andFilterWhere(['like', 'Barrio', $this->Barrio]);

        return $dataProvider;
    }
}
