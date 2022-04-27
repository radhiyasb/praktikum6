<!DOCTYPE html>
<html>
<head>
	<title>Input Biodata Berhasil</title>
    <style type="text/css">
		    body {
			    background-color: #f9ccac;
		    }
	    </style>
    </head>
    <body>
        <br><br><b><center>INPUT BIODATA BERHASIL DILAKUKAN</center></b><br>;
    <div class="text">
        <?php  
            echo "<center>Nama Lengkap : ".$_POST['Nama']. "</center><br>";
            echo "<center>NPM : ".$_POST['NPM']. "</center><br>";
            echo "<center>Tempat Lahir : ".$_POST['tempat']. "</center><br>";
            echo "<center>Tanggal lahir : ".$_POST['tanggal']. "</center><br>";
            echo "<center>Jenis Kelamin : ".$_POST['JK']. "</center><br>";
            echo "<center>Jurusan : ".$_POST['jurusan']. "</center><br>";
            echo "<center>Alamat : ".$_POST['alamat']. "</center><br>";
            echo "<center>No Telpon : ".$_POST['telp']. "</center><br>";
            echo "<center>Email : ".$_POST['Email']. "</center><br>";
        ?>
        <center><button><a href="soal3biodata.php">Kembali</a></button></center>
    </body>
</html>
