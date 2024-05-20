<?php
$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];

$koneksi = new mysqli('localhost', 'root', '', 'register');
if($koneksi) {
    echo "koneksi berhasil";
}else{
    echo $koneksi->error;
}

$insert = $koneksi->query("INSERT INTO user
(id, nama, gmail, password)
values
($id,'$nama', '$email', '$password')
");

if ($insert) {
    echo "insert data berhasil";
}else{
    echo"Gagal insert data";
}

?>
