<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201028043230 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE package_repo (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, repo_type VARCHAR(20) NOT NULL, last_update DATETIME DEFAULT NULL, url VARCHAR(255) NOT NULL, enabled TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE package_tag (id INT AUTO_INCREMENT NOT NULL, parent_id INT DEFAULT NULL, manage_group_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, managed TINYINT(1) NOT NULL, INDEX IDX_45AB7C36727ACA70 (parent_id), INDEX IDX_45AB7C36476F68D8 (manage_group_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE package_tag_package (package_tag_id INT NOT NULL, package_id INT NOT NULL, INDEX IDX_21825059842910CD (package_tag_id), INDEX IDX_21825059F44CABFF (package_id), PRIMARY KEY(package_tag_id, package_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE package_tag ADD CONSTRAINT FK_45AB7C36727ACA70 FOREIGN KEY (parent_id) REFERENCES package_tag (id)');
        $this->addSql('ALTER TABLE package_tag ADD CONSTRAINT FK_45AB7C36476F68D8 FOREIGN KEY (manage_group_id) REFERENCES developer_group (id)');
        $this->addSql('ALTER TABLE package_tag_package ADD CONSTRAINT FK_21825059842910CD FOREIGN KEY (package_tag_id) REFERENCES package_tag (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE package_tag_package ADD CONSTRAINT FK_21825059F44CABFF FOREIGN KEY (package_id) REFERENCES package (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE developer_group CHANGE personal_user_id personal_user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE package ADD repo_id INT NOT NULL, CHANGE icon_url icon_url VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE package ADD CONSTRAINT FK_DE686795BD359B2D FOREIGN KEY (repo_id) REFERENCES package_repo (id)');
        $this->addSql('CREATE INDEX IDX_DE686795BD359B2D ON package (repo_id)');
        $this->addSql('ALTER TABLE user CHANGE roles roles JSON NOT NULL, CHANGE last_login last_login DATETIME DEFAULT NULL, CHANGE login_ip login_ip VARCHAR(40) DEFAULT NULL, CHANGE temp_key temp_key VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE package_version CHANGE deps_string deps_string LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:simple_array)\'');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE package DROP FOREIGN KEY FK_DE686795BD359B2D');
        $this->addSql('ALTER TABLE package_tag DROP FOREIGN KEY FK_45AB7C36727ACA70');
        $this->addSql('ALTER TABLE package_tag_package DROP FOREIGN KEY FK_21825059842910CD');
        $this->addSql('DROP TABLE package_repo');
        $this->addSql('DROP TABLE package_tag');
        $this->addSql('DROP TABLE package_tag_package');
        $this->addSql('ALTER TABLE developer_group CHANGE personal_user_id personal_user_id INT DEFAULT NULL');
        $this->addSql('DROP INDEX IDX_DE686795BD359B2D ON package');
        $this->addSql('ALTER TABLE package DROP repo_id, CHANGE icon_url icon_url VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE package_version CHANGE deps_string deps_string LONGTEXT CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci` COMMENT \'(DC2Type:simple_array)\'');
        $this->addSql('ALTER TABLE user CHANGE roles roles LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_bin`, CHANGE last_login last_login DATETIME DEFAULT \'NULL\', CHANGE login_ip login_ip VARCHAR(40) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE temp_key temp_key VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
    }
}
