<?php

namespace frontend\models\Search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Pacientes;

/**
 * PacientesSearch represents the model behind the search form of `frontend\models\Pacientes`.
 */
class PacientesSearch extends Pacientes
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_Paciente'], 'integer'],
            [['Documento', 'Nombre', 'Apellido', 'Fecha_Nacimiento', 'Celular', 'Departamento', 'Ciudad', 'Direccion'], 'safe'],
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
        $query = Pacientes::find();

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
            'ID_Paciente' => $this->ID_Paciente,
            'Fecha_Nacimiento' => $this->Fecha_Nacimiento,
        ]);

        $query->andFilterWhere(['like', 'Documento', $this->Documento])
            ->andFilterWhere(['like', 'Nombre', $this->Nombre])
            ->andFilterWhere(['like', 'Apellido', $this->Apellido])
            ->andFilterWhere(['like', 'Celular', $this->Celular])
            ->andFilterWhere(['like', 'Departamento', $this->Departamento])
            ->andFilterWhere(['like', 'Ciudad', $this->Ciudad])
            ->andFilterWhere(['like', 'Direccion', $this->Direccion]);

        return $dataProvider;
    }
}
