<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%article_style}}".
 *
 * @property integer $id
 * @property string $name
 * @property integer $creates_author
 * @property string $created_date
 * @property integer $status
 *
 * @property User $createsAuthor
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
            [['creates_author', 'status'], 'integer'],
            [['created_date'], 'safe'],
            [['name'], 'string', 'max' => 20],
            [['creates_author'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['creates_author' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'creates_author' => 'Creates Author',
            'created_date' => 'Created Date',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCreatesAuthor()
    {
        return $this->hasOne(User::className(), ['id' => 'creates_author']);
    }
}
