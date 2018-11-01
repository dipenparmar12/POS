CREATE TABLE `category` (
	`id` INT(30) NOT NULL AUTO_INCREMENT,
	`name` varchar(190) NOT NULL UNIQUE,
	`nick_name` varchar(190) NOT NULL UNIQUE,
	`desc` varchar(190),
	`img` varchar(190),
	`company_id` INT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `sub_category` (
	`id` INT(30) NOT NULL AUTO_INCREMENT,
	`category_id` INT(30) NOT NULL,
	`name` INT(190) NOT NULL UNIQUE,
	`nick_name` INT(190) NOT NULL UNIQUE,
	`desc` varchar(190),
	`img` varchar(190),
	`company_id` INT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Item` (
	`id` INT(30) NOT NULL AUTO_INCREMENT,
	`cat_id` INT NOT NULL,
	`name` varchar(190) NOT NULL,
	`price` varchar(190) NOT NULL,
	`stock` varchar(190) NOT NULL,
	`desc` varchar(190),
	`img` varchar(190),
	`company_id` INT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `order_detail` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`table_id` INT NOT NULL,
	`item_id` INT NOT NULL,
	`item_qty` DECIMAL NOT NULL,
	`time` TIMESTAMP NOT NULL,
	`note` varchar(190) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `order` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`customer_id` INT NOT NULL,
	`order_detail_id` INT(10) NOT NULL,
	`date` TIMESTAMP NOT NULL,
	`status` varchar(30) NOT NULL,
	`paid` varchar(30) NOT NULL,
	`amount` DECIMAL NOT NULL,
	`discount` DECIMAL NOT NULL,
	`bill_printed` BOOLEAN NOT NULL DEFAULT '0',
	`type` varchar(40) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `customer` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`f_name` varchar(50) NOT NULL,
	`m_name` varchar(50),
	`l_name` INT(50),
	`mobile` varchar(30),
	`mobile1` varchar(30),
	`address` varchar(190),
	`address1` varchar(190),
	`city` varchar(50),
	`pin_code` varchar(20),
	`credit_limit` DECIMAL(65),
	PRIMARY KEY (`id`)
);

CREATE TABLE `table` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`status` varchar(30) NOT NULL DEFAULT 'free',
	`part` varchar(30) NOT NULL DEFAULT '1',
	`comment` varchar(190) DEFAULT '1',
	PRIMARY KEY (`tbl_id`)
);

CREATE TABLE `employees` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`name` varchar(40) NOT NULL,
	`gender` INT NOT NULL,
	`birth_date` TIMESTAMP NOT NULL,
	`hire_date` TIMESTAMP NOT NULL,
	`position` varchar(40) NOT NULL,
	`add` varchar(190) NOT NULL,
	`mobile` INT(30) NOT NULL,
	`img` varchar(190) NOT NULL,
	`desc` varchar(190),
	`depa_id` INT NOT NULL,
	`hour_rate` varchar(40) NOT NULL,
	`day_rate` DECIMAL NOT NULL,
	`advance_limit` DECIMAL(190),
	PRIMARY KEY (`id`)
);

CREATE TABLE `department` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`name` varchar(40) NOT NULL,
	`desc` varchar(190) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `salary` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`e_id` INT NOT NULL,
	`from_date` TIMESTAMP NOT NULL,
	`to_date` TIMESTAMP NOT NULL,
	`paid` BOOLEAN NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `e_leave` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`e_id` INT NOT NULL,
	`from_date` TIMESTAMP NOT NULL,
	`to_date` TIMESTAMP NOT NULL,
	`reason` varchar(190),
	`total_days` INT NOT NULL,
	`deduction` DECIMAL(190) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `shift` (

);

CREATE TABLE `advance` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`e_id` INT NOT NULL,
	`rs` DECIMAL(190) NOT NULL,
	`date` TIMESTAMP NOT NULL,
	`reason` DECIMAL(190) NOT NULL,
	`received` BOOLEAN NOT NULL,
	`received_date` TIMESTAMP NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `bonus` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`rs` DECIMAL(190) NOT NULL,
	`e_id` INT NOT NULL,
	`month` varchar(40) NOT NULL,
	`desc` varchar(190) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `payment_method` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`payment_type` varchar(190) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `transition` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`payment_method_id` INT NOT NULL,
	`order_id` INT NOT NULL,
	`amount` DECIMAL(100) NOT NULL,
	`transition_date` TIMESTAMP NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `credit_master` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`customer_id` INT NOT NULL,
	`order_id` INT NOT NULL,
	`paid_amout` DECIMAL NOT NULL,
	`payment_date` TIMESTAMP NOT NULL,
	`transition_id` INT NOT NULL,
	`diff_amount` DECIMAL(50) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `company` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`company_name` varchar(190) NOT NULL,
	`company_type` varchar(190) NOT NULL,
	PRIMARY KEY (`id`)
);

ALTER TABLE `category` ADD CONSTRAINT `category_fk0` FOREIGN KEY (`company_id`) REFERENCES `company`(`id`);

ALTER TABLE `sub_category` ADD CONSTRAINT `sub_category_fk0` FOREIGN KEY (`category_id`) REFERENCES `category`(`id`);

ALTER TABLE `Item` ADD CONSTRAINT `Item_fk0` FOREIGN KEY (`item_cat_id`) REFERENCES `sub_category`(`id`);

ALTER TABLE `order_detail` ADD CONSTRAINT `order_detail_fk0` FOREIGN KEY (`table_id`) REFERENCES `table`(`tbl_id`);

ALTER TABLE `order_detail` ADD CONSTRAINT `order_detail_fk1` FOREIGN KEY (`item_id`) REFERENCES `Item`(`id`);

ALTER TABLE `order` ADD CONSTRAINT `order_fk0` FOREIGN KEY (`o_customer_id`) REFERENCES `customer`(`id`);

ALTER TABLE `order` ADD CONSTRAINT `order_fk1` FOREIGN KEY (`o_order_detail_id`) REFERENCES `order_detail`(`id`);

ALTER TABLE `employees` ADD CONSTRAINT `employees_fk0` FOREIGN KEY (`e_depa_id`) REFERENCES `department`(`depa_id`);

ALTER TABLE `salary` ADD CONSTRAINT `salary_fk0` FOREIGN KEY (`sal_e_id`) REFERENCES `employees`(`e_id`);

ALTER TABLE `e_leave` ADD CONSTRAINT `e_leave_fk0` FOREIGN KEY (`leave_e_id`) REFERENCES `employees`(`e_id`);

ALTER TABLE `advance` ADD CONSTRAINT `advance_fk0` FOREIGN KEY (`adv_e_id`) REFERENCES `employees`(`e_id`);

ALTER TABLE `bonus` ADD CONSTRAINT `bonus_fk0` FOREIGN KEY (`bns_e_id`) REFERENCES `employees`(`e_id`);

ALTER TABLE `transition` ADD CONSTRAINT `transition_fk0` FOREIGN KEY (`payment_method_id`) REFERENCES `payment_method`(`id`);

ALTER TABLE `transition` ADD CONSTRAINT `transition_fk1` FOREIGN KEY (`order_id`) REFERENCES `order`(`id`);

ALTER TABLE `credit_master` ADD CONSTRAINT `credit_master_fk0` FOREIGN KEY (`customer_id`) REFERENCES `customer`(`id`);

ALTER TABLE `credit_master` ADD CONSTRAINT `credit_master_fk1` FOREIGN KEY (`transition_id`) REFERENCES `transition`(`id`);

