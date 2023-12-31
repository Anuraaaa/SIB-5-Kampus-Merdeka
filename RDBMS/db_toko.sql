-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema db_toko
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema db_toko
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `db_toko` DEFAULT CHARACTER SET utf8 ;
USE `db_toko` ;

-- -----------------------------------------------------
-- Table `db_toko`.`jenis`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_toko`.`jenis` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nama` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `nama_UNIQUE` (`nama` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_toko`.`produk`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_toko`.`produk` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `kode` CHAR(3) NOT NULL,
  `nama` VARCHAR(45) NOT NULL,
  `harga` DOUBLE NOT NULL,
  `stok` INT NOT NULL,
  `foto` VARCHAR(45) NULL,
  `jenis_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `kode_UNIQUE` (`kode` ASC),
  INDEX `fk_produk_jenis_idx` (`jenis_id` ASC),
  UNIQUE INDEX `nama_UNIQUE` (`nama` ASC),
  CONSTRAINT `fk_produk_jenis`
    FOREIGN KEY (`jenis_id`)
    REFERENCES `db_toko`.`jenis` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_toko`.`pelanggan`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_toko`.`pelanggan` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nama` VARCHAR(45) NOT NULL,
  `hp` VARCHAR(15) NOT NULL,
  `email` VARCHAR(45) NULL,
  `alamat` TEXT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `hp_UNIQUE` (`hp` ASC),
  UNIQUE INDEX `nama_UNIQUE` (`nama` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_toko`.`pesanan`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_toko`.`pesanan` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `kode` VARCHAR(45) NOT NULL,
  `tgl` DATE NULL,
  `produk_id` INT NOT NULL,
  `pelanggan_id` INT NOT NULL,
  `jml` INT NOT NULL,
  `keterangan` TEXT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_pelanggan_has_produk_produk1_idx` (`produk_id` ASC),
  INDEX `fk_pelanggan_has_produk_pelanggan1_idx` (`pelanggan_id` ASC),
  UNIQUE INDEX `kode_UNIQUE` (`kode` ASC),
  CONSTRAINT `fk_pelanggan_has_produk_pelanggan1`
    FOREIGN KEY (`pelanggan_id`)
    REFERENCES `db_toko`.`pelanggan` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pelanggan_has_produk_produk1`
    FOREIGN KEY (`produk_id`)
    REFERENCES `db_toko`.`produk` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_toko`.`retur`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_toko`.`retur` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `kode` VARCHAR(45) NOT NULL,
  `tgl` DATE NULL,
  `jml` INT NOT NULL,
  `keterangan` TEXT NULL,
  `pelanggan_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `kode_UNIQUE` (`kode` ASC),
  INDEX `fk_retur_pelanggan1_idx` (`pelanggan_id` ASC),
  CONSTRAINT `fk_retur_pelanggan1`
    FOREIGN KEY (`pelanggan_id`)
    REFERENCES `db_toko`.`pelanggan` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
