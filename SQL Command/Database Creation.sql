create database Dining_Management_System;
Use Dining_Management_System;
create table Student 
				(Student_name  varchar(20), 
                Room_number  varchar(3),
                Discipline_name varchar(20),
                Student_ID  numeric(6),
                Mobile_Number  numeric(11),
                primary key (Student_ID)  );
create table Meals  
				(Meal_type  varchar(6), 
                Price  numeric(2,2), 
                primary key (Meal_type)  );
                ALTER TABLE `dining_management_system`.`payments` 
				ADD COLUMN `Meal_Type` VARCHAR(20) NULL AFTER `Price`;

create table Payments  
				(Transaction_ID  varchar(15),
                Student_ID  numeric(6),  
                Date_of_transaction  date,
                Price  numeric(3,0),  
                primary key (Transaction_ID)  );
                
create table Inventory
	(Record_of_food_items  varchar(20), 
	 Price	    numeric(3,2),
	 Quantity	numeric(5,0),
	 
	 primary key (Record_of_food_items )
	);
create table Meal_oder
	(Order_ID 	varchar(15),
	 Date_Of_Order date,
	 primary key (Order_ID)
	);

create table Manager
	(Manager_Name  varchar(20), 
	 Student_ID		numeric(6,0),
	 Moblie_Number  numeric(11),
	 primary key (Student_ID)
	);

create table Reports
	(Report_ID		varchar(20), 
	 primary key (Report_ID	)
	);
