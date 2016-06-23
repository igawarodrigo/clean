<?php

use yii\db\Migration;

/**
 * Handles the creation for table `room`.
 */
class m160623_194429_create_room extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('room', [
            'id' => $this->primaryKey(),
            'room_number' => $this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('room');
    }
}
