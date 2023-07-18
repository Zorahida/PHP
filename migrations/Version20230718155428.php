<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230718155428 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE discografía (id INT AUTO_INCREMENT NOT NULL, music_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, img VARCHAR(255) NOT NULL, INDEX IDX_A529BB8399BBB13 (music_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE discografía ADD CONSTRAINT FK_A529BB8399BBB13 FOREIGN KEY (music_id) REFERENCES music (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE discografía DROP FOREIGN KEY FK_A529BB8399BBB13');
        $this->addSql('DROP TABLE discografía');
    }
}
