<?php
    $id = $_POST['id'];

    $con = mysqli_connect('127.0.0.1','root','','songbird');
    $sql = "DELETE FROM album WHERE id='$id'";

    mysqli_query($con,$sql);
    mysqli_close($con);
?>