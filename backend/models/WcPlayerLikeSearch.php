<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\WcPlayerLike;

/**
 * WcPlayerLikeSearch represents the model behind the search form about `backend\models\WcPlayerLike`.
 */
class WcPlayerLikeSearch extends WcPlayerLike
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pname', 'player_name', 'player_country'], 'safe'],
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
        $query = WcPlayerLike::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere(['like', 'pname', $this->pname])
            ->andFilterWhere(['like', 'player_name', $this->player_name])
            ->andFilterWhere(['like', 'player_country', $this->player_country]);

        return $dataProvider;
    }
}
