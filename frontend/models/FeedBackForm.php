<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 15-Mar-21
 * Time: 20:52
 */

namespace frontend\models;


use common\models\Feedback;

class FeedBackForm extends Feedback
{

    public $captcha;
    public $fileHelper;

    public function rules()
    {
        return [
            [['first_name', 'last_name', 'email', 'message', 'captcha'], 'required'],
            [['message'], 'string'],
            ['captcha', 'captcha'],
            ['email','email'],
            [['first_name', 'last_name', 'phone'], 'string', 'max' => 255],
            [
                'fileHelper', 'file',
                'extensions' => 'docx,jpg,png',
                'minSize' => 102400, // 100KB
                'maxSize' => 10485760, //10MB,
                'tooBig' => 'Fayl juda katta. Maksimum: {limit} bayt bulishi mumkin',
                'wrongExtension' => '{extensions} fayllar ruxsat berilgan xolos'
            ]
        ];
    }
}