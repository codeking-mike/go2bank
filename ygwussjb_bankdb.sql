-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 26, 2024 at 12:45 PM
-- Server version: 5.7.42
-- PHP Version: 8.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ygwussjb_bankdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank_users`
--

CREATE TABLE `bank_users` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(40) DEFAULT NULL,
  `lastname` varchar(40) DEFAULT NULL,
  `middle_name` varchar(30) DEFAULT NULL,
  `login_id` varchar(7) DEFAULT NULL,
  `phone_no` varchar(120) DEFAULT NULL,
  `user_email` varchar(120) DEFAULT NULL,
  `user_password` varchar(20) DEFAULT NULL,
  `city` varchar(60) DEFAULT NULL,
  `country` varchar(40) DEFAULT NULL,
  `is_admin` varchar(3) DEFAULT NULL,
  `blocked` varchar(3) DEFAULT NULL,
  `date_joined` date DEFAULT NULL,
  `state` text,
  `home_address` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank_users`
--

INSERT INTO `bank_users` (`user_id`, `firstname`, `lastname`, `middle_name`, `login_id`, `phone_no`, `user_email`, `user_password`, `city`, `country`, `is_admin`, `blocked`, `date_joined`, `state`, `home_address`) VALUES
(1, 'Admin', 'Grenbullfx', NULL, NULL, '098098088090', 'admin@admin.com', 'admin1234', NULL, 'Benin', 'yes', 'no', '2023-10-10', NULL, NULL),
(20, 'Nelson', 'Jackson', NULL, '100701', '(470) 541-3601', 'nel.jack555@gmail.com', 'nelson166', NULL, NULL, 'no', NULL, '2024-07-30', NULL, '640 Beachcomber Ln Virginia Beach, VA 23451'),
(21, 'Nelson', 'Jackson', NULL, '537555', '(470) 541-3601', 'nel.jack@gmail.com', 'Nelson007$', NULL, NULL, 'no', NULL, '2024-08-10', NULL, '640 Beachcomber Ln Virginia Beach, VA 23451');

-- --------------------------------------------------------

--
-- Table structure for table `beneficiaries`
--

