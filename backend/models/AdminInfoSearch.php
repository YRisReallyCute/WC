<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\AdminInfo;

/**
 * AdminInfoSearch represents the model behind the search form about `backend\models\AdminInfo`.
 */
class AdminInfoSearch extends AdminInfo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['aid'], 'integer'],
            [['aname', 'phonenumber', 'atime'], 'safe'],
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
        $query = AdminInfo::find();

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
            'aid' => $this->aid,
            'atime' => $this->atime,
        ]);

        $query->andFilterWhere(['like', 'aname', $this->aname])
            ->andFilterWhere(['like', 'phonenumber', $this->phonenumber]);

        return $dataProvider;
    }
}
