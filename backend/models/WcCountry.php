<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%wc_country}}".
 *
 * @property string $country_name
 * @property integer $frequency
 *
 * @property WcCountryLike[] $wcCountryLikes
 * @property WcMemberInfo[] $cnames
 * @property WcFootballMatch[] $wcFootballMatches
 * @property WcFootballMatch[] $wcFootballMatches0
 * @property WcFootballMatch[] $wcFootballMatches1
 * @property WcGambleRecord[] $wcGambleRecords
 */
class WcCountry extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%wc_country}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['country_name', 'frequency'], 'required'],
            [['frequency'], 'integer'],
            [['country_name'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'country_name' => '国家名称',
            'frequency' => '胜利次数',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWcCountryLikes()
    {
        return $this->hasMany(WcCountryLike::className(), ['lcountry' => 'country_name']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCnames()
    {
        return $this->hasMany(WcMemberInfo::className(), ['username' => 'cname'])->viaTable('{{%wc_country_like}}', ['lcountry' => 'country_name']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWcFootballMatches()
    {
        return $this->hasMany(WcFootballMatch::className(), ['country1' => 'country_name']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWcFootballMatches0()
    {
        return $this->hasMany(WcFootballMatch::className(), ['country2' => 'country_name']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWcFootballMatches1()
    {
        return $this->hasMany(WcFootballMatch::className(), ['mresult' => 'country_name']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWcGambleRecords()
    {
        return $this->hasMany(WcGambleRecord::className(), ['gcountry' => 'country_name']);
    }
}
