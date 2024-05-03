<?php

declare(strict_types=1);

namespace App\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240503144019 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE sylius_payment_method ADD logo_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE sylius_payment_method ADD CONSTRAINT FK_A75B0B0DF98F144A FOREIGN KEY (logo_id) REFERENCES abenmada_media_media (id) ON DELETE SET NULL');
        $this->addSql('CREATE INDEX IDX_A75B0B0DF98F144A ON sylius_payment_method (logo_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE sylius_payment_method DROP FOREIGN KEY FK_A75B0B0DF98F144A');
        $this->addSql('DROP INDEX IDX_A75B0B0DF98F144A ON sylius_payment_method');
        $this->addSql('ALTER TABLE sylius_payment_method DROP logo_id');
    }
}
