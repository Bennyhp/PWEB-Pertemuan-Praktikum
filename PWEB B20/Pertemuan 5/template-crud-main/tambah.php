<?php
require "config.php";

if(isset($_POST['submit'])){
  $nama = $_POST['nama'];
  $nim = $_POST['nim'];
  $email = $_POST['email'];
  $telpon = $_POST['telpon'];
  $alamat = $_POST['alamat'];
  $query = mysqli_query($db,"INSERT INTO mahasiswa (nama,nim,email,telpon,alamat) VALUES ('$nama','$nim','$email','$telpon','$alamat')");
  if($query){
    header("Location:index.php");
  } else {
    echo "Tambah data error";
  }
}
?>