<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "soul_entity".
 *
 * @property int $id
 * @property string $title
 * @property string $hits
 */
class SoulEntity extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'soul_entity';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'title', 'hits'], 'required'],
            [['id'], 'integer'],
            [['title'], 'string', 'max' => 300],
            [['hits'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'hits' => 'Hits',
        ];
    }
}
