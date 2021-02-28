<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "project".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string|null $link
 * @property string $image
 * @property string $created_at
 * @property string|null $date
 * @property int $user_id
 */
class Project extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'project';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'description', 'image', 'created_at', 'user_id'], 'required'],
            [['created_at', 'date'], 'safe'],
            [['user_id'], 'integer'],
            [['title', 'description', 'link', 'image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'link' => 'Link',
            'image' => 'Image',
            'created_at' => 'Created At',
            'date' => 'Date',
            'user_id' => 'User ID',
        ];
    }
}
