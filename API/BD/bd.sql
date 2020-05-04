-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema admpc
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema admpc
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `admpc` DEFAULT CHARACTER SET utf8 ;
USE `admpc` ;

-- -----------------------------------------------------
-- Table `admpc`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `admpc`.`usuarios` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(199) NOT NULL,
  `correo` VARCHAR(199) NOT NULL,
  `password` VARCHAR(99) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `admpc`.`banner`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `admpc`.`banner` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombreImg` TEXT NOT NULL,
  `estatus` INT NOT NULL COMMENT '0 = act\n1 = inactivo',
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
