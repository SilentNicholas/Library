<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\Author;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\BookSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Books';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="book-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Book', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'genre',
            'pages_count',
            [
                    'attribute' => 'author',
                    'format' => 'text',
                    'content' => function ($data) {
        return $data->getAuthorName();
                    }
                    ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