CREATE TABLE `beneficiaries` (
  `ben_id` int(11) NOT NULL,
  `ben_type` varchar(14) DEFAULT NULL,
  `account_name` varchar(60) DEFAULT NULL,
  `bank_name` varchar(60) DEFAULT NULL,
  `account_number` varchar(15) DEFAULT NULL,
  `bank_code_type` varchar(10) DEFAULT NULL,
  `bank_code` varchar(10) DEFAULT NULL,
  `account_type` varchar(11) DEFAULT NULL,
  `address1` text,
  `address2` text,
  `city` varchar(20) DEFAULT NULL,
  `state` varchar(30) DEFAULT NULL,
  `country` varchar(30) DEFAULT NULL,
  `postal_code` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beneficiaries`
--

INSERT INTO `beneficiaries` (`ben_id`, `ben_type`, `account_name`, `bank_name`, `account_number`, `bank_code_type`, `bank_code`, `account_type`, `address1`, `address2`, `city`, `state`, `country`, `postal_code`) VALUES
(20, 'local', 'James Baddock', 'Wes Fargo', '9080800909', NULL, '2345', 'Savings', NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'local', 'John Hublot', 'JP Morgan', '787788899', NULL, '12345', 'Savings', NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'local', 'Maddie Bakwe', 'JP Morgan', '89999990', NULL, '6788', 'Savings', NULL, NULL, NULL, NULL, NULL, NULL),
(23, NULL, 'Maddie Bakwe', 'Wes Fargo', '89999990', NULL, '6788', 'Savings', NULL, NULL, NULL, NULL, NULL, NULL),
(24, NULL, 'Paul Gasso', 'JP Morgan', '43535544546', NULL, '1289', 'Savings', NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'Local', 'Tunji Bamishigbim', 'Chase Bank', '87889998', 'ABA', '67778', '', 'rettrtrry', '', 'Los Angeles', 'California', 'UNITED STATES', '');

-- --------------------------------------------------------

--
-- Table structure for table `external_transfers`
--

CREATE TABLE `external_transfers` (
  `fund_id` int(11) NOT NULL,
  `from_account` varchar(10) DEFAULT NULL,
  `recipient` varchar(30) NOT NULL,
  `recipient_nickname` varchar(30) DEFAULT NULL,
  `amount` varchar(11) NOT NULL,
  `routing_no` varchar(11) NOT NULL,
  `bank_name` varchar(40) DEFAULT NULL,
  `account_type` varchar(10) NOT NULL,
  `account_no` varchar(20) NOT NULL,
  `sent_date` timestamp NULL DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `external_transfers`
--

INSERT INTO `external_transfers` (`fund_id`, `from_account`, `recipient`, `recipient_nickname`, `amount`, `routing_no`, `bank_name`, `account_type`, `account_no`, `sent_date`, `status`) VALUES
(3, 'savings', 'James Baddock', '', '2000', '2345', 'Wes Fargo', 'Savings', '9080800909', '2024-05-13 23:00:00', 'pending'),
(6, 'checking', 'John Hublot', 'jh', '10000', '12345', 'JP Morgan', 'Savings', '787788899', '2024-05-14 23:00:00', 'completed'),
(7, 'savings', 'Maddie Bakwe', 'md', '2000', '6788', 'JP Morgan', 'Savings', '89999990', '2024-05-13 23:00:00', 'completed'),
(9, 'savings', 'Maddie Bakwe', 'md', '500', '6788', 'JP Morgan', 'Savings', '89999990', '2024-05-14 23:00:00', 'completed'),
(12, 'savings', 'Paul Gasso', 'PG', '2000', '1289', 'JP Morgan', 'Savings', '43535544546', '2024-05-14 23:00:00', 'completed'),
(13, 'savings', 'Tunji Bamishigbim', NULL, '3000', '67778', 'Chase Bank', '', '87889998', '2024-05-15 23:00:00', 'completed');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `message` longtext,
  `title` text NOT NULL,
  `message_time` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `sender` varchar(30) DEFAULT NULL,
  `receiver` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `savings_account`
--

CREATE TABLE `savings_account` (
  `cid` int(11) NOT NULL,
  `user_id` varchar(30) DEFAULT NULL,
  `available_balance` varchar(20) DEFAULT NULL,
  `account_type` varchar(20) DEFAULT NULL,
  `account_number` varchar(20) DEFAULT NULL,
  `routing_no` varchar(10) DEFAULT NULL,
  `date_opened` date DEFAULT NULL,
  `last_statement_date` date DEFAULT NULL,
  `current_balance` varchar(20) DEFAULT NULL,
  `total_available` varchar(20) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `support`
--

CREATE TABLE `support` (
  `mid` int(11) NOT NULL,
  `sender` varchar(40) NOT NULL,
  `title` text NOT NULL,
  `message` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `support`
--

INSERT INTO `support` (`mid`, `sender`, `title`, `message`, `status`) VALUES
(410, 'Toddy', 'Testing', 'Okay', 1);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `tid` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `transid` int(11) DEFAULT NULL,
  `transaction_type` varchar(30) DEFAULT NULL,
  `transaction_type2` varchar(16) DEFAULT NULL,
  `description` text,
  `amount` varchar(20) DEFAULT NULL,
  `from_account` varchar(14) DEFAULT NULL,
  `to_account` varchar(14) DEFAULT NULL,
  `transaction_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`tid`, `user_id`, `transid`, `transaction_type`, `transaction_type2`, `description`, `amount`, `from_account`, `to_account`, `transaction_date`) VALUES
