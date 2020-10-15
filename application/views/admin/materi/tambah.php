<div id="layoutSidenav_content">
	<main role="main">
		<div class="container-fluid">
			<div class="row">
				<div class="col">
					<h3>Menambah Data</h3>  
				</div>
			</div>
			<form method="post" action="<?= base_url('Materi/tambah_aksi');?>">
				<div class="card">
					<div class="card-body">
						<!-- form tambah guru-->
							<div class="form-group">
								<label>Nama pelajaran</label>
								<select class="form-control" name="mapel">
								<?php foreach ($mapel as $data) {?>
									<option value="<?= $data->id;?>"><?= $data->nama_pel;?></option>
								<?php }?>
								</select>
							</div>
							<div class="form-group">
								<label >Materi</label>
								<input type="text" name="materi" class="form-control py-2">
							</div>
							<div class="form-group">
								<label>Deskripsi</label>
								<textarea name="deskripsi" id="ckeditor" cols="30" rows="10"></textarea>
							</div>
						</div>
					</div>
					<button type="submit" class="btn btn-primary">Simpan</button>
					<a href="<?= base_url('Materi'); ?>" class="btn btn-danger">Batal</a>
				</form>
			</div>
		</main>
</div>