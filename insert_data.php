

<?php

$epiz_27949626_Database  = mysql_connect("sql303.epizy.com" , "epiz_27949626" , "XSlndtGk4GNTr")
or die (mysql_error());

mysql_select_db("epiz_27949626_Database" , $epiz_27949626_Database);


$sql="

INSERT INTO `user`(`id`, `uname`, `upassword`) VALUES (1,'admin','admin@123');

";



mysql_query($sql , $epiz_27949626_Database);




?>