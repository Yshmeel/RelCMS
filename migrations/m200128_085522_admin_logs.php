<?php

use yii\db\Migration;

/**
 * Class m200128_085522_admin_logs
 */
class m200128_085522_admin_logs extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200128_085522_admin_logs cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200128_085522_admin_logs cannot be reverted.\n";

        return false;
    }
    */
}
