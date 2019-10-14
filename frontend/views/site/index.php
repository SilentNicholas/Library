<?php

/* @var $this yii\web\View */

use yii\widgets\ListView;
use yii\data\ActiveDataProvider;
use backend\models\Author;

$this->title = 'My Yii Application';


$dataProvider = new ActiveDataProvider([
    'query' => Author::find(),
    'pagination' => [
        'pageSize' => 20,
    ],
]);
echo ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => 'author/_author',
]);
