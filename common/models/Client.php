<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "client".
 *
 * @property int $id
 * @property string $name
 * @property string $company_name
 * @property string $phone
 * @property string $description
 */
class Client extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'client';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'company_name', 'phone', 'description'], 'required'],
            [['description'], 'string'],
            [['name', 'company_name', 'phone'], 'string', 'max' => 255],
            [['company_name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'company_name' => 'Company Name',
            'phone' => 'Phone',
            'description' => 'Description',
        ];
    }
}
