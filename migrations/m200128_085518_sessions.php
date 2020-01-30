<?php

use yii\db\Migration;

/**
 * Class m200128_085518_sessions
 */
class m200128_085518_sessions extends Migration
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
        echo "m200128_085518_sessions cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200128_085518_sessions cannot be reverted.\n";

        return false;
    }
    */
}
