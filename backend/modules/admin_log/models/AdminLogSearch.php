<?php

namespace app\modules\admin_log\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin_log\models\AdminLog;

/**
 * AdminLogSearch represents the model behind the search form about `app\modules\admin_log\models\AdminLog`.
 */
class AdminLogSearch extends AdminLog
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'created_at', 'user_id', 'ip'], 'integer'],
            [['route', 'description'], 'safe'],
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
        $query = AdminLog::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'created_at' => $this->created_at,
            'user_id' => $this->user_id,
            'ip' => $this->ip,
        ]);

        $query->andFilterWhere(['like', 'route', $this->route])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
