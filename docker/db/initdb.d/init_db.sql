CREATE DATABASE IF NOT EXISTS sample;

CREATE TABLE IF NOT EXISTS sample.user (
   `id` INT AUTO_INCREMENT,
   `name` VARCHAR(20) NOT NULL,
   PRIMARY KEY (`id`)
) ENGINE = InnoDB;

INSERT INTO sample.user(id, name) VALUES(1, 'Test1'), (2, 'Test2');