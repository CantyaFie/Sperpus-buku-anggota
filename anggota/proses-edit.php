<?php
include '../koneksi.php';

$id_anggota = $_GET['id_anggota'];

if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $telp = $_POST['telp'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "UPDATE anggota SET nama = '$nama',
                               kelas = '$kelas',
                               telp = '$telp',
                               username = '$username',
                               password = '$password'
                               WHERE id_anggota = $id_anggota";
    $res = mysqli_query($koneksi,$sql);
    $count = mysqli_affected_rows($koneksi);

    if($count == 1){
        header("location: index.php");
    }
    else{
        header("location: form-edit.php");
    }
    // header ("location:index.php");
}

?>