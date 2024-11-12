<?php  
    include '../connect.php';

    $nis = $_POST['NIS'];
    $nama = $_POST['Nama'];
    $id_kelas = $_POST['Id_kelas'];
    $alamat = $_POST['Alamat'];
    $tll = $_POST['TTL'];
    $tlp = $_POST['Telp'];

    
    mysqli_query($conn, "INSERT INTO siswa VALUES('$nis', '$nama', '$id_kelas', '$alamat', '$tll', '$tlp' )");

    header("Location: siswa.php");
?>