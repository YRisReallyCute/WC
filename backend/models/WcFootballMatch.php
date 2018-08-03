<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%wc_football_match}}".
 *
 * @property integer $mid
 * @property string $country1
 * @property string $country2
 * @property string $mtime
 * @property string $mtype
 * @property string $mresult
 * @property string $mvideo
 *
 * @property WcCountry $country10
 * @property WcCountry $country20
 * @property WcCountry $mresult0
 * @property WcGambleRecord[] $wcGambleRecords
 */
class WcFootballMatch extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%wc_football_match}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['country1', 'country2', 'mtime', 'mtype', 'mresult', 'mvideo'], 'required'],
            [['mtime'], 'safe'],
            [['country1', 'country2', 'mtype', 'mresult'], 'string', 'max' => 100],
            [['mvideo'], 'string', 'max' => 500]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'mid' => '比赛编号',
            'country1' => '国家1',
            'country2' => '国家2',
            'mtime' => '比赛时间',
            'mtype' => '比赛类型（半决赛、决赛等）',
            'mresult' => '比赛结果（记录胜出国家）',
            'mvideo' => '视频链接',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCountry10()
    {
        return $this->hasOne(WcCountry::className(), ['country_name' => 'country1']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCountry20()
    {
        return $this->hasOne(WcCountry::className(), ['country_name' => 'country2']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMresult0()
    {
        return $this->hasOne(WcCountry::className(), ['country_name' => 'mresult']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWcGambleRecords()
    {
        return $this->hasMany(WcGambleRecord::className(), ['gmatch_id' => 'mid']);
    }
}
