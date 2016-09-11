<?php

	@session_start();
    @error_reporting(0);
	include "inc/koneksi.php";
	include "Config/fungsi_waktu.php";
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>IoT Indonesia Life Show - Administrator</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">  
    <link rel="stylesheet" type="text/css" href="Content/css/main-admin.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap core CSS -->
    <link href="Content/css/bootstrap.css" rel="stylesheet">

    <!-- Bootstrap theme -->
    <link href="Content/css/bootstrap-theme.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="Scripts/fancybox/jquery.fancybox-1.3.1.css" media="screen" />

    <div class="row">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><center>
                    <span>  Administrator  <br /></span>
                    <span>Daftar Konfirmasi Peserta</span>
                </center></li>
            </ul>
        </div>
    </div>
 </head>
 
 <body>

 <div class = "row">
    <div class = "col-md-6">
        <div class = "input">
        <div class = "box">
            <div class = "btn-group-vertical">

                <span><center>Dashboard</center></span>
                <div>
                    <a href = "main-admin.php">
                        <input type = "submit" class = "btnbtn-defaul" value="Daftar Konfirmasi Peserta">
                    </a>
                </div>
                <div>
                    <a href = "tambah-admin.php">
                        <input type = "submit" class = "btnbtn-defaul" value="Tambah User">
                    </a>
                </div>
                <div>
                    <a href = "hapus-admin.php">
                        <input type = "submit" class = "btnbtn-defaul" value="Hapus User">
                    </a>
                </div>
            </div>
        </div>
        </div>
    </div>
 </div>

 <div id="formholder" style="margin-top: -;">
    <form id="form1" name="form1" method="POST" action="">
        <div class = "row">
            <table class = "table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Username</th>
                        <th>Nama Team</th>
                        <th>Tema Team</th>
                        <th>Jumlah Anggota</th>
                        <th>Keterangan</th>
                        <th>Konfirmasi Oleh</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php


                            $sql = mysql_query("select * from user, kehadiran where user.nama_team = kehadiran.nama_team and user.level = 'guest'") or die (mysql_error());
                            while($r = mysql_fetch_array($sql)){
                                echo "<tr>"
                            ?>

                            <td><center><?php echo "$r[id_konfirmasi]"?></center></td>
                            <td><center><?php echo "$r[username]"?></center></td>
                            <td><center><?php echo "$r[nama_team]"?></center></td>
                            <td><center><?php echo "$r[tema_team]"?></center></td>
                            <td><center><?php echo "$r[jumlah]"?></center></td>
                            <td><center><?php echo "$r[keterangan]"?></center></td>
                            <td><center><?php echo "$r[konfirmasi_oleh]"?></center></td>
                            <td><center><?php echo "$r[tanggal_konfirmasi]"?></center></td>
                            <?php
                                echo"</tr>";
                            }
                        ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </form>
</div>



 <div class="footerBottomSection">
        <div class="container">
            <h2><center>&copy; 2016 IoT Indonesia Life Show</center></h2>
        </div>
 </div>
 </body>
</html>