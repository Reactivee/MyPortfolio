<?php
namespace common\models;
use yii\base\Model;

class  MyFIles extends  Model{


    public $files;

    public function  rules()
    {
        return[
            ['files','required']
        ];
    }

}