<?php

namespace frontend\models\Search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Procedimientos;

/**
 * ProcedimientosSearch represents the model behind the search form of `frontend\models\Procedimientos`.
 */
class ProcedimientosSearch extends Procedimientos
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_Procedimiento', 'IDCategoria_Procedimiento'], 'integer'],
            [['Nombre_Procedimiento', 'Descripcion'], 'safe'],
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
        $query = Procedimientos::find();

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
            'ID_Procedimiento' => $this->ID_Procedimiento,
            'IDCategoria_Procedimiento' => $this->IDCategoria_Procedimiento,
        ]);

        $query->andFilterWhere(['like', 'Nombre_Procedimiento', $this->Nombre_Procedimiento])
            ->andFilterWhere(['like', 'Descripcion', $this->Descripcion]);

        return $dataProvider;
    }
}
