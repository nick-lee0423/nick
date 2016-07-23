<?php

namespace app\modules\article_style\models;

use Yii;

/**
 * This is the model class for table "{{%article_style}}".
 *
 * @property integer $id
 * @property string $name
 * @property string $creates_author
 * @property string $created_date
 * @property integer $status
 */
class ArticleStyle extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%article_style}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['created_date'], 'safe'],
            [['id','creates_author','status'], 'integer'],
            [['name'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '名称',
            'creates_author' => '作者',
            'created_date' => '创建时间',
            'status' => '状态',
        ];
    }
}
