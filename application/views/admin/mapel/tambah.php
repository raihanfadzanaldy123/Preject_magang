<div id="layoutSidenav_content">
	<main role="main">
		<div class="container-fluid">
			<div class="row">
				<div class="col">
					<h3>Menambah Data</h3>  
				</div>
			</div>
			<form method="post" action="<?= base_url('Mapel/tambah_aksi');?>">
				<div class="card">
					<div class="card-body">
						<!-- form tambah guru-->
							<div class="form-group">
								<label>Nama pelajaran</label>
								<input type="text" name="nama" class="form-control py-2" >
							</div>
						</div>
					</div>
					<button type="submit" class="btn btn-primary">Simpan</button>
					<a href="<?= base_url('guru'); ?>" class="btn btn-danger">Batal</a>
				</form>
			</div>
		</main>
</div>