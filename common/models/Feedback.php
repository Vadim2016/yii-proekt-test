<?php
namespace common\models;

use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;
use common\models\User;

class Feedback extends ActiveRecord
{
	public function behaviors()
	{
	    return [
	        // TimestampBehavior::className(),
	        [
	            // 'class' => 'yii\behaviors\TimestampBehavior',
	            'class' => TimestampBehavior::className(),
	            'updatedAtAttribute' => null,
        	],
	    ];
	}

	public static function tableName()
	{
		return '{{%feedback}}';
	}

/*	
	$myTimestamp = new TimestampBehavior();
	$myTimestamp->updatedAtAttribute = null;
	
	$myTimestamp = Yii::createObject('', [
		'updatedAtAttribute' => null
	]);
*/

	// public $date;

	public function rules() {
		return [
			[['text', 'rating'], 'required', 'message' => 'Поле обязательно для заполнения'],
			[['text'], 'string', 'min' => 10, 'tooShort' => 'Текст должен быть более 10 символов'],
            [['rating'],'integer','message' => 'Поле должно быть числом'],                                                   
	        [['article_id'],'integer'],
            ['article_id', 'exist', 'targetAttribute' => 'id','targetClass'=> Article::className() ],

		];
	}
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}