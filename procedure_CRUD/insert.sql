DELIMITER $$
CREATE DEFINER=`root`@`localhost` 
PROCEDURE `insert`(INOUT `Code` VARCHAR(11),
                    INOUT `Name` VARCHAR(70),
                    INOUT `Line` ENUM('Classic Cars','Motorcycles','Planes','Ships','Trains','Trucks and Buses','Vintage Cars'),
                    INOUT `Scale` VARCHAR(10),
                    INOUT `Vendor` VARCHAR(50), 
                    INOUT `Description` TEXT, 
                    INOUT `InStock` SMALLINT(6), 
                    INOUT `Price` DECIMAL(10,2), 
                    INOUT `MSR` DECIMAL(10,2))
BEGIN
INSERT INTO products(productCode, productName, productLine, productScale, productVendor, productDescription, quantityInStock, buyPrice, MSRP) 
VALUES (Code, Name, Line, Scale, Vendor, Description, InStock, Price, MSR);
END$$
DELIMITER ;
