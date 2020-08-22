<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201028030508 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE package_version (id INT AUTO_INCREMENT NOT NULL, package_id INT NOT NULL, package_url VARCHAR(255) NOT NULL, repo_type VARCHAR(20) NOT NULL, version VARCHAR(255) NOT NULL, release_date DATETIME NOT NULL, release_notes LONGTEXT NOT NULL, deps_string LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:simple_array)\', INDEX IDX_3047B64FF44CABFF (package_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE package_version ADD CONSTRAINT FK_3047B64FF44CABFF FOREIGN KEY (package_id) REFERENCES package (id)');
        $this->addSql('ALTER TABLE developer_group CHANGE personal_user_id personal_user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE package ADD display_name VARCHAR(255) NOT NULL, ADD icon_url VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE user CHANGE roles roles JSON NOT NULL, CHANGE last_login last_login DATETIME DEFAULT NULL, CHANGE login_ip login_ip VARCHAR(40) DEFAULT NULL, CHANGE temp_key temp_key VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE package_version');
        $this->addSql('ALTER TABLE developer_group CHANGE personal_user_id personal_user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE package DROP display_name, DROP icon_url');
        $this->addSql('ALTER TABLE user CHANGE roles roles LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_bin`, CHANGE last_login last_login DATETIME DEFAULT \'NULL\', CHANGE login_ip login_ip VARCHAR(40) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE temp_key temp_key VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
    }
}
