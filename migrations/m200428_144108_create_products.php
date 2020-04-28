<?php

use yii\db\Migration;

/**
 * Class m200428_144108_create_products
 */
class m200428_144108_create_products extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
	$this->createTable('products', [
            'id' => $this->primaryKey()->notNull(),
            'sku' => $this->integer(),
            'brand_name' => $this->string(100)->notNull(),
            'model_name' => $this->string(100)->notNull(),
            'model_part_nuber' => $this->string()->notNull(),
            'category' => $this->string(100)->notNull(),
            'price' => $this->float()->notNull(),
       	    'description' => $this->text(),
            'image' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('products');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200428_144108_create_products cannot be reverted.\n";

        return false;
    }
    */
}
