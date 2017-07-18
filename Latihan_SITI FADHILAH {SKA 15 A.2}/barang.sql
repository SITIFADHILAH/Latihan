-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Jun 19, 2017 at 09:22 AM
-- Server version: 5.0.41
-- PHP Version: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `inventori`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `barang`
-- 

CREATE TABLE `barang` (
  `KODE` varchar(5) NOT NULL,
  `NAMA` varchar(20) NOT NULL,
  `KATEGORI` varchar(15) NOT NULL,
  `JUMLAH_POKOK` int(11) NOT NULL,
  `JUMLAH_JUAL` int(11) NOT NULL,
  PRIMARY KEY  (`KODE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `barang`
-- 

