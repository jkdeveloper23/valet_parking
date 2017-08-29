-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2017 at 05:35 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `valet_parking`
--
CREATE DATABASE IF NOT EXISTS `valet_parking` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `valet_parking`;

-- --------------------------------------------------------

--
-- Table structure for table `contratista`
--

CREATE TABLE `contratista` (
  `rifci_contratista` int(15) NOT NULL,
  `nombre_cont` varchar(30) NOT NULL,
  `telf_cont` varchar(15) NOT NULL,
  `correo_cont` varchar(30) NOT NULL,
  `tipo_cont` varchar(12) NOT NULL,
  `direccion_cont` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `contrato`
--

CREATE TABLE `contrato` (
  `id_contrato` int(10) NOT NULL,
  `rifci_contratista` int(15) NOT NULL,
  `cid_emp` int(20) NOT NULL,
  `fecha_ini` datetime NOT NULL,
  `fecha_fin` datetime NOT NULL,
  `descripcion_con` varchar(140) NOT NULL,
  `cant_emp` int(10) NOT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `empleados`
--

CREATE TABLE `empleados` (
  `nombre_emp` varchar(20) NOT NULL,
  `ape_emp` varchar(20) NOT NULL,
  `cid_emp` int(20) NOT NULL,
  `telf_emp` varchar(20) NOT NULL,
  `correo_emp` varchar(30) NOT NULL,
  `genero_emp` varchar(45) NOT NULL,
  `foto_emp` varchar(150) NOT NULL,
  `status_emp` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `nombre_admin` varchar(30) NOT NULL,
  `apellido_admin` varchar(30) NOT NULL,
  `cedula_admin` int(20) NOT NULL,
  `telf_admin` varchar(15) NOT NULL,
  `correo_admin` varchar(30) NOT NULL,
  `password_admin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contratista`
--
ALTER TABLE `contratista`
  ADD PRIMARY KEY (`rifci_contratista`);

--
-- Indexes for table `contrato`
--
ALTER TABLE `contrato`
  ADD PRIMARY KEY (`id_contrato`),
  ADD KEY `rifci_contratista_idx` (`rifci_contratista`),
  ADD KEY `cid_emp_idx` (`cid_emp`);

--
-- Indexes for table `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`cid_emp`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`cedula_admin`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contrato`
--
ALTER TABLE `contrato`
  ADD CONSTRAINT `cid_emp` FOREIGN KEY (`cid_emp`) REFERENCES `empleados` (`cid_emp`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `rifci_contratista` FOREIGN KEY (`rifci_contratista`) REFERENCES `contratista` (`rifci_contratista`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
