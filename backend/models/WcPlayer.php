<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%wc_player}}".
 *
 * @property string $Player_country
 * @property string $Player_number
 * @property string $identity
 * @property string $Player_name
 * @property integer $Player_age
 */
class WcPlayer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%wc_player}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Player_country', 'Player_number', 'identity', 'Player_name', 'Player_age'], 'required'],
            [['Player_age'], 'integer'],
            [['Player_country', 'Player_number', 'identity', 'Player_name'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Player_country' => '球员国家',
            'Player_number' => '球员编号',
            'identity' => '球员身份（前锋、后卫等）',
            'Player_name' => '球员姓名',
            'Player_age' => '球员年龄',
        ];
    }
}
