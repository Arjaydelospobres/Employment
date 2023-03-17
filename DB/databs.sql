use account;

CREATE TABLE databs (

	ID int,
	username varchar(10),
	password varchar(10),
    primary key (ID)
    
);

INSERT INTO databs (ID, username,password)
 VALUES(1, 'Arjay', 'Arjay23');

DELETE from databs
where ID=2;

select * from databs;
