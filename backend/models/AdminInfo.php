<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%admin_info}}".
 *
 * @property integer $aid
 * @property string $aname
 * @property string $phonenumber
 * @property string $atime
 */
class AdminInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%admin_info}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['aname', 'phonenumber', 'atime'], 'required'],
            [['atime'], 'safe'],
            [['aname'], 'string', 'max' => 100],
            [['phonenumber'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'aid' => '管理员ID',
            'aname' => '管理员姓名',
            'phonenumber' => '管理员电话',
            'atime' => '成为管理员的时间',
        ];
    }
}
