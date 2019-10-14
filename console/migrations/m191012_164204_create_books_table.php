<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%books}}`.
 */
class m191012_164204_create_books_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%books}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(30),
            'genre' => $this->string(15),
            'pages_count' => $this->integer(),
            'author_id' => $this->integer()
        ]);

        $this->addForeignKey(
            'fk-book-author_id',
            'books',
            'author_id',
            'authors',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-book-author_id', 'books');
        $this->dropTable('{{%books}}');
    }
}
