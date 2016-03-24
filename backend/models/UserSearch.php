<?php
namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
// use common\models\User;

/**
 * UserSearch represents the model behind the search form about `common\models\User`.
 */
class UserSearch extends User
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'status', 'created_at', 'updated_at'], 'integer'],
            [['username', 'auth_key', 'password_hash', 'password_reset_token', 'email'], 'safe'],
            ['createdAt', 'date', 'format' => 'php:Y.m.d', 'timestampAttribute' => 'created_at'],
            ['updatedAt', 'date', 'format' => 'php:Y.m.d', 'timestampAttribute' => 'updated_at'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = User::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);
        
        if ($this->created_at) {
            $query->andFilterWhere(['and',
                ['>', 'user.created_at', $this->created_at],
                ['<', 'user.created_at', $this->created_at + 24*60*60],
            ]);
        }
        
        if ($this->updated_at) {
            $query->andFilterWhere(['and',
                ['>', 'user.updated_at', $this->updated_at],
                ['<', 'user.updated_at', $this->updated_at + 24*60*60],
            ]);
        }

        $query
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'auth_key', $this->auth_key])
            // ->andFilterWhere(['like', 'password_hash', $this->password_hash])
            // ->andFilterWhere(['like', 'password_reset_token', $this->password_reset_token])
            ->andFilterWhere(['like', 'email', $this->email]);

        return $dataProvider;
    }
}