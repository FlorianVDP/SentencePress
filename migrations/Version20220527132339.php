<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220527132339 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article_author DROP CONSTRAINT fk_d7684f48f675f31b');
        $this->addSql('DROP SEQUENCE author_id_seq CASCADE');
        $this->addSql('DROP TABLE article_author');
        $this->addSql('DROP TABLE author');
        $this->addSql('ALTER TABLE comment DROP CONSTRAINT fk_9474526c2298500d');
        $this->addSql('DROP INDEX idx_9474526c2298500d');
        $this->addSql('ALTER TABLE comment ADD author_id INT NOT NULL');
        $this->addSql('ALTER TABLE comment DROP b_user_id');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526CF675F31B FOREIGN KEY (author_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_9474526CF675F31B ON comment (author_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('CREATE SEQUENCE author_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE article_author (article_id INT NOT NULL, author_id INT NOT NULL, PRIMARY KEY(article_id, author_id))');
        $this->addSql('CREATE INDEX idx_d7684f48f675f31b ON article_author (author_id)');
        $this->addSql('CREATE INDEX idx_d7684f487294869c ON article_author (article_id)');
        $this->addSql('CREATE TABLE author (id INT NOT NULL, name VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('ALTER TABLE article_author ADD CONSTRAINT fk_d7684f487294869c FOREIGN KEY (article_id) REFERENCES article (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE article_author ADD CONSTRAINT fk_d7684f48f675f31b FOREIGN KEY (author_id) REFERENCES author (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE comment DROP CONSTRAINT FK_9474526CF675F31B');
        $this->addSql('DROP INDEX IDX_9474526CF675F31B');
        $this->addSql('ALTER TABLE comment ADD b_user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE comment DROP author_id');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT fk_9474526c2298500d FOREIGN KEY (b_user_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX idx_9474526c2298500d ON comment (b_user_id)');
    }
}
