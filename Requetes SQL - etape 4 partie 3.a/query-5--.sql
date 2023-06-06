SELECT order_product.quantity, products.name, products.price 
FROM products 
JOIN order_product 
ON id = product_id
WHERE order_product.id = 1;