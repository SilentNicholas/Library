<?php


namespace backend\models;

use yii\db\ActiveRecord;

class Author extends ActiveRecord
{
    public static function tableName()
    {
        return 'authors';
    }

    public function fill($attributes)
    {
        foreach ($attributes as $key => $attribute) {
            $this->{$key} = $attribute;
        }
    }
}