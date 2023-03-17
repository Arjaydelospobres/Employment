use account;

CREATE TABLE recordlist (
	ID int,
	NAME varchar(30) ,
   Section varchar(30),
   primary key(ID)
);

INSERT INTO recordlist (ID, NAME, section)
 VALUES(10, 'Fran', '2IT-C1-1S');
INSERT INTO recordlist (ID, NAME, section)
VALUES(15, 'Alvin', '2IT-C1-1S');
INSERT INTO recordlist (ID, NAME, section)
VALUES(21, 'Nathan', '2IT-C1-2S');
INSERT INTO recordlist (ID, NAME, section)
VALUES(23, 'Jimwell', '2IT-C1-2S');

select * from recordlist;
