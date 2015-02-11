<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20150211185506 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        $table = $schema->createTable('catalog');
        $table->addColumn('id', 'integer', array('unsigned' => true));
        $table->addColumn('title', 'string', array('lenght' => 128));
        $table->setPrimaryKey(array('id'));
    }

    public function down(Schema $schema)
    {
		$schema->dropTable('catalog');
    }
}
