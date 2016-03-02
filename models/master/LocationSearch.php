<?php

namespace app\models\master;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\master\Location;

/**
 * LocationSearch represents the model behind the search form about `app\models\master\Location`.
 */
class LocationSearch extends Location
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'province_id', 'city_id', 'county_id', 'town_id', 'village_id'], 'integer'],
            [['province_name', 'city_name', 'county_name', 'town_name', 'village_name'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Location::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'province_id' => $this->province_id,
            'city_id' => $this->city_id,
            'county_id' => $this->county_id,
            'town_id' => $this->town_id,
            'village_id' => $this->village_id,
        ]);

        $query->andFilterWhere(['like', 'province_name', $this->province_name])
            ->andFilterWhere(['like', 'city_name', $this->city_name])
            ->andFilterWhere(['like', 'county_name', $this->county_name])
            ->andFilterWhere(['like', 'town_name', $this->town_name])
            ->andFilterWhere(['like', 'village_name', $this->village_name]);

        return $dataProvider;
    }
}
