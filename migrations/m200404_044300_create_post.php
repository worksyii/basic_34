<?php

use yii\db\Migration;

/**
 * Class m200404_044300_create_post
 */
class m200404_044300_create_post extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()

	   {
        $this->createTable('post', [
            'id' => $this->primaryKey()
        ]);
    }

    /**
     * {@inheritdoc}
     */





    public function safeDown()
    {
        echo "m200404_044300_create_post cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200404_044300_create_post cannot be reverted.\n";

        return false;
    }
    */
}
