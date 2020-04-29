<?php

use yii\db\Migration;

/**
 * Class m200428_110616_create_categories
 */
class m200428_110616_create_categories extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
	$this->createTable('categories', [
            'id' => $this->primaryKey()->notNull(),
            'name' => $this->string(100)->notNull(),
            'description' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('categories');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200428_110616_create_categories cannot be reverted.\n";

        return false;
    }
    */
}
