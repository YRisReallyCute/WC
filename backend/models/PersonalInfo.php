<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%personal_info}}".
 *
 * @property integer $sid
 * @property string $sname
 * @property string $smajor
 */
class PersonalInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%personal_info}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sid', 'sname', 'smajor'], 'required'],
            [['sid'], 'integer'],
            [['sname', 'smajor'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sid' => '成员学号',
            'sname' => '成员姓名',
            'smajor' => '成员专业',
        ];
    }
}
