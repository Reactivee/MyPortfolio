<?php

namespace common\models;

use common\helpers\DebugHelper;
use Yii;
use common\components\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;
use yii\web\UploadedFile;

/**
 * This is the model class for table "project".
 *
 * @property int $id
 * @property string $title_uz
 * @property string $title_ru
 * @property string $title_en
 * @property string $description_uz
 * @property string $description_ru
 * @property string $description_en
 * @property string|null $link
 * @property string $image
 * @property string $created_at
 * @property string|null $date
 * @property int $user_id
 * @property int $category_id
 *
 * @property string|null $imageHelper
 * @property User $user
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
                'updatedAtAttribute' => 'update_at',
                'creatorIdAttribute' => 'user_id',
                'modifierIdAttribute' => false,
                'timestamp' => true
            ],
        ];
    }

    public $user_name;
    public $imagePath;
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
            [['title_uz', 'category_id', 'user_id'], 'required'],
            [['created_at', 'date', 'update_at'], 'safe'],
            [['user_id', 'category_id'], 'integer'],
            [['description_uz', 'description_ru'/*, 'description_en'*/], 'string'],
            [['title_uz', 'title_ru', 'link', 'image', 'imagePath'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title_uz' => Yii::t('main', 'Nomi') . 'UZ',
            'title_ru' => Yii::t('main', 'Nomi') . 'RU',
            //'title_en' => Yii::t('main', 'Nomi') . 'EN',
            'description_uz' => Yii::t('main', 'Izoh') . 'UZ',
            'description_ru' => Yii::t('main', 'Izoh') . 'RU',
            //'description_en' => Yii::t('main', 'Izoh') . 'EN',
            'link' => 'Link',
            'image' => 'Image',
            'created_at' => 'Created At',
            'update_at' => 'Update At',
            'date' => 'Date',
            'user_id' => 'User ID',
            'category_id' => 'Category id',
        ];
    }

    public function uploadImage()
    {
        $image = UploadedFile::getInstance($this, 'helpImage');
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
            $this->imagePath = self::uploadImagePath() . $imageName;
            $image->saveAs($this->imagePath);
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

    public function getUser()
    {
        return $this->hasOne(User::class, ['id' => 'user_id']);
    }

    public function getCategory()
    {
        return $this->hasOne(Category::class, ['id' => 'category_id']);
    }

}