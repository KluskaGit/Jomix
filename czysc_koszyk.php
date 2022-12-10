<?php

include 'head.php';
include 'laczenieBaza.php';
session_start();
$select_koszyk = mysqli_query($lacz, 'SELECT * from koszyk where userID=' . $_SESSION['userID'] . '');
$array_z_koszyka = mysqli_fetch_array($select_koszyk);
if ($array_z_koszyka != null) {
    mysqli_query($lacz, 'DELETE FROM koszyk where userID=' . $_SESSION['userID'] . '');
}
header("Location: wylogujsie.php");
exit();
