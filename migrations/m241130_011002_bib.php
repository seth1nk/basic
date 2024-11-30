<?php

use yii\db\Migration;

/**
 * Class m241130_011001_bib
 */
class m241130_011002_bib extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('knigi', [
            'id' => $this->primaryKey(),
            'Название' => $this->string()->notNull(),
            'Издательство' => $this->string()->notNull(),
            'Автор' => $this->string()->notNull(),
            'Год' => $this->integer()->notNull(),
            'Жанр' => $this->string()->notNull(),
            'Цена' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m241130_011001_bib cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m241130_011001_bib cannot be reverted.\n";

        return false;
    }
    */
}
