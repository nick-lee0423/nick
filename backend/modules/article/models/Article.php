<?php

namespace app\modules\article\models;

use Yii;

/**
 * This is the model class for table "{{%article}}".
 *
 * @property string $article_id
 * @property string $article_name
 * @property string $article_img
 * @property string $article_sketch
 * @property string $article_content
 * @property string $article_style
 * @property string $article_author
 * @property string $article_created_date
 * @property integer $status
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
            [['article_created_date'], 'safe'],
            [['id','article_style', 'article_author','status'], 'integer'],
            [['article_name'], 'string', 'max' => 60],
            [['article_img'], 'string', 'max' => 150],
            [['article_sketch'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'article_name' => '文章名称',
            'article_img' => '封面图片',
            'article_sketch' => '文章概述',
            'article_content' => '文章内容',
            'article_style' => '文章类型',
            'article_author' => '作者',
            'article_created_date' => '发布时间',
            'status' => '状态',
        ];
    }
}
