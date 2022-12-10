<?php

include 'head.php';
include 'laczenieBaza.php';
session_start();

if (isset($_SESSION['userID'])) {
    $select_koszyk = mysqli_query($lacz, 'SELECT * from koszyk where userID=' . $_SESSION['userID'] . '');
    $array_z_koszyka = mysqli_fetch_array($select_koszyk);
    if ($array_z_koszyka != null) {
        $select_koszyk2 = mysqli_query($lacz, 'SELECT * from koszyk where userID=' . $_SESSION['userID'] . '');
        while ($while_array = mysqli_fetch_array($select_koszyk2)) {
            mysqli_query($lacz, 'UPDATE szczegoly_produktu set ilosc=ilosc + ' . $while_array['ilosc'] . ' 
        where szczegoly_produktuID=' . $while_array['szczegoly_produktID'] . '');
        }

        mysqli_query($lacz, 'DELETE FROM koszyk where userID=' . $_SESSION['userID'] . '');
    }
    header("Location: wylogujsie.php");
    exit();
} else {
    header("Location: index.php");
    exit();
}
