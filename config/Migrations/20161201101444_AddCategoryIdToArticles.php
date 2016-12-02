<?php

use Migrations\AbstractMigration;

class AddCategoryIdToArticles extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function up()
    {
        $table = $this->table('articles');
        $table->addColumn('category_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->update();
    }
    // Graceful migration rollback
    public function down()
    {

        $table = $this->table('articles');
        $table->removeColumn('category_id')->save();

    }
}
