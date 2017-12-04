<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%reg}}".
 *
 * @property integer $reg_id
 * @property string $name
 * @property string $email
 */
class reg extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%reg}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            [['name', 'email'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'reg_id' => 'Reg ID',
            'name' => 'Name',
            'email' => 'Email',
        ];
    }
}
