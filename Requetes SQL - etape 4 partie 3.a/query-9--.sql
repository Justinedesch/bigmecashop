SELECT orders.id, orders.total 
FROM ORDERS 
JOIN CUSTOMERS ON customer_id = customers.id;