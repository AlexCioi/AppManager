<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240405162930 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE endpoint_settings (id INT AUTO_INCREMENT NOT NULL, refresh_interval INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE app_endpoint DROP FOREIGN KEY FK_CCC26FD621AF7E36');
        $this->addSql('ALTER TABLE app_endpoint DROP FOREIGN KEY FK_CCC26FD67987212D');
        $this->addSql('DROP TABLE app_endpoint');
        $this->addSql('ALTER TABLE endpoint CHANGE refresh_interval app_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE endpoint ADD CONSTRAINT FK_C4420F7B7987212D FOREIGN KEY (app_id) REFERENCES app (id)');
        $this->addSql('CREATE INDEX IDX_C4420F7B7987212D ON endpoint (app_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE app_endpoint (app_id INT NOT NULL, endpoint_id INT NOT NULL, INDEX IDX_CCC26FD67987212D (app_id), INDEX IDX_CCC26FD621AF7E36 (endpoint_id), PRIMARY KEY(app_id, endpoint_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE app_endpoint ADD CONSTRAINT FK_CCC26FD621AF7E36 FOREIGN KEY (endpoint_id) REFERENCES endpoint (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE app_endpoint ADD CONSTRAINT FK_CCC26FD67987212D FOREIGN KEY (app_id) REFERENCES app (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('DROP TABLE endpoint_settings');
        $this->addSql('ALTER TABLE endpoint DROP FOREIGN KEY FK_C4420F7B7987212D');
        $this->addSql('DROP INDEX IDX_C4420F7B7987212D ON endpoint');
        $this->addSql('ALTER TABLE endpoint CHANGE app_id refresh_interval INT DEFAULT NULL');
    }
}
