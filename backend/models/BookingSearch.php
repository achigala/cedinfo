<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Booking;

/**
 * BookingSearch represents the model behind the search form about `backend\models\Booking`.
 */
class BookingSearch extends Booking
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['booking_id', 'room_id', 'day_id', 'stu_id', 'booking_count', 'status', 'active'], 'integer'],
            [['booking_date', 'time_start', 'time_end', 'stu_name', 'stu_lastname', 'booking_detail'], 'safe'],
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
        $query = Booking::find();

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
            'booking_id' => $this->booking_id,
            'room_id' => $this->room_id,
            'day_id' => $this->day_id,
            'booking_date' => $this->booking_date,
            'time_start' => $this->time_start,
            'time_end' => $this->time_end,
            'stu_id' => $this->stu_id,
            'booking_count' => $this->booking_count,
            'status' => $this->status,
            'active' => $this->active,
        ]);

        $query->andFilterWhere(['like', 'stu_name', $this->stu_name])
            ->andFilterWhere(['like', 'stu_lastname', $this->stu_lastname])
            ->andFilterWhere(['like', 'booking_detail', $this->booking_detail]);

        return $dataProvider;
    }
}