(13, 20, NULL, 'Debit', 'payment', 'Farm', '65000', NULL, NULL, '2024-05-13 10:30:38'),
(14, 20, NULL, 'Debit', 'payment', 'Animal food', '1500', NULL, NULL, '2024-05-13 10:05:55'),
(15, 20, NULL, 'Deposit', 'payment', 'Integrity Telecom, Inc.', '120000', NULL, NULL, '2024-05-01 04:56:00'),
(16, 20, NULL, 'Debit', 'purchase', 'Online shopping', '1200', NULL, NULL, '2024-05-04 03:57:22'),
(17, 21, NULL, 'Debit', 'payment', 'deciduous trees', '150000', NULL, NULL, '2024-08-06 10:43:19'),
(20, 21, NULL, 'Debit', 'purchase', 'Ground Control Station GCSD5 ', '129970', NULL, NULL, '2024-08-09 09:15:45'),
(21, 21, NULL, 'Deposit', 'payment', 'Monopine cell towers', '350000', NULL, NULL, '2024-08-09 10:12:36'),
(22, 21, NULL, 'Debit', 'payment', 'Workers part payment', '25000', NULL, NULL, '2024-08-08 10:56:09');

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `cid` int(11) NOT NULL,
  `user_id` varchar(30) DEFAULT NULL,
  `available_balance` varchar(20) DEFAULT NULL,
  `account_type` varchar(20) DEFAULT NULL,
  `account_number` varchar(20) DEFAULT NULL,
  `routing_no` varchar(10) DEFAULT NULL,
  `date_opened` date DEFAULT NULL,
  `last_statement_date` date DEFAULT NULL,
  `current_balance` varchar(20) DEFAULT NULL,
  `total_available` varchar(20) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`cid`, `user_id`, `available_balance`, `account_type`, `account_number`, `routing_no`, `date_opened`, `last_statement_date`, `current_balance`, `total_available`, `status`) VALUES
(124, 'JOHN NDEH TIBA  ', '650010381', NULL, NULL, NULL, '0000-00-00', '0000-00-00', 'momo', '', ''),
(125, '19', '2800000.00', 'savings', '90890900344', '2340', '2024-04-08', '2024-05-01', '18000', '25000', 'active'),
(127, '20', '1460643.46', NULL, '0220', NULL, NULL, NULL, NULL, NULL, NULL),
(128, '21', '2460643.49', NULL, '5228', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wire_transfers`
--

CREATE TABLE `wire_transfers` (
  `wire_id` int(11) NOT NULL,
  `from_account` varchar(10) DEFAULT NULL,
  `recipient` varchar(30) NOT NULL,
  `recipient_nickname` varchar(30) DEFAULT NULL,
  `amount` varchar(11) NOT NULL,
  `routing_no` varchar(11) NOT NULL,
  `bank_name` varchar(40) DEFAULT NULL,
  `account_type` varchar(10) NOT NULL,
  `account_no` varchar(20) NOT NULL,
  `sent_date` timestamp NULL DEFAULT NULL,
  `currency` varchar(10) DEFAULT NULL,
  `wire_type` varchar(20) DEFAULT NULL,
  `wire_status` varchar(10) DEFAULT NULL,
  `reference` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank_users`
--
ALTER TABLE `bank_users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `beneficiaries`
--
ALTER TABLE `beneficiaries`
  ADD PRIMARY KEY (`ben_id`);

--
-- Indexes for table `external_transfers`
--
ALTER TABLE `external_transfers`
  ADD PRIMARY KEY (`fund_id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `savings_account`
--
ALTER TABLE `savings_account`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `support`
--
ALTER TABLE `support`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `wire_transfers`
--
ALTER TABLE `wire_transfers`
  ADD PRIMARY KEY (`wire_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank_users`
--
ALTER TABLE `bank_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `beneficiaries`
--
ALTER TABLE `beneficiaries`
  MODIFY `ben_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `external_transfers`
--
ALTER TABLE `external_transfers`
  MODIFY `fund_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `savings_account`
--
ALTER TABLE `savings_account`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `support`
--
ALTER TABLE `support`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=411;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `wire_transfers`
--
ALTER TABLE `wire_transfers`
  MODIFY `wire_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
