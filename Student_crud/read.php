<?php
$con = mysqli_connect('localhost', 'root', '', 's_crud');
$sql = "SELECT * FROM student";
$data = mysqli_query($con, $sql);
if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];
    $delete_sql = "DELETE FROM student WHERE id = $id";
    mysqli_query($con, $delete_sql);
    header('location: read.php');
}
if (isset($_GET['edit_id'])) {
    $id = $_GET['edit_id'];
    header("location: edit.php?edit_id=$id");
}

?>

<table border="1" cellpadding="10">
    <thead>
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Age</td>
            <td>Address</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($row = mysqli_fetch_assoc($data)) {
            echo '<tr>';
            echo '<td>' . $row['id'] . '</td>';
            echo '<td>' . $row['name'] . '</td>';
            echo '<td>' . $row['age'] . '</td>';
            echo '<td>' . $row['address'] . '</td>';
            echo '<td>
                <a href="?edit_id=' . $row['id'] . '">Edit</a>
                <a href="?delete_id=' . $row['id'] . '">Delete</a>
            </td>';
            echo '</tr>';
        }
        ?>
    </tbody>
</table>

<a href="./index.php">Create</a>