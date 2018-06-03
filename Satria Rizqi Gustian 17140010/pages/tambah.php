
		<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-primary" style="margin-top:15px">
					<div class="panel-body">
						<div class="page-header">
							<h4 align="center"> ~.Masukan Data Mahasiswa.~ </h4>
						</div>
						<form action="koneksitambah.php" method="POST" role="form" enctype="multipart/form-data">
							<div class="form-group">
								<label>NIM Mahasiswa</label>
								<input name="nim" type="text" class="form-control" placeholder="Masukan NIM Mahasiswa"  required="required">
							</div>
							<div class="form-group">
								<label>Nama Mahasiswa</label>
								<input name="nama" type="text" class="form-control" placeholder="Masukan Nama Mahasiswa" required="required">
							</div>
							<div class="form-group">
								<label>Kelas Mahasiswa</label>
								<input name="kelas" type="text" class="form-control" placeholder="Masukan Kelas Mahasiswa" required="required">
							</div>
							<div class="form-group">
								<label>Alamat Mahasiswa</label>
								<input name="alamat" type="text" class="form-control" placeholder="Masukan Alamat Mahasiswa" required="required">
							</div>
							<div class="form-group">
								<label>Status Mahasiswa</label>
								<input name="status" type="text" class="form-control" placeholder="Masukan Status Mahasiswa" required="required">
							</div>
							
								<button type="submit" class="btn btn-primary btn-group-justified">SIMPAN DATA BARU</button>
						</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>