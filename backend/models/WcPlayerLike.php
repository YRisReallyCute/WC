<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%wc_player_like}}".
 *
 * @property string $pname
 * @property string $player_name
 * @property string $player_country
 *
 * @property WcMemberInfo $pname0
 */
class WcPlayerLike extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%wc_player_like}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pname', 'player_name', 'player_country'], 'required'],
            [['pname', 'player_name', 'player_country'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pname' => '会员昵称',
            'player_name' => '喜欢的球员的名字',
            'player_country' => '球员所属国家',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPname0()
    {
        return $this->hasOne(WcMemberInfo::className(), ['username' => 'pname']);
    }
}
