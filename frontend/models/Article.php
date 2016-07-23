<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%article}}".
 *
 * @property integer $article_id
 * @property string $article_name
 * @property string $article_img
 * @property string $article_sketch
 * @property string $article_content
 * @property string $article_style
 * @property integer $article_author
 * @property string $article_created_date
 * @property integer $status
 *
 * @property User $articleAuthor
 */
class Article extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%article}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['article_content'], 'string'],
            [['article_author', 'status'], 'integer'],
            [['article_created_date'], 'safe'],
            [['article_name'], 'string', 'max' => 60],
            [['article_img'], 'string', 'max' => 150],
            [['article_sketch'], 'string', 'max' => 50],
            [['article_style'], 'string', 'max' => 24],
            [['article_author'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['article_author' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'article_id' => 'Article ID',
            'article_name' => 'Article Name',
            'article_img' => 'Article Img',
            'article_sketch' => 'Article Sketch',
            'article_content' => 'Article Content',
            'article_style' => 'Article Style',
            'article_author' => 'Article Author',
            'article_created_date' => 'Article Created Date',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArticleAuthor()
    {
        return $this->hasOne(User::className(), ['id' => 'article_author']);
    }
}
