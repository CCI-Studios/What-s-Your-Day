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
