<?php 
		include 'koneksi.php';
			$nim	= $_POST['nim'];
			$nama = $_POST['nama'];
			$kelas	= $_POST['kelas'];
			$alamat	= $_POST['alamat'];
			$status	= $_POST['status'];
				
			$insert = $dbcon->query("INSERT INTO mahasiswa (nim,nama,kelas,alamat,status) VALUES('$nim','$nama','$kelas','$alamat','$status')");
			if ($insert){ // jika isi variable $proses bernilai true maka
	echo "<script>alert('Data Berhasil Disimpan');document.location = 'admin.php'</script>";
}else{ //jika variable bernial false
	echo "<script>alert('data gagal disimpan pastikan nim yang anda masukan sudah benar');document.location = 'admin.php'</script>";

}

?>