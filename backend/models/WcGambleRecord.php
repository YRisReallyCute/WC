<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%wc_gamble_record}}".
 *
 * @property integer $gid
 * @property string $pname
 * @property string $gcountry
 * @property integer $gmatch_id
 *
 * @property WcMemberInfo $pname0
 * @property WcFootballMatch $gmatch
 * @property WcCountry $gcountry0
 */
class WcGambleRecord extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%wc_gamble_record}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pname', 'gcountry', 'gmatch_id'], 'required'],
            [['gmatch_id'], 'integer'],
            [['pname', 'gcountry'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'gid' => '赌球编号',
            'pname' => '会员昵称',
            'gcountry' => '所赌国家',
            'gmatch_id' => '所赌比赛编号',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPname0()
    {
        return $this->hasOne(WcMemberInfo::className(), ['username' => 'pname']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGmatch()
    {
        return $this->hasOne(WcFootballMatch::className(), ['mid' => 'gmatch_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGcountry0()
    {
        return $this->hasOne(WcCountry::className(), ['country_name' => 'gcountry']);
    }
}
