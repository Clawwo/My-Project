<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/tambah.css">
    <title>Document</title>
</head>
<body>
    <h2>Tambah Data Siswa</h2>
    <form method="Post" action="tsiswa.php">
        <table>
                <tr>
                    <td>NIS: </td>
                    <td><input type="number" name="NIS"></td>
                </tr>
                <tr>
                    <td>NAMA: </td>
                    <td><input type="text" name="Nama"></td>
                </tr>
                <tr>
                    <td>ID KELAS: </td>
                    <td><input type="number" name="Id_kelas"></td>
                </tr>
                <tr>
                    <td>ALAMAT: </td>
                    <td><input type="text" name="Alamat"></td>
                </tr>
                <tr>
                    <td>DATE</td>
                    <td><input type="date" name="TTL"></td>
                </tr>
                <tr>
                    <td>TELPON</td>
                    <td><input type="number" name="Telp"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit"></td>
                </tr>
        </table>

    </form>
</body>
</html>