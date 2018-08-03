<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%wc_referee}}".
 *
 * @property string $rname
 * @property string $rcountry
 */
class WcReferee extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%wc_referee}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rname', 'rcountry'], 'required'],
            [['rname', 'rcountry'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'rname' => '裁判姓名',
            'rcountry' => '裁判所属国家',
        ];
    }
}
