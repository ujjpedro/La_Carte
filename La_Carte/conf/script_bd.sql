-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema menu
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema menu
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `menu` DEFAULT CHARACTER SET utf8 ;
USE `menu` ;

-- -----------------------------------------------------
-- Table `menu`.`cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `menu`.`cliente` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(200) NULL,
  `dataNasc` DATE NULL,
  `email` VARCHAR(200) NULL,
  `senha` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `menu`.`gerente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `menu`.`gerente` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(200) NULL,
  `dataNasc` DATE NULL,
  `cpf` VARCHAR(45) NULL,
  `email` VARCHAR(200) NULL,
  `senha` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `menu`.`categorias`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `menu`.`categorias` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL,
  `gerente_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_categorias_gerente1_idx` (`gerente_id` ASC),
  CONSTRAINT `fk_categorias_gerente1`
    FOREIGN KEY (`gerente_id`)
    REFERENCES `menu`.`gerente` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `menu`.`pratos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `menu`.`pratos` (
  `idPrat` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL,
  `ingredientes` VARCHAR(45) NULL,
  `descricao` VARCHAR(200) NULL,
  `preco` DECIMAL(16,2) NULL,
  `categorias_id` INT NOT NULL,
  `gerente_id` INT NOT NULL,
  PRIMARY KEY (`idPrat`),
  INDEX `fk_pratos_categorias1_idx` (`categorias_id` ASC),
  INDEX `fk_pratos_gerente1_idx` (`gerente_id` ASC),
  CONSTRAINT `fk_pratos_categorias1`
    FOREIGN KEY (`categorias_id`)
    REFERENCES `menu`.`categorias` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pratos_gerente1`
    FOREIGN KEY (`gerente_id`)
    REFERENCES `menu`.`gerente` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `menu`.`cozinheiro`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `menu`.`cozinheiro` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(200) NULL,
  `dataNasc` DATE NULL,
  `cpf` VARCHAR(45) NULL,
  `email` VARCHAR(200) NULL,
  `senha` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `menu`.`pedidos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `menu`.`pedidos` (
  `idPed` INT NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(200) NULL,
  `cozinheiro_id` INT NOT NULL,
  `cliente_id` INT NOT NULL,
  PRIMARY KEY (`idPed`),
  INDEX `fk_pedidos_cozinheiro1_idx` (`cozinheiro_id` ASC),
  INDEX `fk_pedidos_cliente1_idx` (`cliente_id` ASC),
  CONSTRAINT `fk_pedidos_cozinheiro1`
    FOREIGN KEY (`cozinheiro_id`)
    REFERENCES `menu`.`cozinheiro` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pedidos_cliente1`
    FOREIGN KEY (`cliente_id`)
    REFERENCES `menu`.`cliente` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `menu`.`pedidos_has_pratos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `menu`.`pedidos_has_pratos` (
  `pedidos_idPed` INT NOT NULL,
  `pratos_idPrat` INT NOT NULL,
  PRIMARY KEY (`pedidos_idPed`, `pratos_idPrat`),
  INDEX `fk_pedidos_has_pratos_pratos1_idx` (`pratos_idPrat` ASC),
  INDEX `fk_pedidos_has_pratos_pedidos1_idx` (`pedidos_idPed` ASC),
  CONSTRAINT `fk_pedidos_has_pratos_pedidos1`
    FOREIGN KEY (`pedidos_idPed`)
    REFERENCES `menu`.`pedidos` (`idPed`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pedidos_has_pratos_pratos1`
    FOREIGN KEY (`pratos_idPrat`)
    REFERENCES `menu`.`pratos` (`idPrat`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
