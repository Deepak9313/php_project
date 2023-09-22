drop table `ecommerce_project`.`user_accounts`;
drop table `ecommerce_project`.`products`;

-- CREATION OF USER ACCOUNTS TABLE
CREATE TABLE `ecommerce_project`.`user_accounts` (`user_id` INT(255) NOT NULL AUTO_INCREMENT ,
 `name` VARCHAR(255) NOT NULL , `password` VARCHAR(255) NOT NULL , `lastname` VARCHAR(255) NOT NULL ,
  `email` VARCHAR(255) NOT NULL , `contact` VARCHAR(255) NOT NULL , `address` VARCHAR(255) NOT NULL , 
  `pincode` INT(255) NOT NULL , `delivery_address` VARCHAR(255) NOT NULL , PRIMARY KEY (`user_id`)) ENGINE = InnoDB;
  --product table
  CREATE TABLE `ecommerce_project`.`products` (`product_id` INT(255) NOT NULL AUTO_INCREMENT , `product_name` VARCHAR(255) NOT NULL , `product_price` INT(255) NOT NULL , `product_description` VARCHAR(255) NOT NULL , `stock` INT(255) NOT NULL , `brand` VARCHAR(255) NOT NULL , `category` VARCHAR(255) NOT NULL , `image` VARCHAR(255) NOT NULL , `timestamp` DATETIME NOT NULL , PRIMARY KEY (`product_id`)) ENGINE = InnoDB;