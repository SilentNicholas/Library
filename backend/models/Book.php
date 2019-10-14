<?php


namespace backend\models;

use yii\db\ActiveRecord;

/**
 * Class Book
 * @package backend\models
 */
class Book extends ActiveRecord
{
    /**
     * @return string
     */
    public static function tableName()
    {
        return 'books';
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
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor()
    {
        return $this->hasOne(Author::class, ['id' => 'author_id']);
    }

    /**
     * @return string
     */
    public function getAuthorName()
    {
        $author = $this->author;
        return $author ? $author->name : '';
    }
}