<!DOCTYPE html>
<html>
    <head>
	    <title>Login Berhasil</title>
	    <style type="text/css">
		    body{
			    background-color: #f9ccac;
		    }
	    </style>
    </head>
    <body>
        <br><br><b><center>LOGIN BERHASIL DILAKUKAN</center></b>;
        <?php
        echo "<center>Nama : ".$_POST['Nama']. "</center><br>";
        echo "<center>Email : ".$_POST['Email']. "</center><br>";
        echo "<center>Pada : " ; date_default_timezone_set('Asia/Jakarta'). "</center>";
        echo date("l-d-F-Y, h:i:s a");

	    if (empty($_POST['Nama'])) {
            header("Location:soal2lengkapi.php");
        }
	    if (empty($_POST['Email'])) {
	        header("Location:soal2lengkapi.php");
        }
        ?>
    </body>
</html>