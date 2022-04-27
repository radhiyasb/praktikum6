<!DOCTYPE html>
<html>
    <head>
        <title>Form Biodata</title>
    	<style type="text/css">
		    body {
			    background-color: #f9ccac;
		    }
	    </style>
    </head>
    <body>
        <center>
            <h1>Form Biodata</h1></center>  
            <form method="POST" action="soal3berhasil.php">
            <center>
            <table border="0" width="400">
                    <tr>
                        <td>Nama Lengkap</td>
                        <td> : </td>
                        <td><input type=text name="Nama"></td>
                    </tr>
                    <tr>
                        <td>NPM</td>
                        <td> : </td>
                        <td><input type=text name="NPM"></td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td> : </td>
                        <td><input type="text" name="tempat"></td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td> : </td>
                        <td><input type="date" name="tanggal"></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td> : </td>
                        <td><input type=radio name="JK" value=Laki-laki>Laki-laki
                            <input type=radio name="JK" value=Perempuan>Perempuan</td>
                    </tr>
                    <tr>
                        <td>Jurusan</td>
                        <td> : </td>
                        <td><input type="text" name="jurusan"></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td> : </td>
                        <td><input type=textfield name=alamat></td>
                    </tr>
                    <tr>
                        <td>No Telpon</td>
                        <td> : </td>
                        <td><input type="text" name="telp"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td> : </td>
                        <td><input type="email" name="Email"></td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td> </td>
                        <td><input type="submit" name=submit value=input>
                        <input type="reset" name=reset value=hapus></td>
                    </tr>
        </center>
                </form>
            </table>
    </body>
</html>