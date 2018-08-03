<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\WcPlayer;

/**
 * WcPlayerSearch represents the model behind the search form about `backend\models\WcPlayer`.
 */
class WcPlayerSearch extends WcPlayer
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Player_country', 'Player_number', 'identity', 'Player_name'], 'safe'],
            [['Player_age'], 'integer'],
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
        $query = WcPlayer::find();

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
            'Player_age' => $this->Player_age,
        ]);

        $query->andFilterWhere(['like', 'Player_country', $this->Player_country])
            ->andFilterWhere(['like', 'Player_number', $this->Player_number])
            ->andFilterWhere(['like', 'identity', $this->identity])
            ->andFilterWhere(['like', 'Player_name', $this->Player_name]);

        return $dataProvider;
    }
}
