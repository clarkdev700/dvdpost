<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211012180228 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE actor (actor_id INT AUTO_INCREMENT NOT NULL, name_actor VARCHAR(100) NOT NULL, PRIMARY KEY(actor_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE category (category_id INT AUTO_INCREMENT NOT NULL, label VARCHAR(50) NOT NULL, PRIMARY KEY(category_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE customer (customer_id INT AUTO_INCREMENT NOT NULL, surname VARCHAR(50) NOT NULL, first_name VARCHAR(50) NOT NULL, email VARCHAR(50) NOT NULL, telephone VARCHAR(20) DEFAULT NULL, addresse VARCHAR(100) NOT NULL, inscription_date DATETIME NOT NULL, password VARCHAR(16) NOT NULL, PRIMARY KEY(customer_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE mark (mark_id INT AUTO_INCREMENT NOT NULL, product_id INT NOT NULL, nbre_mark INT NOT NULL, INDEX IDX_6674F2714584665A (product_id), PRIMARY KEY(mark_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `order` (order_id INT AUTO_INCREMENT NOT NULL, customer_id INT NOT NULL, ref_order VARCHAR(20) NOT NULL, date_order DATETIME NOT NULL, status_order VARCHAR(1) DEFAULT NULL, delivery_date DATE DEFAULT NULL, return_date DATE DEFAULT NULL, INDEX IDX_F52993989395C3F3 (customer_id), PRIMARY KEY(order_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE order_line (orderline_id INT AUTO_INCREMENT NOT NULL, order_id INT NOT NULL, product_id INT NOT NULL, qte INT NOT NULL, loc_price DOUBLE PRECISION NOT NULL, INDEX IDX_9CE58EE18D9F6D38 (order_id), INDEX IDX_9CE58EE14584665A (product_id), PRIMARY KEY(orderline_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE producer (producer_id INT AUTO_INCREMENT NOT NULL, name_producer VARCHAR(100) NOT NULL, PRIMARY KEY(producer_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE product (product_id INT AUTO_INCREMENT NOT NULL, category_id INT NOT NULL, producer_id INT NOT NULL, title VARCHAR(50) NOT NULL, description LONGTEXT NOT NULL, publication_date DATE NOT NULL, qte INT NOT NULL, duration VARCHAR(20) DEFAULT NULL, icone VARCHAR(10) DEFAULT NULL, status INT DEFAULT NULL, INDEX IDX_D34A04AD12469DE2 (category_id), INDEX IDX_D34A04AD89B658FE (producer_id), PRIMARY KEY(product_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE product_actor (id INT AUTO_INCREMENT NOT NULL, product_id INT NOT NULL, actor_id INT NOT NULL, INDEX IDX_E5292DA54584665A (product_id), INDEX IDX_E5292DA510DAF24A (actor_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE product_visit (productvisit_id INT AUTO_INCREMENT NOT NULL, product_id INT NOT NULL, total_visit INT NOT NULL, date_visit DATETIME NOT NULL, INDEX IDX_E22292654584665A (product_id), PRIMARY KEY(productvisit_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE users (user_id INT AUTO_INCREMENT NOT NULL, first_name VARCHAR(50) NOT NULL, last_name VARCHAR(50) DEFAULT NULL, email VARCHAR(50) NOT NULL, password VARCHAR(16) NOT NULL, PRIMARY KEY(user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE mark ADD CONSTRAINT FK_6674F2714584665A FOREIGN KEY (product_id) REFERENCES product (product_id)');
        $this->addSql('ALTER TABLE `order` ADD CONSTRAINT FK_F52993989395C3F3 FOREIGN KEY (customer_id) REFERENCES customer (customer_id)');
        $this->addSql('ALTER TABLE order_line ADD CONSTRAINT FK_9CE58EE18D9F6D38 FOREIGN KEY (order_id) REFERENCES `order` (order_id)');
        $this->addSql('ALTER TABLE order_line ADD CONSTRAINT FK_9CE58EE14584665A FOREIGN KEY (product_id) REFERENCES product (product_id)');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04AD12469DE2 FOREIGN KEY (category_id) REFERENCES category (category_id)');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04AD89B658FE FOREIGN KEY (producer_id) REFERENCES producer (producer_id)');
        $this->addSql('ALTER TABLE product_actor ADD CONSTRAINT FK_E5292DA54584665A FOREIGN KEY (product_id) REFERENCES product (product_id)');
        $this->addSql('ALTER TABLE product_actor ADD CONSTRAINT FK_E5292DA510DAF24A FOREIGN KEY (actor_id) REFERENCES actor (actor_id)');
        $this->addSql('ALTER TABLE product_visit ADD CONSTRAINT FK_E22292654584665A FOREIGN KEY (product_id) REFERENCES product (product_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE product_actor DROP FOREIGN KEY FK_E5292DA510DAF24A');
        $this->addSql('ALTER TABLE product DROP FOREIGN KEY FK_D34A04AD12469DE2');
        $this->addSql('ALTER TABLE `order` DROP FOREIGN KEY FK_F52993989395C3F3');
        $this->addSql('ALTER TABLE order_line DROP FOREIGN KEY FK_9CE58EE18D9F6D38');
        $this->addSql('ALTER TABLE product DROP FOREIGN KEY FK_D34A04AD89B658FE');
        $this->addSql('ALTER TABLE mark DROP FOREIGN KEY FK_6674F2714584665A');
        $this->addSql('ALTER TABLE order_line DROP FOREIGN KEY FK_9CE58EE14584665A');
        $this->addSql('ALTER TABLE product_actor DROP FOREIGN KEY FK_E5292DA54584665A');
        $this->addSql('ALTER TABLE product_visit DROP FOREIGN KEY FK_E22292654584665A');
        $this->addSql('DROP TABLE actor');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE customer');
        $this->addSql('DROP TABLE mark');
        $this->addSql('DROP TABLE `order`');
        $this->addSql('DROP TABLE order_line');
        $this->addSql('DROP TABLE producer');
        $this->addSql('DROP TABLE product');
        $this->addSql('DROP TABLE product_actor');
        $this->addSql('DROP TABLE product_visit');
        $this->addSql('DROP TABLE users');
    }
}
