CREATE TABLE kadaidb.person (
    id INT EXTRA AUTO_INCREMENT NOT NULL PRIMARY KEY,
    name VARCHAR(50) DEFAULT NULL,
    age INT,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP);




 INSERT INTO kadaidb.person (id, name, age) VALUES (13882,"Saya", 22);
mysql> INSERT INTO kadaidb.person (id, title, age) VALUES ("はじめてのPHP", 1980);
mysql> INSERT INTO kadaidb.person (id, title, age) VALUES ("はじめてのHTML", 1000);
mysql> INSERT INTO kadaidb.person (id, title, age) VALUES ("はじめてのCSS", 1000);

CREATE TABLE kadaidb.person (
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    name VARCHAR(50),
    age INT,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);


 UPDATE bookstore.books SET はじめてのMySQL = はじめてのMySQL;
 UPDATE bookstore.books SET はじめてのMySQL = はじめてのHTML;
 
DELETE FROM bookstore.books WHERE title = "はじめてのMySQL
 source ~/environment/create_table_kadaidb_person.sql

create_table_kadaidb_person.sql

source ~/environment/create_table_kadaidb_person.sql