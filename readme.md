sql


int --- -2147483647  to 2147483647 we can store 4 bytes
BIGINT --- 948376983476476430

INT(11) -- this means a certain device allow 11 char width 11 is default 

FLOAT --- -2134.23514
DOUBLE ===            for larger decimal number

varchar ------ sda13    255 char is default

TEXT ----- for alot of text like paragraph  

DATE ----- date 2023-04-05  be careful  with format otherwise it wll not store

DATETIME --- 2023-03-04 11:30:03

INT SIGNED -- is mean we want to  store negative number inside our database
INT UNSIGNED -- we dont want to store negative number -- we can store much higher number due to more byte available from negative number


CREATE

CREATE TABLE users (
    id INT(11) NOT NULL AUTO_INCREMENT ,
    username VARCHAR(30) NOT NULL ,
    pwd VARCHAR(255) NOT NULL ,
    pwd VARCHAR(100) NOT NULL ,
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIME,
    PRIMARY KEY (id)


);



