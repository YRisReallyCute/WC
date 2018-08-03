<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\WcGambleRecord;

/**
 * WcGambleRecordSearch represents the model behind the search form about `backend\models\WcGambleRecord`.
 */
class WcGambleRecordSearch extends WcGambleRecord
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['gid', 'gmatch_id'], 'integer'],
            [['pname', 'gcountry'], 'safe'],
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
        $query = WcGambleRecord::find();

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
            'gid' => $this->gid,
            'gmatch_id' => $this->gmatch_id,
        ]);

        $query->andFilterWhere(['like', 'pname', $this->pname])
            ->andFilterWhere(['like', 'gcountry', $this->gcountry]);

        return $dataProvider;
    }
}
