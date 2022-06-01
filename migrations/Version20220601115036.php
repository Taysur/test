<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220601115036 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE propr CHANGE prix prix VARCHAR(255) NOT NULL, CHANGE surface surface VARCHAR(255) NOT NULL, CHANGE chambre chambre VARCHAR(255) NOT NULL, CHANGE salle salle VARCHAR(255) NOT NULL, CHANGE wc wc VARCHAR(255) NOT NULL, CHANGE parking parking VARCHAR(255) NOT NULL, CHANGE jardin jardin VARCHAR(255) NOT NULL, CHANGE garage garage VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE propr CHANGE prix prix INT NOT NULL, CHANGE surface surface INT NOT NULL, CHANGE chambre chambre INT NOT NULL, CHANGE salle salle INT NOT NULL, CHANGE wc wc INT NOT NULL, CHANGE parking parking INT NOT NULL, CHANGE jardin jardin INT NOT NULL, CHANGE garage garage INT NOT NULL');
    }
}
