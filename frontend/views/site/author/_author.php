<?php
use yii\helpers\Html;

$books = $model->getAuthorBooks();
?>
<div class="post">
    <h2><?= Html::encode($model->name . ' '. $model->surname) ?></h2>
    <p>Books:</p>
    <?php if(empty($books)) : ?>
    <ul>
        Empty List
    </ul>
    <?php endif; ?>
    <ul>
    <?php foreach ($books as $book): ?>
    <li>
        <?= $book->name ?> (<?= $book->genre ?>) - <?= $book->pages_count ?>
    </li>
    <?php endforeach; ?>
    </ul>
</div>
