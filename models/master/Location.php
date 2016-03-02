<?php

namespace app\models\master;

use Yii;

/**
 * This is the model class for table "m_location".
 *
 * @property integer $id
 * @property string $province_id
 * @property string $province_name
 * @property string $city_id
 * @property string $city_name
 * @property string $county_id
 * @property string $county_name
 * @property string $town_id
 * @property string $town_name
 * @property string $village_id
 * @property string $village_name
 */
class Location extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'm_location';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['province_id', 'province_name', 'city_id', 'city_name', 'county_id', 'county_name', 'town_id', 'town_name', 'village_id', 'village_name'], 'required'],
            [['province_id', 'city_id', 'county_id', 'town_id', 'village_id'], 'integer'],
            [['province_name', 'city_name', 'county_name', 'town_name', 'village_name'], 'string', 'max' => 64],
            [['village_id'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'province_id' => 'Province ID',
            'province_name' => 'Province Name',
            'city_id' => 'City ID',
            'city_name' => 'City Name',
            'county_id' => 'County ID',
            'county_name' => 'County Name',
            'town_id' => 'Town ID',
            'town_name' => 'Town Name',
            'village_id' => 'Village ID',
            'village_name' => 'Village Name',
        ];
    }
}
