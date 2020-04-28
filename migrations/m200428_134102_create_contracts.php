<?php

use yii\db\Migration;

/**
 * Class m200428_134102_create_contracts
 */
class m200428_134102_create_contracts extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
	$this->createTable('contracts', [
            'id' => $this->primaryKey()->notNull(),
            'date' => $this->date(),
            'name_surname' => $this->string(100)->notNull(),
            'idnp' => $this->string()->notNull(),
            'phone' => $this->integer(),
            'contract_type' => $this->string(),
            'brand_name' => $this->string(),
            'model_name' => $this->string(),
            'imei' => $this->integer(),
	    'price' => $this->integer(),
            'discount' => $this->integer(),
            'amount' => $this->float(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('contracts');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200428_134102_create_contracts cannot be reverted.\n";

        return false;
    }
    */
}
