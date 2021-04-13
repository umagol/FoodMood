/*This is the Data base of Food Mood (Food Ordering System )*/

/*create table login(emailid varchar(30) primary key,password varchar(10),logtype varchar(20) check(logtype in('user','seller','deliveryboy')) );
*/
create table seller(sid serial primary key,semailid char(30),sname varchar(20),password text,firstname varchar(20),lastname varchar(30),adhrno numeric,phoneno numeric,panno numeric,address text,area text);

create table deliveryBoy(dbid serial primary key,demailid char(30),dbname varchar(15),password text,firstname varchar(20),lastname varchar(30),lno numeric,phoneno numeric,bikeno text,area text);

create table user1(uid serial primary key,uemailid char(30),password text,name varchar(15),firstname varchar(30),lastname varchar(30),phoneno numeric,address text);

create table food(fid serial primary key,foodname varchar(30),price money,description text,discount text,sid int references seller on DELETE cascade on UPDATE set NULL);

create table Payment(pid serial primary key,amount float,discount float,couponcode int,status varchar(10),payable_amt float,cid int references Customer on DELETE cascade on UPDATE set NULL,sid int references Seller on DELETE cascade on UPDATE set NULL,DBid int references DeliveryBoy on DELETE cascade on UPDATE set NULL);

create table Rating(rid serial primary key,rating float,feedback text,cid int references Customer on DELETE cascade on UPDATE set NULL,did int references Dish on DELETE cascade on UPDATE set NULL);

create table Offer(oid serial primary key,oname varchar(30),description text,couponcode int,did int references Dish on DELETE cascade on UPDATE set NULL,sid int references Seller on DELETE cascade on UPDATE set NULL,pid int references Payment on DELETE cascade on UPDATE set NULL);

create table order1(orid serial primary key,foodid int references food on DELETE cascade on UPDATE set NULL,sid int references seller on DELETE cascade on UPDATE set NULL, uid int references user1 on DELETE cascade on UPDATE set NULL ,dbid int references deliveryboy on DELETE cascade on UPDATE set NULL );

/*
create table login(sid int references seller on DELETE cascade,uid int references user1 on DELETE cascade on UPDATE set NULL,DBid int references deliveryboy on DELETE cascade on UPDATE set NULL,logtype varchar(20) check(logtype in('user','seller','deliveryboy')));
*/
create table login (id text primary key,password text,logtype varchar(20) check(logtype in('user','seller','deliveryboy')));
