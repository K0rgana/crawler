-- MySQL Script generated by MySQL Workbench
-- Sat Jan 30 13:23:52 2021
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `mydb` ;

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`cwl_usuario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`cwl_usuario` ;

CREATE TABLE IF NOT EXISTS `mydb`.`cwl_usuario` (
  `usu_id` INT NOT NULL AUTO_INCREMENT,
  `usu_nome` VARCHAR(45) NOT NULL,
  `usu_telefone` VARCHAR(45) NULL,
  `usu_email` VARCHAR(45) NOT NULL,
  `usu_senha` VARCHAR(45) NOT NULL,
  `usu_flag` BOOLEAN NOT NULL,
  PRIMARY KEY (`usu_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`cwl_endereco`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`cwl_endereco` ;

CREATE TABLE IF NOT EXISTS `mydb`.`cwl_endereco` (
  `end_id` INT NOT NULL AUTO_INCREMENT,
  `end_cep` VARCHAR(45) NULL,
  `end_rua` VARCHAR(45) NULL,
  `end_numero` VARCHAR(45) NULL,
  `end_complemento` VARCHAR(45) NULL,
  PRIMARY KEY (`end_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`cwl_categoria`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`cwl_categoria` ;

CREATE TABLE IF NOT EXISTS `mydb`.`cwl_categoria` (
  `cat_id` INT NOT NULL AUTO_INCREMENT,
  `cat_nome` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`cat_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`cwl_anuncio`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`cwl_anuncio` ;

CREATE TABLE IF NOT EXISTS `mydb`.`cwl_anuncio` (
  `anu_id` INT NOT NULL AUTO_INCREMENT,
  `anu_usu_id` INT NOT NULL,
  `anu_imagem` VARCHAR(45) not NULL,
  `anu_titulo` VARCHAR(45) not NULL,
  `anu_descricao` VARCHAR(255) not NULL,
  `anu_quantidade` INT NULL,
  `anu_data` TIMESTAMP(2) NULL,
  `anu_cat_id` INT NOT NULL,
  `anu_end_id` INT NOT NULL,
  `anu_status` BOOLEAN NULL,
  PRIMARY KEY (`anu_id`),
  INDEX `fk_cwl_anuncio_usuario_idx` (`anu_usu_id` ASC) ,
  INDEX `fk_cwl_anuncio_cwl_categoria1_idx` (`anu_cat_id` ASC) ,
  INDEX `fk_cwl_anuncio_cwl_endereco1_idx` (`anu_end_id` ASC) ,
  CONSTRAINT `fk_cwl_anuncio_usuario`
    FOREIGN KEY (`anu_usu_id`)
    REFERENCES `mydb`.`cwl_usuario` (`usu_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_cwl_anuncio_cwl_categoria1`
    FOREIGN KEY (`anu_cat_id`)
    REFERENCES `mydb`.`cwl_categoria` (`cat_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_cwl_anuncio_cwl_endereco1`
    FOREIGN KEY (`anu_end_id`)
    REFERENCES `mydb`.`cwl_endereco` (`end_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`cwl_ordem_servico`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`cwl_ordem_servico` ;

CREATE TABLE IF NOT EXISTS `mydb`.`cwl_ordem_servico` (
  `ord_id` INT NOT NULL AUTO_INCREMENT,
  `ord_usu_id` INT NOT NULL,
  `ord_anu_id` INT NOT NULL,
  `ord_data` TIMESTAMP(2) NULL,
  PRIMARY KEY (`ord_id`),
  INDEX `fk_cwl_ordem_servico_cwl_usuario1_idx` (`ord_usu_id` ASC) ,
  INDEX `fk_cwl_ordem_servico_cwl_anuncio1_idx` (`ord_anu_id` ASC) ,
  CONSTRAINT `fk_cwl_ordem_servico_cwl_usuario1`
    FOREIGN KEY (`ord_usu_id`)
    REFERENCES `mydb`.`cwl_usuario` (`usu_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_cwl_ordem_servico_cwl_anuncio1`
    FOREIGN KEY (`ord_anu_id`)
    REFERENCES `mydb`.`cwl_anuncio` (`anu_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
