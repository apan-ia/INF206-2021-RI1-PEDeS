<?php

include 'confif.php';

$sql="SELECT bulan, kegiatan, status FROM pengingat";
$result=$conn->query($sql);

if(mysqli_num_rows($sql)>0)
{
    $kegiatan="tidak ada kegiatan";
}



?>