<?php

namespace common\models;

use common\helpers\DebugHelper;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;
use yii\web\UploadedFile;

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
 *
 * @property string|null $imageHelper
 *
 */
class Project extends ActiveRecord
{

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::class,
                'createdAtAttribute' => 'created_at',
                'updatedAtAttribute' => false,
                'value' => new Expression('CAST(NOW() as DATE)'),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_VALIDATE => ['created_at'],
                ]
            ],
        ];
    }

    public $helpImage;

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
            [['title', 'description', 'image', 'created_at',
                'user_id'], 'required'],
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

    public function uploadImage()
    {
        $image = UploadedFile::getInstance($this, 'helpImage');
        //DebugHelper::printSingleObject($image, 1);
        if ($image) {
            if (!$this->isNewRecord) {
                if (!empty($this->image)) {
                    $oldImage = self::uploadImagePath() . $this->image;
                    if (file_exists($oldImage)) {
                        unlink($oldImage);
                    }
                }
            }
            $imageName = self::createGuid() . '_' . '.' . $image->getExtension();
            $this->image = $imageName;
            $imagePath = self::uploadImagePath() . $imageName;
            $image->saveAs($imagePath);
        }
    }

    public static function uploadImagePath()
    {
        return Yii::getAlias('@frontend') . '/web/uploads/';
    }

    public static function createGuid()
    {
        $guid = '';
        $uid = uniqid("", true);
        $data = $_SERVER['REQUEST_TIME'];
        $data .= $_SERVER['HTTP_USER_AGENT'];
        $hash = hash('ripemd128', $uid . $guid . md5($data));
        $guid = substr($hash, 0, 8) .
            '-' . substr($hash, 8, 4) .
            '-' . substr($hash, 12, 4) .
            '-' . substr($hash, 16, 4) .
            '-' . substr($hash, 20, 12);
        return $guid;
    }
}
