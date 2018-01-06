<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Teacher;

/**
 * TeacherSearch represents the model behind the search form about `frontend\models\Teacher`.
 */
class TeacherSearch extends Teacher
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['teacher_id', 'prefix_id', 'position_id', 'room_id', 'active'], 'integer'],
            [['teacher_name', 'teacher_lastname', 'photo', 'teacher_email', 'teacher_line', 'teacher_tel', 'teacher_education'], 'safe'],
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
        $query = Teacher::find();

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
            'teacher_id' => $this->teacher_id,
            'prefix_id' => $this->prefix_id,
            'position_id' => $this->position_id,
            'room_id' => $this->room_id,
            'active' => $this->active,
        ]);

        $query->andFilterWhere(['like', 'teacher_name', $this->teacher_name])
            ->andFilterWhere(['like', 'teacher_lastname', $this->teacher_lastname])
            ->andFilterWhere(['like', 'photo', $this->photo])
            ->andFilterWhere(['like', 'teacher_email', $this->teacher_email])
            ->andFilterWhere(['like', 'teacher_line', $this->teacher_line])
            ->andFilterWhere(['like', 'teacher_tel', $this->teacher_tel])
            ->andFilterWhere(['like', 'teacher_education', $this->teacher_education]);

        return $dataProvider;
    }
}
