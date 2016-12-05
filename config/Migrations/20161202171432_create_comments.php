<?php

use Phinx\Migration\AbstractMigration;

class CreateComments extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function up()
    {

        $table = $this->table('comments');
        $table->addColumn('user_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);

        $table->addColumn('body', 'text', [
            'default' => null,
            'null' => false
        ]);

        $table->addColumn('article_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);

        $table->addColumn('nickname', 'string', [
            'default' => null,
            'limit' => 50,
            'null' => true,
        ]);

        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);

        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();

    }

    public function down()
    {

        $table = $this->table('comments');
        $table->removeColumn('id')->save();
        $table->removeColumn('body')->save();
        $table->removeColumn('article_id')->save();
        $table->removeColumn('nickname')->save();
        $table->removeColumn('created')->save();
        $table->removeColumn('modified')->save();
        $this->dropTable('comments');

    }
}
