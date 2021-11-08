Route BackEnd WorkShop [Data Base]
------------------------------------------------

Low Concepts:
select,Insert , delete , update 
where , In , Between , Distinct , 

Med Concepts:
Count , Avg , Sum ,Min,Max, Aliases , Union,limit
Nested Qurieis , OrderBy , Like , IS NOT NULL

High Concepts:
Group by - Having , 
Join ON [inner , self,Full  ] 
Primary key and foreign kery 


Advanced Quiries 
Ref:
https://www.w3schools.com/sql/sql_wildcards.asp
Download db 
https://github.com/hhorak/mysql-sample-db

Datbase Schema :
------------------------
Customers
=============
customerNumber
customerName	
contactLastName
contactFirstName
phone
addressLine1
addressLine2
city
state
postalCode
country
salesRepEmployeeNumber
creditLimit
customerNumber
customerName
contactLastName
contactFirstName
phone
addressLine1
addressLine2
city
state
postalCode
country
salesRepEmployeeNumber
creditLimit

-------------------------------------
employee
===========
employeeNumber
lastName
firstName
extension
email
officeCode
reportsTo
jobTitle
------------------------------
Offices
==============
officeCode
city
phone
addressLine1
addressLine2
state
country
postalCode
territory
--------------------------
OrderDetails
===============
orderNumber
productCode
quantityOrdered
priceEach
orderLineNumber
---------------------
Order 
==============
orderNumber
orderDate
requiredDate
shippedDate
status
comments
customerNumber
---------------------
Payments
===========
customerNumber
checkNumber
paymentDate
amount
----------------------
Products
============
productCode
productName
productLine
productScale
productVendor
productDescription	
quantityInStock
buyPrice
MSRP

-Session Quirieis 
================================
Low[customer]
1- select all customers in 'Cambridge'
2-select all customer in [Berlin,Cambridge,Boston]
3-select the employee with heighst credit limit 
4-select customers between 80000 and 100,000
5-seelct unique cities 
--------------------------------------------------
Med [orderdetails-products]
1-how many orders contain this product  
2-get the avg quantity per order 
3-how many times this product sold 
4-get min and max quantity sold 
5- select the quantity of last 2 orders 
6-get all products that sold with quanitiy between 10-20 per order 

-----------------------
High 
1- get the number of products for every scale [product]
2-get the second most sold product 
2-get the number of products for  scale 1:10 [product]
3-get the ordernumber , order required date , product code , product price 
4-get the OrderNumber , Order status , product price , product number , product description for every product 
5-get every employee name and manager name [self join]

---------------------------