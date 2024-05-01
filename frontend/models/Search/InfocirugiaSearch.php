<?php

namespace frontend\models\Search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Infocirugia;

/**
 * InfocirugiaSearch represents the model behind the search form of `frontend\models\Infocirugia`.
 */
class InfocirugiaSearch extends Infocirugia
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_Cirugia', 'ID_Clinica', 'ID_Paciente', 'ID_Colaborador', 'ID_Procedimiento'], 'integer'],
            [['Fecha_inicio', 'Fecha_fin'], 'safe'],
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
        $query = Infocirugia::find();

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
            'ID_Cirugia' => $this->ID_Cirugia,
            'Fecha_inicio' => $this->Fecha_inicio,
            'Fecha_fin' => $this->Fecha_fin,
            'ID_Clinica' => $this->ID_Clinica,
            'ID_Paciente' => $this->ID_Paciente,
            'ID_Colaborador' => $this->ID_Colaborador,
            'ID_Procedimiento' => $this->ID_Procedimiento,
        ]);

        return $dataProvider;
    }
}
