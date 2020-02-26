DELIMITER $$
CREATE DEFINER=`root`@`localhost` 
PROCEDURE `update`(INOUT `name` VARCHAR(70), 
                    INOUT `line` ENUM('Classic Cars','Motorcycles','Planes','Ships','Trains','Trucks and Buses','Vintage Cars'), 
                    INOUT `scale` VARCHAR(10), 
                    INOUT `vendor` VARCHAR(50), 
                    INOUT `description` TEXT, 
                    INOUT `stock` SMALLINT(6), 
                    INOUT `price` DECIMAL(10,2), 
                    INOUT `msrp` DECIMAL(10,2), 
                    INOUT `code` VARCHAR(15))
NO SQL
UPDATE `products` 
SET
	`productName`=name,
    `productLine`=line,
    `productScale`=scale,
    `productVendor`=vendor,
    `productDescription`=description,
    `quantityInStock`=stock,
    `buyPrice`=price,
    `MSRP`=msrp
WHERE products.productCode = code$$
DELIMITER ;
