<?php
$article = $_POST['article'];
$date = $_POST['date'];
$note = $_POST['note'];
include("../templates/connect.php");
$_Qinsert_new_entries = "INSERT INTO `notes`(`id`, `date`, `article`, `note`) VALUES ('NULL', '$date', '$article', '$note')";
$insert_new_entries = mysqli_query($dbc, $_Qinsert_new_entries) or die("Ошибка добавления");
?>