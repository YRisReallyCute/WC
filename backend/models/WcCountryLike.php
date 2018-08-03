<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%wc_country_like}}".
 *
 * @property string $cname
 * @property string $lcountry
 *
 * @property WcMemberInfo $cname0
 * @property WcCountry $lcountry0
 */
class WcCountryLike extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%wc_country_like}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cname', 'lcountry'], 'required'],
            [['cname', 'lcountry'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cname' => '用户昵称',
            'lcountry' => '所喜欢的国家',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCname0()
    {
        return $this->hasOne(WcMemberInfo::className(), ['username' => 'cname']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLcountry0()
    {
        return $this->hasOne(WcCountry::className(), ['country_name' => 'lcountry']);
    }
}
