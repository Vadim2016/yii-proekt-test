<?php
namespace backend\models;

use common\models\User as _User;
use yii\helpers\ArrayHelper;

class User extends _User 
{
	public $createdAt;
	public $updatedAt;

	public function rules()
	{
		$parent = parent::rules();

		$parent = ArrayHelper::merge($parent, [
			['username', 'string', 'max' => 255],
            ['email', 'email'],
		]);

		return $parent;
	}
}