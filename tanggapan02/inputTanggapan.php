<?php

    //menghubungkan php dengan koneksi database
    include 'config.php';

    //mengambil data yang dikirim dari form saran
    $tanggapan = $_POST['tanggapan'];

    $sql="INSERT INTO tanggapan (tanggapan) VALUES ('$tanggapan')";

    if($conn->query($sql) === TRUE){
        header("location: ../pengingat/pengingat.php");
    } else{
        echo "error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?>