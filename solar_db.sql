-- phpMyAdmin SQL Dump
-- version 2.9.2
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Sep 18, 2023 at 07:47 AM
-- Server version: 5.0.27
-- PHP Version: 5.2.1
-- 
-- Database: `solar`
-- 
CREATE DATABASE `solar` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `solar`;

-- --------------------------------------------------------

-- 
-- Table structure for table `login`
-- 

CREATE TABLE `login` (
  `fname` varchar(10) NOT NULL,
  `lname` varchar(10) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `login`
-- 

INSERT INTO `login` (`fname`, `lname`, `mobile`, `email`, `password`) VALUES 
('ABHAY', 'KEVAT', '2020202020', 'abhaykevat23@gmail.com', '6355363201'),
('king', 'ak', '2020202020', 'abhaykevat6355@gmail.com', '1111111111'),
('ranjeet', 'gdg', '454554', 'chauhanranjeet284@gmail.com', '1010101010'),
('king', 'ak', '3232323232', 'shivam@g.com', '1122334455'),
('abhay', 'gaandu', '2020202020', 'abhaykevat23@gmail.com', '6355363201'),
('hitesh', 'chandnani', '4621475265', 'hitesh@gmail.com', '2222'),
('manav', 'bhagat', '6355363201', 'manav@gmail.com', '3333');

-- --------------------------------------------------------

-- 
-- Table structure for table `products`
-- 

CREATE TABLE `products` (
  `id` int(11) NOT NULL auto_increment,
  `product_name` varchar(30) NOT NULL,
  `price` int(6) NOT NULL,
  `watt` varchar(8) NOT NULL,
  `company_name` varchar(20) NOT NULL,
  `details` varchar(200) NOT NULL,
  `p_img` varchar(30) NOT NULL COMMENT 'main ',
  `p_img1` varchar(20) NOT NULL COMMENT 'second',
  `p_img2` varchar(20) NOT NULL COMMENT 'detail',
  `p_img3` varchar(20) NOT NULL COMMENT 'warranty',
  `p_img4` varchar(20) NOT NULL COMMENT 'height',
  `category` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  `feature` varchar(200) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `product_name` (`product_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

-- 
-- Dumping data for table `products`
-- 

INSERT INTO `products` (`id`, `product_name`, `price`, `watt`, `company_name`, `details`, `p_img`, `p_img1`, `p_img2`, `p_img3`, `p_img4`, `category`, `description`, `feature`) VALUES 
(1, 'Sun Solars', 5000, '100', 'Sun', 'a:11:{i:0;s:4:"165W";i:1;s:6:"22.20W";i:2;s:5:"9.34A";i:3;s:6:"18.20V";i:4;s:5:"9.79A";i:5;s:8:"1000V DC";i:6;s:2:"36";i:7;s:10:"150X20X3.5";i:8;s:5:"INDIA";i:9;s:2:"25";i:10;s:2:"10";}', 's1.jpg', 's3.jpg', 's2.jpg', 'warrenty.jpg', 'height.jpg', 'solar', '165 watt 12 volt pollycristtalion solar panel is an ideal product to  power basic home appliences .', ''),
(2, 'Bright Solars', 8000, '100', 'Bright Stars', 'a:11:{i:0;s:4:"165W";i:1;s:6:"22.20W";i:2;s:5:"9.34A";i:3;s:6:"18.20V";i:4;s:5:"9.79A";i:5;s:8:"1000V DC";i:6;s:2:"36";i:7;s:10:"150X20X3.5";i:8;s:5:"INDIA";i:9;s:2:"25";i:10;s:2:"10";}', 's2.jpg', 'P506.jpeg', 'detail.jpg', 'warrenty.jpg', 'height.jpg', 'solar', '165 watt 12 volt pollycristtalion solar panel is an ideal product to  power basic home appliences .', ''),
(3, 'Zenpulse Solars', 6000, '100', 'Zenpulse', 'a:11:{i:0;s:4:"165W";i:1;s:6:"22.20W";i:2;s:5:"9.34A";i:3;s:6:"18.20V";i:4;s:5:"9.79A";i:5;s:8:"1000V DC";i:6;s:2:"36";i:7;s:10:"150X20X3.5";i:8;s:5:"INDIA";i:9;s:2:"25";i:10;s:2:"10";}', 's3.jpg', 'P506.jpeg', 'detail.jpg', 'warrenty.jpg', 'height.jpg', 'solar', '165 watt 12 volt pollycristtalion solar panel is an ideal product to  power basic home appliences .', ''),
(4, 'Sun Solars 200 watt', 12000, '200', 'Sun', 'a:11:{i:0;s:4:"165W";i:1;s:6:"22.20W";i:2;s:5:"9.34A";i:3;s:6:"18.20V";i:4;s:5:"9.79A";i:5;s:8:"1000V DC";i:6;s:2:"36";i:7;s:10:"150X20X3.5";i:8;s:5:"INDIA";i:9;s:2:"25";i:10;s:2:"10";}', 'P502.jpeg', 'P506.jpeg', 'detail.jpg', 'warrenty.jpg', 'height.jpg', 'solar', '165 watt 12 volt pollycristtalion solar panel is an ideal product to  power basic home appliences .', ''),
(5, 'Bright Solars 200 watt', 14000, '200', 'Bright Stars', 'a:11:{i:0;s:4:"165W";i:1;s:6:"22.20W";i:2;s:5:"9.34A";i:3;s:6:"18.20V";i:4;s:5:"9.79A";i:5;s:8:"1000V DC";i:6;s:2:"36";i:7;s:10:"150X20X3.5";i:8;s:5:"INDIA";i:9;s:2:"25";i:10;s:2:"10";}', 'P504.jpeg', 'P506.jpeg', 'detail.jpg', 'warrenty.jpg', 'height.jpg', 'solar', '165 watt 12 volt pollycristtalion solar panel is an ideal product to  power basic home appliences .', ''),
(6, 'zuuuu', 8000, '200', 'zubbb', 'a:11:{i:0;s:4:"165W";i:1;s:6:"22.20W";i:2;s:5:"9.34A";i:3;s:6:"18.20V";i:4;s:5:"9.79A";i:5;s:8:"1000V DC";i:6;s:2:"36";i:7;s:10:"150X20X3.5";i:8;s:5:"INDIA";i:9;s:2:"25";i:10;s:2:"10";}', 'P506.jpeg', 'P506.jpeg', 'detail.jpg', 'warrenty.jpg', 'height.jpg', 'solar', '165 watt 12 volt pollycristtalion solar panel is an ideal product to  power basic home appliences .', ''),
(7, 'zen battery', 12000, '100', 'zen', 'a:11:{i:0;s:4:"165W";i:1;s:6:"22.20W";i:2;s:5:"9.34A";i:3;s:6:"18.20V";i:4;s:5:"9.79A";i:5;s:8:"1000V DC";i:6;s:2:"36";i:7;s:10:"150X20X3.5";i:8;s:5:"INDIA";i:9;s:2:"25";i:10;s:2:"10";}', 'B2.jpg', 'P506.jpeg', 'detail.jpg', 'warrenty.jpg', 'height.jpg', 'battery', '165 watt 12 volt pollycristtalion solar panel is an ideal product to  power basic home appliences .', ''),
(8, 'new', 0, '000', 'nwe', 'a:11:{i:0;s:4:"165W";i:1;s:6:"22.20W";i:2;s:5:"9.34A";i:3;s:6:"18.20V";i:4;s:5:"9.79A";i:5;s:8:"1000V DC";i:6;s:2:"36";i:7;s:10:"150X20X3.5";i:8;s:5:"INDIA";i:9;s:2:"25";i:10;s:2:"10";}', 'P5001.jpeg', 'P506.jpeg', 'detail.jpg', 'warrenty.jpg', 'height.jpg', 'solar', '165 watt 12 volt pollycristtalion solar panel is an ideal product to  power basic home appliences .', ''),
(9, 'battery', 5000, '100', 'bat', 'a:11:{i:0;s:4:"165W";i:1;s:6:"22.20W";i:2;s:5:"9.34A";i:3;s:6:"18.20V";i:4;s:5:"9.79A";i:5;s:8:"1000V DC";i:6;s:2:"36";i:7;s:10:"150X20X3.5";i:8;s:5:"INDIA";i:9;s:2:"25";i:10;s:2:"10";}', 'P508.jpeg', 'P506.jpeg', 'detail.jpg', 'warrenty.jpg', 'height.jpg', 'battery', '165 watt 12 volt pollycristtalion solar panel is an ideal product to  power basic home appliences .', ''),
(10, 'hightech solars', 15000, '500', 'hexa', 'a:11:{i:0;s:4:"165W";i:1;s:6:"22.20W";i:2;s:5:"9.34A";i:3;s:6:"18.20V";i:4;s:5:"9.79A";i:5;s:8:"1000V DC";i:6;s:2:"36";i:7;s:10:"150X20X3.5";i:8;s:5:"INDIA";i:9;s:2:"25";i:10;s:2:"10";}', 'S4.JPG', 'P506.jpeg', 'detail.jpg', 'warrenty.jpg', 'height.jpg', 'solar', '165 watt 12 volt pollycristtalion solar panel is an ideal product to  power basic home appliences .', ''),
(11, 'neww', 8000, '200', 'zubbb', 'a:11:{i:0;s:4:"165W";i:1;s:6:"22.20W";i:2;s:5:"9.34A";i:3;s:6:"18.20V";i:4;s:5:"9.79A";i:5;s:8:"1000V DC";i:6;s:2:"36";i:7;s:10:"150X20X3.5";i:8;s:5:"INDIA";i:9;s:2:"25";i:10;s:2:"10";}', 'P5001.jpeg', 'P506.jpeg', 'detail.jpg', 'warrenty.jpg', 'height.jpg', 'solar', '165 watt 12 volt pollycristtalion solar panel is an ideal product to  power basic home appliences .', ''),
(12, 'hightech solarss', 8000, '500', 'nwe', 'a:11:{i:0;s:4:"165W";i:1;s:6:"22.20W";i:2;s:5:"9.34A";i:3;s:6:"18.20V";i:4;s:5:"9.79A";i:5;s:8:"1000V DC";i:6;s:2:"36";i:7;s:10:"150X20X3.5";i:8;s:5:"INDIA";i:9;s:2:"25";i:10;s:2:"10";}', 'P2009.jpeg', 'P506.jpeg', 'detail.jpg', 'warrenty.jpg', 'height.jpg', 'solar', '165 watt 12 volt pollycristtalion solar panel is an ideal product to  power basic home appliences .', ''),
(13, 'zuuuuu', 8000, '200', 'zubbb', 'a:11:{i:0;s:4:"165W";i:1;s:6:"22.20W";i:2;s:5:"9.34A";i:3;s:6:"18.20V";i:4;s:5:"9.79A";i:5;s:8:"1000V DC";i:6;s:2:"36";i:7;s:10:"150X20X3.5";i:8;s:5:"INDIA";i:9;s:2:"25";i:10;s:2:"10";}', 'P508.jpeg', 'P506.jpeg', 'detail.jpg', 'warrenty.jpg', 'height.jpg', 'battery', '165 watt 12 volt pollycristtalion solar panel is an ideal product to  power basic home appliences .', ''),
(14, 'zen batteryv', 8000, '500', 'nwe', 'a:11:{i:0;s:4:"165W";i:1;s:6:"22.20W";i:2;s:5:"9.34A";i:3;s:6:"18.20V";i:4;s:5:"9.79A";i:5;s:8:"1000V DC";i:6;s:2:"36";i:7;s:10:"150X20X3.5";i:8;s:5:"INDIA";i:9;s:2:"25";i:10;s:2:"10";}', 'P510.jpeg', 'P506.jpeg', 'detail.jpg', 'warrenty.jpg', 'height.jpg', 'battery', '165 watt 12 volt pollycristtalion solar panel is an ideal product to  power basic home appliences .', ''),
(15, 'zen batterynn', 8000, '200', 'zubbb', 'a:11:{i:0;s:4:"165W";i:1;s:6:"22.20W";i:2;s:5:"9.34A";i:3;s:6:"18.20V";i:4;s:5:"9.79A";i:5;s:8:"1000V DC";i:6;s:2:"36";i:7;s:10:"150X20X3.5";i:8;s:5:"INDIA";i:9;s:2:"25";i:10;s:2:"10";}', 'P507.jpeg', 'P506.jpeg', 'detail.jpg', 'warrenty.jpg', 'height.jpg', 'battery', '165 watt 12 volt pollycristtalion solar panel is an ideal product to  power basic home appliences .', ''),
(16, 'zen batteryw', 8000, '500', 'zubbb', 'a:11:{i:0;s:4:"165W";i:1;s:6:"22.20W";i:2;s:5:"9.34A";i:3;s:6:"18.20V";i:4;s:5:"9.79A";i:5;s:8:"1000V DC";i:6;s:2:"36";i:7;s:10:"150X20X3.5";i:8;s:5:"INDIA";i:9;s:2:"25";i:10;s:2:"10";}', 'B12.JPG', 'P506.jpeg', 'detail.jpg', 'warrenty.jpg', 'height.jpg', 'battery', '165 watt 12 volt pollycristtalion solar panel is an ideal product to  power basic home appliences .', ''),
(17, 'well', 8000, '100', 'zen', 'a:11:{i:0;s:4:"165W";i:1;s:6:"22.20W";i:2;s:5:"9.34A";i:3;s:6:"18.20V";i:4;s:5:"9.79A";i:5;s:8:"1000V DC";i:6;s:2:"36";i:7;s:10:"150X20X3.5";i:8;s:5:"INDIA";i:9;s:2:"25";i:10;s:2:"10";}', 'B12.JPG', 'P506.jpeg', 'detail.jpg', 'warrenty.jpg', 'height.jpg', 'battery', '165 watt 12 volt pollycristtalion solar panel is an ideal product to  power basic home appliences .', ''),
(18, 'last', 40000, '600', 'lost', 'a:11:{i:0;s:4:"165W";i:1;s:6:"22.20w";i:2;s:5:"9.34A";i:3;s:6:"18.20V";i:4;s:5:"8.25A";i:5;s:8:"1000V DC";i:6;s:2:"36";i:7;s:10:"150X67X3.5";i:8;s:5:"INDIA";i:9;s:2:"25";i:10;s:2:"10";}', 's2.JPG', 'shome.jpg', 'detail.jpg', 'warrenty.jpg', 'height.jpg', 'solar', '165 watt 12 volt pollycristtalion solar panel is an ideal product to  power basic home appliences .', ''),
(19, 'deep', 0, '1000', 'deep', 'a:11:{i:0;s:4:"165W";i:1;s:4:"165W";i:2;s:4:"9.3A";i:3;s:6:"18.20A";i:4;s:5:"8.70A";i:5;s:8:"1000DC V";i:6;s:2:"36";i:7;s:3:"150";i:8;s:5:"INDIA";i:9;s:2:"25";i:10;s:2:"10";}', 's11.jpg', 'P506.jpeg', 'detail.jpg', 'warrenty.jpg', 'height.jpg', 'solar', '165 watt 12 volt pollycristtalion solar panel is an ideal product to  power basic home appliences .', 'a:5:{i:0;s:21:"High Energy Convesion";i:1;s:16:"Maintenence Free";i:2;s:24:"Hassle Free Installetion'),
(20, 'sky solar 165 volt', 12000, '5000', 'sky solars', 'a:11:{i:0;s:4:"165W";i:1;s:6:"22.20v";i:2;s:5:"9.34A";i:3;s:6:"18.20V";i:4;s:5:"8.79A";i:5;s:8:"1000V DC";i:6;s:2:"36";i:7;s:10:"150x67x3.6";i:8;s:5:"India";i:9;s:2:"24";i:10;s:2:"11";}', 'P2002.jpeg', 'P505.jpeg', 'detail.jpg', 'warrenty.jpg', 'height.jpg', 'solar', '165 watt 12 volt pollycristtalion solar panel is an ideal product to  power basic home appliences .', 'a:5:{i:0;s:21:"High Energy Convesion";i:1;s:16:"Maintenence Free";i:2;s:24:"Hassle Free Installetion'),
(21, 'sky solar 165 volt 2', 12000, '5000', 'sky solars', 'a:11:{i:0;s:4:"165W";i:1;s:6:"22.20v";i:2;s:5:"9.34a";i:3;s:6:"18.20V";i:4;s:4:"8.79";i:5;s:8:"1000V DC";i:6;s:2:"35";i:7;s:11:"150x167x3.6";i:8;s:5:"India";i:9;s:2:"25";i:10;s:2:"10";}', 'P504.jpeg', 'P503.jpeg', 'detail.jpg', 'warrenty.jpg', 'height.jpg', 'solar', 'this is real', 'a:5:{i:0;s:21:"High Energy Convesion";i:1;s:21:"High Energy Convesion";i:2;s:3:"eee";i:3;s:2:"ee";i:'),
(22, 'sky solar 165 volt 3', 12000, '5000', 'sky solars', 'a:11:{i:0;s:4:"165W";i:1;s:6:"22.20v";i:2;s:5:"9.34a";i:3;s:6:"18.20V";i:4;s:4:"8.79";i:5;s:8:"1000V DC";i:6;s:2:"35";i:7;s:11:"150x167x3.6";i:8;s:5:"India";i:9;s:2:"25";i:10;s:2:"10";}', 'P504.jpeg', 'P503.jpeg', 'detail.jpg', 'warrenty.jpg', 'height.jpg', 'solar', 'this is real', 'a:5:{i:0;s:21:"High Energy Convesion";i:1;s:21:"High Energy Convesion";i:2;s:3:"eee";i:3;s:2:"ee";i:4;s:4:"wwww";}');
