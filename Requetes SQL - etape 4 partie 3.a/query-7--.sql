SELECT SUM(total) AS prix_total_today 
FROM ORDERS 
WHERE orders.date 
BETWEEN "2023-05-06 00:00:00" AND "2023-05-06 23:59:59";