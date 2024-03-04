<?php
if ($_REQUEST['edit_id']) {
    $id = $_REQUEST['edit_id'];
    echo $id;
}
if (isset($_POST['update'])) {
}
?>

<form action="" method="post">
    <label for="">Id</label>
    <input type="text" name="id">
    <label for="">Name</label>
    <input type="text" name="name"><br><br>
    <label for="">Age</label>
    <input type="text" name="age">
    <label for="">Address</label>
    <input type="text" name="address">
    <input type="submit" value="update" name="update">

</form>