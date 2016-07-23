<?php

namespace app\modules\page\models;

use Yii;

/**
 * This is the model class for table "{{%page}}".
 *
 * @property integer $id
 * @property integer $use_layout
 * @property string $content
 * @property string $title
 * @property string $name
 * @property integer $created_at
 * @property integer $updated_at
 */
class Page extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%page}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['use_layout', 'created_at', 'updated_at'], 'integer'],
            [['content', 'title'], 'required'],
            [['content'], 'string'],
            [['title', 'name'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'use_layout' => '使用布局',
            'content' => '内容',
            'title' => '标题',
            'name' => '标识',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
        ];
    }
}
