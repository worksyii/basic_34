<?php

use yii\db\Migration;

/**
 * Class m200428_123823_create_partners
 */
class m200428_123823_create_partners extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
	$this->createTable('partners', [
            'id' => $this->primaryKey()->notNull(),
            'name' => $this->string(100)->notNull()->unique(),
	    'phone' => $this->string(100)->notNull(),
            'email' => $this->string(100)->notNull()->unique(),
            'address' => $this->string(100)->notNull(),
            'city' => $this->string(100)->notNull(),
	    'postal code' => $this->string(100)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
    	 $this->dropTable('partners'); 
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200428_123823_create_partners cannot be reverted.\n";

        return false;
    }
    */
}
