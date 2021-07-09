<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210412044000 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE package_repo CHANGE last_update last_update DATETIME DEFAULT NULL, CHANGE index_url index_url VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE package DROP icon_url');
        $this->addSql('ALTER TABLE developer_group CHANGE personal_user_id personal_user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE package_tag CHANGE parent_id parent_id INT DEFAULT NULL, CHANGE manage_group_id manage_group_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE package_version ADD license VARCHAR(30) NOT NULL, CHANGE deps_string deps_string LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:simple_array)\', CHANGE icon_url icon_url VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE user CHANGE roles roles JSON NOT NULL, CHANGE last_login last_login DATETIME DEFAULT NULL, CHANGE login_ip login_ip VARCHAR(40) DEFAULT NULL, CHANGE temp_key temp_key VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE developer_group CHANGE personal_user_id personal_user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE package ADD icon_url VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE package_repo CHANGE last_update last_update DATETIME DEFAULT \'NULL\', CHANGE index_url index_url VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE package_tag CHANGE parent_id parent_id INT DEFAULT NULL, CHANGE manage_group_id manage_group_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE package_version DROP license, CHANGE deps_string deps_string LONGTEXT CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci` COMMENT \'(DC2Type:simple_array)\', CHANGE icon_url icon_url VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE user CHANGE roles roles LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_bin`, CHANGE last_login last_login DATETIME DEFAULT \'NULL\', CHANGE login_ip login_ip VARCHAR(40) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE temp_key temp_key VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
    }
}
