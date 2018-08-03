<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\PersonalInfo;

/**
 * PersonalInfoSearch represents the model behind the search form about `backend\models\PersonalInfo`.
 */
class PersonalInfoSearch extends PersonalInfo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sid'], 'integer'],
            [['sname', 'smajor'], 'safe'],
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
        $query = PersonalInfo::find();

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
            'sid' => $this->sid,
        ]);

        $query->andFilterWhere(['like', 'sname', $this->sname])
            ->andFilterWhere(['like', 'smajor', $this->smajor]);

        return $dataProvider;
    }
}
