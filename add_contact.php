<?php
   include "database_link.php";

   $name = $_GET['name'];
   $number = $_GET['number'];


   $command = "INSERT into person_details values('$name', '$number')";
   $conn->query($command);
   echo "Added Successful";

?>