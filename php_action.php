<?php 

require_once 'db_connect.php';

if ($_POST) {
    $submit = $_POST['submit_te'];
    $sql = "INSERT INTO submitform (submitText) VALUES ('$submit')";
    if ($connect->query($sql) === TRUE) {
        echo "<p>Thanks for Sumitting!</p>";
    }
}

?>