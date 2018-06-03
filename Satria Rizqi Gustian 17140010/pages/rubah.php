<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		   <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../css/bootstrap.min.css">

        <link rel="stylesheet" type="text/css" href="../css/hide.css">

        <script src="../js/jquery-2.1.4.js"></script>
        <script src="../js/hide.js"></script>
	</head>	
	<body >

	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-success" style="margin-top:50px">
					<div class="panel-body">
						<div class="page-header">
							<h3 align="center"><b>Sunting Data Mahasiswa</b></h3>
						</div>
						<form action="koneksirubah.php" method="POST" role="form" enctype="multipart/form-data">
						<div class="form-group">
						<?php  
 						include("koneksi.php");  
						$id=$_GET['edit'];  
						$sa=$dbcon->query("select nim, nama, kelas, alamat, status from mahasiswa WHERE nim='$id'");//delete query
						$s=$sa->fetch_assoc()
						?>
						<div class="form-group">
								<label>Nim mahasiswa</label>
								<input name="nim" value="<?php echo $s['nim']; ?>" type="text" class="form-control" id="" placeholder="Masukan Nilai Uas" required="required">
							</div>

						<div class="form-group">
								<label>Nama Mahasiswa</label>
								<input name="nama" value="<?php echo $s['nama'];?>" type="text" class="form-control" id="" placeholder="Masukan Nilai absen" required="required">
							</div>
						<label>Kelas Mahasiswa</label>
								<input name="kelas" value="<?php echo $s['kelas']; ?>" type="text" class="form-control" id="" placeholder="Masukan Nilai Tugas" required="required">
							</div>
							<div class="form-group">
								<label>Alamat mahasiswa</label>
								<input name="alamat" value="<?php echo $s['alamat']; ?>" type="text" class="form-control" id="" placeholder="Masukan Nilai absen" required="required">
							</div>
							<div class="form-group">
								<label>Status mahasiswa</label>
								<input name="status" value="<?php echo $s['status']; ?>" type="text" class="form-control" id="" placeholder="Masukan Nilai Uts" required="required">
							</div>
							
								
							<button name="edit" type="submit" class="btn btn-primary">SIMPAN</button> &nbsp; <button type="cancel" class="btn btn-warning">BATAL</button>
						</form>
						
					</div>
				</div>
				</div>
		</div>
	</div>
	</div>
		<!-- jQuery -->
		<script src="js/jquery-1.11.2.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<!-- Bootstrap JavaScript -->
	</body>
</html>