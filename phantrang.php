<?php
    require 'dbcon.php';

    $trang = $_GET['trang'];
    settype($trang, 'int');

    $sotrang1tin = 5;
    settype($sotrang1tin, 'int');
    $from = ($trang - 1)*$sotrang1tin;
    
    $sql = " SELECT idTin, TieuDe FROM tin
            ORDER BY idTin ASC
            LIMIT $from, $sotrang1tin

    ";

    $qr = mysqli_query($link, $sql);
    
    while ($row = mysqli_fetch_array($qr)){

    echo "<div class='tin'>";

    echo $row['idTin']."-".$row['TieuDe'];

    echo "</div>";

    }

?>