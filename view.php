<?php
include "db.php";
$result = mysqli_query($conn, "SELECT * FROM students");
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Students</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Student Records</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Enrollment No</th>
        <th>Name</th>
        <th>Contact</th>
        <th>Address</th>
        <th>Course</th>
        <th>Action</th>
    </tr>

    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['enrollment_no']; ?></td>
        <td><?php echo $row['student_name']; ?></td>
        <td><?php echo $row['contact_no']; ?></td>
        <td><?php echo $row['address']; ?></td>
        <td><?php echo $row['course']; ?></td>
        <td>
            <a class="update" href="update.php?id=<?php echo $row['id']; ?>">Update</a>
            <a class="delete" href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Delete this record?')">Delete</a>
        </td>
    </tr>
    <?php } ?>
</table>

<center>
    <a href="index.php" class="view">Back</a>
</center>

</body>
</html>