<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SesionesProductos;

/**
 * SesionesProductosSearch represents the model behind the search form of `app\models\SesionesProductos`.
 */
class SesionesProductosSearch extends SesionesProductos
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'nu_sesion', 'nu_producto', 'cantidad'], 'integer'],
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
        $query = SesionesProductos::find();

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
            'id' => $this->id,
            'nu_sesion' => $this->nu_sesion,
            'nu_producto' => $this->nu_producto,
            'cantidad' => $this->cantidad,
        ]);

        return $dataProvider;
    }
}
