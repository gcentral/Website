<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200614225813 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE developer_group (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(100) NOT NULL, url VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE developer_group_package (developer_group_id INT NOT NULL, package_id INT NOT NULL, INDEX IDX_93F19076BF3E3DC1 (developer_group_id), INDEX IDX_93F19076F44CABFF (package_id), PRIMARY KEY(developer_group_id, package_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE developer_group_user (developer_group_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_6E77D5FFBF3E3DC1 (developer_group_id), INDEX IDX_6E77D5FFA76ED395 (user_id), PRIMARY KEY(developer_group_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE package (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(100) NOT NULL, description LONGTEXT NOT NULL, version VARCHAR(20) NOT NULL, url VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE package_rating (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, package_id INT NOT NULL, rating INT NOT NULL, comment LONGTEXT NOT NULL, INDEX IDX_E67255FEA76ED395 (user_id), INDEX IDX_E67255FEF44CABFF (package_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, display_name VARCHAR(50) NOT NULL, full_name VARCHAR(80) NOT NULL, location VARCHAR(100) NOT NULL, reset_pass TINYINT(1) NOT NULL, registered DATETIME NOT NULL, reg_ip VARCHAR(40) NOT NULL, last_login DATETIME DEFAULT NULL, login_ip VARCHAR(40) DEFAULT NULL, temp_key VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE developer_group_package ADD CONSTRAINT FK_93F19076BF3E3DC1 FOREIGN KEY (developer_group_id) REFERENCES developer_group (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE developer_group_package ADD CONSTRAINT FK_93F19076F44CABFF FOREIGN KEY (package_id) REFERENCES package (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE developer_group_user ADD CONSTRAINT FK_6E77D5FFBF3E3DC1 FOREIGN KEY (developer_group_id) REFERENCES developer_group (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE developer_group_user ADD CONSTRAINT FK_6E77D5FFA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE package_rating ADD CONSTRAINT FK_E67255FEA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE package_rating ADD CONSTRAINT FK_E67255FEF44CABFF FOREIGN KEY (package_id) REFERENCES package (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE developer_group_package DROP FOREIGN KEY FK_93F19076BF3E3DC1');
        $this->addSql('ALTER TABLE developer_group_user DROP FOREIGN KEY FK_6E77D5FFBF3E3DC1');
        $this->addSql('ALTER TABLE developer_group_package DROP FOREIGN KEY FK_93F19076F44CABFF');
        $this->addSql('ALTER TABLE package_rating DROP FOREIGN KEY FK_E67255FEF44CABFF');
        $this->addSql('ALTER TABLE developer_group_user DROP FOREIGN KEY FK_6E77D5FFA76ED395');
        $this->addSql('ALTER TABLE package_rating DROP FOREIGN KEY FK_E67255FEA76ED395');
        $this->addSql('DROP TABLE developer_group');
        $this->addSql('DROP TABLE developer_group_package');
        $this->addSql('DROP TABLE developer_group_user');
        $this->addSql('DROP TABLE package');
        $this->addSql('DROP TABLE package_rating');
        $this->addSql('DROP TABLE user');
    }
}
