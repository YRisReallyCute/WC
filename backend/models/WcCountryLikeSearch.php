<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\WcCountryLike;

/**
 * WcCountryLikeSearch represents the model behind the search form about `backend\models\WcCountryLike`.
 */
class WcCountryLikeSearch extends WcCountryLike
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cname', 'lcountry'], 'safe'],
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
        $query = WcCountryLike::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere(['like', 'cname', $this->cname])
            ->andFilterWhere(['like', 'lcountry', $this->lcountry]);

        return $dataProvider;
    }
}
