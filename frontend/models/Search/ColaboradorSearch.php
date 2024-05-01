<?php

namespace frontend\models\Search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Colaborador;

/**
 * ColaboradorSearch represents the model behind the search form of `frontend\models\Colaborador`.
 */
class ColaboradorSearch extends Colaborador
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_Colaborador'], 'integer'],
            [['Nombre', 'Apellido', 'Fecha_Nacimiento', 'Celular', 'Departamento', 'Ciudad', 'Direccion', 'Correo', 'Rol'], 'safe'],
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
        $query = Colaborador::find();

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
            'ID_Colaborador' => $this->ID_Colaborador,
            'Fecha_Nacimiento' => $this->Fecha_Nacimiento,
        ]);

        $query->andFilterWhere(['like', 'Nombre', $this->Nombre])
            ->andFilterWhere(['like', 'Apellido', $this->Apellido])
            ->andFilterWhere(['like', 'Celular', $this->Celular])
            ->andFilterWhere(['like', 'Departamento', $this->Departamento])
            ->andFilterWhere(['like', 'Ciudad', $this->Ciudad])
            ->andFilterWhere(['like', 'Direccion', $this->Direccion])
            ->andFilterWhere(['like', 'Correo', $this->Correo])
            ->andFilterWhere(['like', 'Rol', $this->Rol]);

        return $dataProvider;
    }
}
