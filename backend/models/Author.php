<?php

namespace backend\models;

use yii\db\ActiveRecord;

/**
 * Class Author
 * @package backend\models
 */
class Author extends ActiveRecord
{
    /**
     * @return string
     */
    public static function tableName()
    {
        return 'authors';
    }

    /**
     * @param array $attributes
     * @return void
     */
    public function fill(array $attributes)
    {
        foreach ($attributes as $key => $attribute) {
            $this->{$key} = $attribute;
        }
    }

    /**
     * @return array|ActiveRecord[]
     */
    public function getAuthorBooks()
    {
        return Book::find()->where(['author_id' => $this->id])->all();
    }

    /**
     * @return int|string
     */
    public function getCountAuthorBooks()
    {
        return Book::find()->where(['author_id' => $this->id])->count();
    }
}