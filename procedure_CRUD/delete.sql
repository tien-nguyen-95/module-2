DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `delete`(IN `id` VARCHAR(15))
    NO SQL
BEGIN
DELETE FROM orderdetails WHERE orderdetails.productCode = id;
DELETE FROM products WHERE products.productCode =id;
END$$
DELIMITER ;