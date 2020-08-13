 <?php

 $dbhost = '127.0.0.1';
 $dbuser = 'gohackphp';
 $dbpass = '123456';


 	if(!@mysqli_connect($dbhost, $dbuser, $dbpass)){
        die(mysqli_connect_error());
    }



 ?>