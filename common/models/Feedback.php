<?php

namespace common\models;


/**
 * This is the model class for table "feedback".
 *
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $phone
 * @property string $message
 * @property string $files

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
            [['first_name', 'last_name', 'email', 'message'], 'required'],
            [['message'], 'string'],
            [['first_name', 'last_name', 'email', 'phone', 'files'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'first_name' => 'First name',
            'last_name' => 'Last name',
            'email' => 'Email',
            'phone' => 'Phone',
            'message' => 'Message',
            'captcha' => 'Kod',
            'files'=>'File yuklash'
        ];
    }
}
