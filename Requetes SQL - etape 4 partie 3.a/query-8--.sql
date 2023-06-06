SELECT order.id, order.total
FROM ORDERS 
JOIN CUSTOMERS 
ON customer_id = id;