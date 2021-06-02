<?php

    //menghubungkan php dengan koneksi database
    include 'config.php';

    //mengambil data yang dikirim dari form saran
    $nama = $_POST['nama'];
    $no_hp = $_POST['no_hp'];
    $saran = $_POST['saran'];

    $sql="INSERT INTO saran (Nama, No_Hp, Saran) VALUES ('$nama', '$no_hp', '$saran')";

    if($conn->query($sql) === TRUE){
        header("location: ../pengingat/pengingat.php");
    } else{
        echo "error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?>