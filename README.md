# hotel-reservation-system
A MySQL-PHP based hotel reservation system 

We have created a Hotel Reservation system, which can be used by the Hotel clients to make reservations. We provide the Hotel clients and administration with a browser based system which can be deployed on a server to make reservations.  

The project makes use of a MySQL Database, Apache Server, PHP, HTML and CSS. The system makes use of MySQL to store the user information, Apache server to host the database, PHP to query the database, and HTML/CSS for creating a user friendly interface.
Since we have used a MySQL database, the project doesn’t face concurrency problems, and multiple terminals can be used at once to book rooms.

 

Description of the Project 
---
The MySQL database has been used for the following purposes
* Storing the tariff of the rooms. 
The tariff and details of the types of rooms available are stored in a table, which is queried when required.
* Storing the user information of clients. 
The details of the users, like their email address, contact number and home address are stored in a table which is updated when a new user is created. Moreover, a user can login and not have to re-enter the information he had previously entered while registering.
* Storing the user name and passwords for clients.  
Every client, if already registered, can login to the system using the username and password he had set while registering.
* Storing the details of the reservations made.
The details of each reservation are stored in the Reservation table. The details include the type of room booked, number of rooms booked, the check-in and the check-out date.
* Checking which rooms are available on which dates 
Each room is booked for a certain period. And very cleverly this project maintains the entire session data in a single table.
* Checking which room has been booked already.  
We maintain record of which room has been booked already, corresponding to a reservation id.
* Generating the bill  
The bill for the client is generated using data about the type of room he stayed in, the number of rooms he booked and the number of days he stayed for.



Screenshots
---
![ER Model](https://raw.githubusercontent.com/dhruvmullick/hotel-reservation-system/master/Screenshots/Screen%20Shot%202016-04-27%20at%201.59.11%20AM.png)
![Home Page](https://raw.githubusercontent.com/dhruvmullick/hotel-reservation-system/master/Screenshots/Screen%20Shot%202016-04-27%20at%201.59.49%20AM.png)
![Accomodation](https://raw.githubusercontent.com/dhruvmullick/hotel-reservation-system/master/Screenshots/Screen%20Shot%202016-04-27%20at%201.59.57%20AM.png)
![Tariff](https://raw.githubusercontent.com/dhruvmullick/hotel-reservation-system/master/Screenshots/Screen%20Shot%202016-04-27%20at%202.00.08%20AM.png)
![Login Page](https://raw.githubusercontent.com/dhruvmullick/hotel-reservation-system/master/Screenshots/Screen%20Shot%202016-04-27%20at%202.00.13%20AM.png)
![Booking Page](https://raw.githubusercontent.com/dhruvmullick/hotel-reservation-system/master/Screenshots/Screen%20Shot%202016-04-27%20at%202.00.19%20AM.png)

