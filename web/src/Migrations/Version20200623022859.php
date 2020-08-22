<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200623022859 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE developer_group ADD personal_user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE developer_group ADD CONSTRAINT FK_824884922449DABE FOREIGN KEY (personal_user_id) REFERENCES user (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_824884922449DABE ON developer_group (personal_user_id)');
        $this->addSql('ALTER TABLE user CHANGE roles roles JSON NOT NULL, CHANGE last_login last_login DATETIME DEFAULT NULL, CHANGE login_ip login_ip VARCHAR(40) DEFAULT NULL, CHANGE temp_key temp_key VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE developer_group DROP FOREIGN KEY FK_824884922449DABE');
        $this->addSql('DROP INDEX UNIQ_824884922449DABE ON developer_group');
        $this->addSql('ALTER TABLE developer_group DROP personal_user_id');
        $this->addSql('ALTER TABLE user CHANGE roles roles LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_bin`, CHANGE last_login last_login DATETIME DEFAULT \'NULL\', CHANGE login_ip login_ip VARCHAR(40) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE temp_key temp_key VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
    }
}
