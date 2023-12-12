<?php
$connectDb = mysqli_connect("localhost", "root", "", "db_web");

if(!$connectDb) {
    die('Tidak dapat menghubungkan mysql:' .mysql_error());
}
?>