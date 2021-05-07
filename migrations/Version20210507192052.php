<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210507192052 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE country_language (country_id INT NOT NULL, language_id INT NOT NULL, INDEX IDX_E7112008F92F3E70 (country_id), INDEX IDX_E711200882F1BAF4 (language_id), PRIMARY KEY(country_id, language_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE country_language ADD CONSTRAINT FK_E7112008F92F3E70 FOREIGN KEY (country_id) REFERENCES country (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE country_language ADD CONSTRAINT FK_E711200882F1BAF4 FOREIGN KEY (language_id) REFERENCES language (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE country ADD prefered_beverage_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE country ADD CONSTRAINT FK_5373C9665CE5D860 FOREIGN KEY (prefered_beverage_id) REFERENCES prefered_beverage (id)');
        $this->addSql('CREATE INDEX IDX_5373C9665CE5D860 ON country (prefered_beverage_id)');
        $this->addSql('ALTER TABLE prefered_beverage CHANGE name name VARCHAR(255) NOT NULL, CHANGE code code VARCHAR(4) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE country_language');
        $this->addSql('ALTER TABLE country DROP FOREIGN KEY FK_5373C9665CE5D860');
        $this->addSql('DROP INDEX IDX_5373C9665CE5D860 ON country');
        $this->addSql('ALTER TABLE country DROP prefered_beverage_id');
        $this->addSql('ALTER TABLE prefered_beverage CHANGE name name VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE code code VARCHAR(4) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
