

<?php

$epiz_27949626_Database  = mysql_connect("sql303.epizy.com" , "epiz_27949626" , "XSlndtGk4GNTr")
or die (mysql_error());

mysql_select_db("epiz_27949626_Database" , $epiz_27949626_Database);


$sql="

CREATE TABLE users4
(
ID INT(40) NOT NULL ,
PRIMARY KEY(ID),
Username VARCHAR(20),
Password VARCHAR(20)
)

";



mysql_query($sql , $epiz_27949626_Database);




?>