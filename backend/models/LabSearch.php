<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Lab;


/**
 * LabSearch represents the model behind the search form about `backend\models\Lab`.
 */
class LabSearch extends Lab
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['lab_id', 'teacher_id', 'day_id', 'room_id', 'active'], 'integer'],
            [['subject_id', 'time_start', 'time_end'], 'safe'],
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
        $query = Lab::find();

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
            'lab_id' => $this->lab_id,
            'teacher_id' => $this->teacher_id,
            'day_id' => $this->day_id,
            'time_start' => $this->time_start,
            'time_end' => $this->time_end,
            'room_id' => $this->room_id,
            'active' => $this->active,
        ]);

        $query->andFilterWhere(['like', 'subject_id', $this->subject_id]);

        return $dataProvider;
    }
}
