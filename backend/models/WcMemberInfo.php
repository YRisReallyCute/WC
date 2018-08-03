<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%wc_member_info}}".
 *
 * @property string $username
 * @property string $password
 * @property integer $grade
 * @property boolean $memsex
 * @property integer $memage
 * @property string $memphonenumber
 *
 * @property WcCountryLike[] $wcCountryLikes
 * @property WcCountry[] $lcountries
 * @property WcGambleRecord[] $wcGambleRecords
 * @property WcPlayerLike[] $wcPlayerLikes
 */
class WcMemberInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%wc_member_info}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password', 'grade', 'memage', 'memphonenumber'], 'required'],
            [['grade', 'memage'], 'integer'],
            [['memsex'], 'boolean'],
            [['username', 'password', 'memphonenumber'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'username' => '用户昵称',
            'password' => '用户密码',
            'grade' => '等级',
            'memsex' => '性别(0为女，1为男)',
            'memage' => '年龄',
            'memphonenumber' => '电话联系方式',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWcCountryLikes()
    {
        return $this->hasMany(WcCountryLike::className(), ['cname' => 'username']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLcountries()
    {
        return $this->hasMany(WcCountry::className(), ['country_name' => 'lcountry'])->viaTable('{{%wc_country_like}}', ['cname' => 'username']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWcGambleRecords()
    {
        return $this->hasMany(WcGambleRecord::className(), ['pname' => 'username']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWcPlayerLikes()
    {
        return $this->hasMany(WcPlayerLike::className(), ['pname' => 'username']);
    }
}
