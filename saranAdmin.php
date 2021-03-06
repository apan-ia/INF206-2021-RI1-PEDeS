<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
            table, td, th {  
                border: 1px solid black;
                text-align: left;
            }

            table {
                border-collapse: collapse;
            }

            th, td {
                padding: 15px;
            }

            th{
                background-color: grey;
            }
        </style>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial scale=1.0"> <!--agar website bisa menyesuaikan tampilan di device berbeda-->
        <title>Saran</title>
        <link rel="stylesheet" href="styleSaranAdmin.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  <!--untuk mengimport logo yang ada di sidebar-->
    </head>
    <body>
        <input type="checkbox" id="check">
        <label for="check">
            <i class="fa fa-bars" id="btn"></i>
            <i class="fa fa-times" id="cancel"></i>
        </label>
        <div class="sidebar">
            <header>Pengingat</header>
            <ul> <!--Ganti # untuk memberikan action pada sidebar-->
                <li><a href="../pengingat/pengingat.html"><h6>Pengingat</h6></a></li>
                <li><a href="../saran/saran.html"><h6>Saran</h6></a></li>
                <li><a href="../Tanggapan/tanggapan.html"><h6>Tanggapan</h6></a></li>
                <li><a href="../history/history.html"><h6>Histori</h6></a></li>
            </ul>
        </div>
        
        <div class="topbar">
                <!--tambahkan href untuk memberikan action jika diperlukan-->
                
                <input type="text" placeholder="Search..">
                <div class="topbar-right">
                    <a class="fa fa-user-o" style="font-size:30px;"><h6>Nama User</h6></a>
                </div>          
        </div>
        
        <div class="content">
        <?php
            include "config.php";
            $sql="SELECT * FROM saran";
            $result=$conn->query($sql);
            
            if($result->num_rows >0){
                echo "<table><tr><th>Nama</th><th>No_Hp</th><th>Saran</th></tr>";

                while($row = $result->fetch_assoc()){
                    echo "<tr><td>".$row["Nama"]."</td><td>".$row["No_Hp"]."</td><td>".$row["Saran"]."</td></tr>";
                }
                echo "</table>";
            }
            $conn->close();
        ?> 
        </div>    
        
    </body>
</html>