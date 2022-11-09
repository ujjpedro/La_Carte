-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema menu
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema menu
-- -----------------------------------------------------


-- -----------------------------------------------------
-- Table `cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cliente` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(200) NULL,
  `dataNasc` DATE NULL,
  `email` VARCHAR(200) NULL,
  `senha` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `gerente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gerente` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(200) NULL,
  `dataNasc` DATE NULL,
  `cpf` VARCHAR(45) NULL,
  `email` VARCHAR(200) NULL,
  `senha` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `categorias`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `categorias` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `imagem` VARCHAR(200) NULL,
  `nome` VARCHAR(45) NULL,
  `gerente_id` INT NOT NULL,
  PRIMARY KEY (`id`),
    FOREIGN KEY (`gerente_id`)
    REFERENCES `gerente` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pratos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pratos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `imagem` VARCHAR(200) NULL,
  `nome` VARCHAR(45) NULL,
  `ingredientes` VARCHAR(45) NULL,
  `descricao` VARCHAR(200) NULL,
  `preco` DECIMAL(16,2) NULL,
  `categorias_id` INT NOT NULL,
  `gerente_id` INT NOT NULL,
  PRIMARY KEY (`id`),
    FOREIGN KEY (`categorias_id`)
    REFERENCES `categorias` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    FOREIGN KEY (`gerente_id`)
    REFERENCES `gerente` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mesa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mesa` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pedidos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pedidos` (
  `idPed` INT NOT NULL AUTO_INCREMENT,
  `nome_prat` VARCHAR(45) NULL,
  `descricao` VARCHAR(200) NULL,
  `preco` DECIMAL(16,2) NULL,
  `quant` INT NULL,
  `mesa_id` INT NOT NULL,
  PRIMARY KEY (`idPed`),
    FOREIGN KEY (`mesa_id`)
    REFERENCES `mesa` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cozinheiro`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cozinheiro` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(200) NULL,
  `dataNasc` DATE NULL,
  `cpf` VARCHAR(45) NULL,
  `email` VARCHAR(200) NULL,
  `senha` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `carrinho`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `carrinho` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `personalizar` VARCHAR(200) NULL,
  `ingredientes` VARCHAR(200) NULL,
  `preco` DECIMAL(16,2) ZEROFILL NULL,
  `quant` INT NULL,
  `mesa_id` INT NOT NULL,
  `pratos_id` INT NOT NULL,
  PRIMARY KEY (`id`),
    FOREIGN KEY (`mesa_id`)
    REFERENCES `mesa` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    FOREIGN KEY (`pratos_id`)
    REFERENCES `pratos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `promocao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `promocao` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `dia` VARCHAR(45) NULL,
  `imagem` VARCHAR(200) NULL,
  `descricao` VARCHAR(200) NULL,
  `gerente_id` INT NOT NULL,
  `pratos_id` INT NOT NULL,
  PRIMARY KEY (`id`),
    FOREIGN KEY (`gerente_id`)
    REFERENCES `gerente` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    FOREIGN KEY (`pratos_id`)
    REFERENCES `pratos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
