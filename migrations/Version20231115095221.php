<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231115095221 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__artist AS SELECT id, nale, genre, thumbnail, biography FROM artist');
        $this->addSql('DROP TABLE artist');
        $this->addSql('CREATE TABLE artist (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(40) NOT NULL, genre CLOB NOT NULL --(DC2Type:json)
        , thumbnail VARCHAR(255) NOT NULL, biography CLOB DEFAULT NULL)');
        $this->addSql('INSERT INTO artist (id, name, genre, thumbnail, biography) SELECT id, nale, genre, thumbnail, biography FROM __temp__artist');
        $this->addSql('DROP TABLE __temp__artist');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__artist AS SELECT id, name, genre, thumbnail, biography FROM artist');
        $this->addSql('DROP TABLE artist');
        $this->addSql('CREATE TABLE artist (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nale VARCHAR(40) NOT NULL, genre CLOB NOT NULL --(DC2Type:json)
        , thumbnail VARCHAR(255) NOT NULL, biography CLOB DEFAULT NULL)');
        $this->addSql('INSERT INTO artist (id, nale, genre, thumbnail, biography) SELECT id, name, genre, thumbnail, biography FROM __temp__artist');
        $this->addSql('DROP TABLE __temp__artist');
    }
}
