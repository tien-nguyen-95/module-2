DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `display`()
BEGIN SELECT products.productCode,
            products.productName,
            productlines.textDescription,
            products.productScale,
            products.productVendor,
            products.productDescription,
            products.quantityInStock,
            products.buyPrice,
            products.MSRP 
FROM products 
JOIN productlines 
ON products.productLine = productlines.productLine; 
END$$
DELIMITER ;