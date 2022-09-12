<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Horarios;

/**
 * HorariosSearch represents the model behind the search form of `app\models\Horarios`.
 */
class HorariosSearch extends Horarios
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_HORARIOS'], 'integer'],
            [['NOMBRE_HORARIO', 'HORA_INICIO', 'HORA_TERMINO'], 'safe'],
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
        $query = Horarios::find();

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
            'ID_HORARIOS' => $this->ID_HORARIOS,
            'HORA_INICIO' => $this->HORA_INICIO,
            'HORA_TERMINO' => $this->HORA_TERMINO,
        ]);

        $query->andFilterWhere(['like', 'NOMBRE_HORARIO', $this->NOMBRE_HORARIO]);

        return $dataProvider;
    }
}
