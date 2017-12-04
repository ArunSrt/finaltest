<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "details".
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property integer $mobile
 * @property string $gender
 * @property integer $age
 * @property integer $status
 * @property string $insdt
 * @property string $moddt
 */
class Details extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'details';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'name', 'email', 'mobile', 'gender', 'age'], 'required'],
            [['id', 'mobile', 'age', 'status'], 'integer'],
            [['insdt', 'moddt'], 'safe'],
            [['name'], 'string', 'max' => 30],
            [['email'], 'string', 'max' => 20],
            [['gender'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            //'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'mobile' => 'Mobile',
            'gender' => 'Gender',
            'age' => 'Age',
            //'status' => 'Status',
            //'insdt' => 'Insdt',
            //'moddt' => 'Moddt',
        ];
    }
}
