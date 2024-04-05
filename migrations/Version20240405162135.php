<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240405162135 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE app (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE app_endpoint (app_id INT NOT NULL, endpoint_id INT NOT NULL, INDEX IDX_CCC26FD67987212D (app_id), INDEX IDX_CCC26FD621AF7E36 (endpoint_id), PRIMARY KEY(app_id, endpoint_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE endpoint (id INT AUTO_INCREMENT NOT NULL, route VARCHAR(255) NOT NULL, refresh_interval INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE app_endpoint ADD CONSTRAINT FK_CCC26FD67987212D FOREIGN KEY (app_id) REFERENCES app (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE app_endpoint ADD CONSTRAINT FK_CCC26FD621AF7E36 FOREIGN KEY (endpoint_id) REFERENCES endpoint (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE app_endpoint DROP FOREIGN KEY FK_CCC26FD67987212D');
        $this->addSql('ALTER TABLE app_endpoint DROP FOREIGN KEY FK_CCC26FD621AF7E36');
        $this->addSql('DROP TABLE app');
        $this->addSql('DROP TABLE app_endpoint');
        $this->addSql('DROP TABLE endpoint');
    }
}
