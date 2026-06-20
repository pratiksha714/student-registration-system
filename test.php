<?php

$conn = mysqli_connect("localhost","root","","student_db");

if($conn)
{
    echo "Database Connected Successfully";
}
else
{
    echo "Connection Failed";
}

?>