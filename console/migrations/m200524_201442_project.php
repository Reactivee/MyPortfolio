<?php

use yii\db\Migration;

class m200524_201442_project extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%project}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255)->notNull(),
            'category_id' => $this->integer()->notNull(),
            'description' => $this->text(),
            'link' => $this->string(255),
            'image' => $this->string(255),
            'date' => $this->date(),
            'user_id' => $this->integer()->notNull(),
            'created_at' => $this->timestamp(),
            'update_at' => $this->timestamp(),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%project}}');
    }
}
