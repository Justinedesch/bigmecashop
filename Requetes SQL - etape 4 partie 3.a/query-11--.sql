SELECT sum(orders.total),customers.first_name, customers.last_name 
FROM CUSTOMERS 
JOIN ORDERS 
ON customers.id = orders.customer_id 
GROUP BY first_name;