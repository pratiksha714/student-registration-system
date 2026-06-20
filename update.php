<?php
include "db.php";

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM students WHERE id=$id");
$row = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {
    $enrollment = $_POST['enrollment_no'];
    $name = $_POST['student_name'];
    $contact = $_POST['contact_no'];
    $address = $_POST['address'];
    $course = $_POST['course'];

    $sql = "UPDATE students SET
            enrollment_no='$enrollment',
            student_name='$name',
            contact_no='$contact',
            address='$address',
            course='$course'
            WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Record Updated Successfully'); window.location='view.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="form-box">
    <h2>Update Student Information</h2>

    <form method="POST">
        <label>Student Enrollment No</label>
        <input type="text" name="enrollment_no" value="<?php echo $row['enrollment_no']; ?>" required>

        <label>Student Name</label>
        <input type="text" name="student_name" value="<?php echo $row['student_name']; ?>" required>

        <label>Contact Number</label>
        <input type="text" name="contact_no" value="<?php echo $row['contact_no']; ?>" required>

        <label>Address</label>
        <textarea name="address" required><?php echo $row['address']; ?></textarea>

        <label>Course</label>
        <select name="course" required>
            <option value="<?php echo $row['course']; ?>"><?php echo $row['course']; ?></option>
            <option value="BCA">BCA</option>
            <option value="BBA">BBA</option>
            <option value="BCS">BCS</option>
            <option value="MCA">MCA</option>
            <option value="MBA">MBA</option>
        </select>

        <div class="btn-box">
            <button type="submit" name="update" class="update">Update</button>
            <a href="view.php" class="close">Close</a>
        </div>
    </form>
</div>

</body>
</html>