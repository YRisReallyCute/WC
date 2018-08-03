<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\WcFootballMatch;

/**
 * WcFootballMatchSearch represents the model behind the search form about `backend\models\WcFootballMatch`.
 */
class WcFootballMatchSearch extends WcFootballMatch
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mid'], 'integer'],
            [['country1', 'country2', 'mtime', 'mtype', 'mresult', 'mvideo'], 'safe'],
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
        $query = WcFootballMatch::find();

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
            'mid' => $this->mid,
            'mtime' => $this->mtime,
        ]);

        $query->andFilterWhere(['like', 'country1', $this->country1])
            ->andFilterWhere(['like', 'country2', $this->country2])
            ->andFilterWhere(['like', 'mtype', $this->mtype])
            ->andFilterWhere(['like', 'mresult', $this->mresult])
            ->andFilterWhere(['like', 'mvideo', $this->mvideo]);

        return $dataProvider;
    }
}
