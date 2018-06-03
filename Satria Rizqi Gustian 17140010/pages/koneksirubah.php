<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$nama          = $_POST['nama'];
$kelas         = $_POST['kelas'];
$alamat        = $_POST['alamat'];
$status        = $_POST['status'];
$nim           = $_POST['nim'];
// query SQL untuk insert data
$proses=mysqli_query($dbcon,"UPDATE mahasiswa SET nama='$nama',kelas='$kelas',alamat='$alamat',status='$status' where nim='$nim'");
if ($proses) {
		echo "<script> alert('Data berhasil di sunting'); document.location='admin.php' </script>";
	}
	else{
		echo "<script> alert('Data gagal di sunting'); document.location='admin.php' </script>";
	}