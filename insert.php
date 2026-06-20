<?php

include "db.php";

$enrollment = $_POST['enrollment_no'];
$name = $_POST['student_name'];
$contact = $_POST['contact_no'];
$address = $_POST['address'];
$course = $_POST['course'];

$sql = "INSERT INTO students
(enrollment_no, student_name, contact_no, address, course)
VALUES
('$enrollment','$name','$contact','$address','$course')";

if(mysqli_query($conn,$sql))
{
    echo "
    <script>
    alert('Student Registered Successfully');
    window.location='index.html';
    </script>";
}
else
{
    echo "Error : ".mysqli_error($conn);
}

?>