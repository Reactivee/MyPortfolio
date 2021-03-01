<?php
/**
 * Created by PhpStorm.
 * User: Abrorxon Obidov
 * Date: 2021
 * Time: 14:49
 */

namespace common\components;

use Yii;
use yii\db\ActiveRecord;

/**
 * @property string $creatorIdAttribute
 * @property string $modifierIdAttribute
 * @property boolean $timestamp
 */
class TimestampBehavior extends \yii\behaviors\TimestampBehavior
{
	public $creatorIdAttribute;
	public $modifierIdAttribute;
	public $timestamp;

	public function events()
	{
		return [
			ActiveRecord::EVENT_BEFORE_VALIDATE => 'beforeValidate',
		];
	}

	public function beforeValidate($event)
	{
		/** @var ActiveRecord $owner */
		$owner = $this->owner;
		if (strstr($owner::className(), 'Search'))
			return;

		$user = Yii::$app->user;

		if ($owner->isNewRecord && $owner->hasAttribute($this->createdAtAttribute)){
            $owner[$this->createdAtAttribute] = $this->getValue($event);
            $this->setUserId($this->creatorIdAttribute, $user);
		}

		if ($owner->hasAttribute($this->updatedAtAttribute)) {
            $owner[$this->updatedAtAttribute] = $this->getValue($event);
            $this->setUserId($this->modifierIdAttribute, $user);
        }
	}

	protected function getValue($event)
	{
		$value = parent::getValue($event);

		if ($this->timestamp !== null)
			$value = date('Y-m-d H:i:s', $value);

		return $value;
	}

	/**
     * @param string $attribute
     * @param \common\components\user\WebUser $user
     */
	protected function setUserId($attribute, $user)
    {
        /** @var ActiveRecord $owner */
        $owner = $this->owner;
        if ($owner->hasAttribute($attribute) && !$user->isGuest)
            $owner[$attribute] = $user->id;
    }
}