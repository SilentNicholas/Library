<?php


namespace backend\models;


use yii\db\ActiveRecord;

class Book extends ActiveRecord
{
    public static function tableName()
    {
        return 'books';
    }

    public function fill($attributes)
    {
        foreach ($attributes as $key => $attribute) {
            $this->{$key} = $attribute;
        }
    }
}