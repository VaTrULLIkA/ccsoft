<?php

use yii\db\Schema;
use yii\db\Migration;

/**
 * Class m170920_191301_create_table_messages
 */
class m170920_191301_create_table_messages extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('messages', [
            'id' => Schema::TYPE_PK,
            'code' => Schema::TYPE_SMALLINT,
            'type' => 'tinyint',
            'status' => "ENUM('получено', 'прочитано', 'исправлено') DEFAULT 'получено'",
            'application' =>  Schema::TYPE_STRING.'(20) NOT NULL',
            'message' =>  Schema::TYPE_STRING.'(1000) NOT NULL'
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('messages');
    }
}
