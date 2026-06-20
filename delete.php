<?php
include "db.php";

$id = $_GET['id'];

$sql = "DELETE FROM students WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Record Deleted Successfully'); window.location='view.php';</script>";
} else {
    echo "Error deleting record";
}
?>