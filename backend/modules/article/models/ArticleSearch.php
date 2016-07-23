<?php

namespace app\modules\article\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\article\models\Article;

/**
 * ArticleSearch represents the model behind the search form about `app\modules\article\models\Article`.
 */
class ArticleSearch extends Article
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'article_name', 'article_img', 'article_sketch', 'article_content', 'article_style', 'article_author', 'article_created_date'], 'safe'],
            [['status'], 'integer'],
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
        $query = Article::find();

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
            'article_created_date' => $this->article_created_date,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'id', $this->id])
            ->andFilterWhere(['like', 'article_name', $this->article_name])
            ->andFilterWhere(['like', 'article_img', $this->article_img])
            ->andFilterWhere(['like', 'article_sketch', $this->article_sketch])
            ->andFilterWhere(['like', 'article_content', $this->article_content])
            ->andFilterWhere(['like', 'article_style', $this->article_style])
            ->andFilterWhere(['like', 'article_author', $this->article_author]);

        return $dataProvider;
    }
}
