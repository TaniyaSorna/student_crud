<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $con = mysqli_connect('localhost', 'root', '', 's_crud');
    $sql = "INSERT INTO student (name, age, address)VALUES ('$name', $age, '$address')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo 'inserted';
    } else {
        echo 'not inserted';
    }
}

?>

<form action="" method="post">
    <label for="">Name</label>
    <input type="text" name="name"><br><br>
    <label for="">Age</label>
    <input type="text" name="age"><br><br>
    <label for="">Address</label>
    <input type="text" name="address"><br><br>
    <input type="submit" value="Submit" name="submit">
</form>

<a href="./read.php">Show Data</a>