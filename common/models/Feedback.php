<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "feedback".
 *
 * @property string $firstname
 * @property string $lastname
 * @property string $email
 * @property string $phone
 * @property string $message
 */
class Feedback extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'feedback';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['firstname', 'lastname', 'email', 'phone', 'message'], 'required'],
            [['message'], 'string'],
            [['firstname', 'lastname', 'email', 'phone'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'email' => 'Email',
            'phone' => 'Phone',
            'message' => 'Message',
        ];
    }
}
