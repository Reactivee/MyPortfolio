<?php

namespace common\models;

use common\helpers\DebugHelper;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Project;

/**
 * ProjectSearch represents the model behind the search form of `common\models\Project`.
 */
class ProjectSearch extends Project
{
    /**
     * @var mixed|null
     */


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'category_id'], 'integer'],
            [['title', 'description', 'link', 'image', 'created_at', 'date', 'update_at', 'user_name'], 'safe'],
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

        $query = Project::find()
            ->alias('p')
            ->innerJoin(['u' => User::tableName()], 'p.user_id = u.id');

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
            'p.id' => $this->id,
            'p.created_at' => $this->created_at,
            'p.update_at' => $this->update_at,
            'p.date' => $this->date,
            'p.user_id' => $this->user_id,
            'p.category_id' => $this->category_id,
        ]);

        $query
            ->andFilterWhere(['like', 'p.title', $this->title])
            ->andFilterWhere(['like', 'p.description', $this->description])
            ->andFilterWhere(['like', 'u.username', $this->user_name])
            ->andFilterWhere(['like', 'p.link', $this->link])
            ->andFilterWhere(['like', 'p.image', $this->image]);

        return $dataProvider;
    }
}
