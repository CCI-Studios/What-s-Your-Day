CREATE TABLE IF NOT EXISTS`#__wyd_days` (
	`wyd_day_id` SERIAL,
	
	`title` VARCHAR(250) NOT NULL,
	`filename` VARCHAR(250) NOT NULL,
	`description` TEXT NOT NULL,
	`date` DATE NOT NULL,
	`link` VARCHAR(250) NOT NULL,
	`target` VARCHAR(10) NOT NULL DEFAULT "_blank",
	`dedication` VARCHAR(250) NOT NULL,
	`enabled` TINYINT(1) NOT NULL,
	
	`user_id` INT(11) NOT NULL,
	`locked_at` DATETIME NOT NULL,
	
	`facebook` TINYINT(1) NOT NULL,
	`flickr` TINYINT(1) NOT NULL,
	`email` TINYINT(1) NOT NULL,
	`radio` TINYINT(1) NOT NULL
) ENGINE = MYISAM;

CREATE TABLE IF NOT EXISTS `#__wyd_sponsorships` (
	`wyd_sponsorship_id` SERIAL,
	
	`title` VARCHAR(250) NOT NULL,
	`url` VARCHAR(250) NOT NULL,
	`target` VARCHAR(20) NOT NULL DEFAULT "_blank",
	`filename` VARCHAR(250) NOT NULL,
	`month` INT(2),
	`year` INT(4)
) ENGINE = MYISAM;

CREATE TABLE IF NOT EXISTS `#__wyd_transactions` (
	`wyd_transaction_id` SERIAL,
	
	# purchase details
	`date` DATETIME NOT NULL,
	`status` TINYINT(1) NOT NULL DEFAULT '1',
	`amt` FLOAT,
	`currencycode` VARCHAR(3) NOT NULL,
	`wyd_day_ids` VARCHAR(100) NOT NULL,
	
	# user details
	`ip` VARCHAR(15) NOT NULL,
	`card` VARCHAR(10) NOT NULL,
	`number` VARCHAR(15) NOT NULL,
	`firstname` VARCHAR(150) NOT NULL,
	`lastname` VARCHAR(150) NOT NULL,
	`street1` VARCHAR(50) NOT NULL,
	`street2` VARCHAR(50) NOT NULL,
	`city` VARCHAR(100) NOT NULL,
	`state` VARCHAR(100) NOT NULL,
	`zip` VARCHAR(10) NOT NULL,
	`county` VARCHAR(10) NOT NULL,
	
	# paypal details
	`timestamp` VARCHAR(50) NOT NULL,
	`correlationid` VARCHAR(150) NOT NULL,
	`ack` VARCHAR(10) NOT NULL,
	`version` VARCHAR(10) NOT NULL,
	`build` VARCHAR(10) NOT NULL,
	`avscode` VARCHAR(50) NOT NULL,
	`cvv2` VARCHAR(10) NOT NULL,
	`transactionid` VARCHAR(150) NOT NULL,
	
	`user_id` INT(11) NOT NULL,
	`uuid` CHAR(36) NOT NULL
) ENGINE = MYISAM;
