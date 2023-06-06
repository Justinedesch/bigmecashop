DELETE FROM customers

WHERE orders.customer_id = NULL;
