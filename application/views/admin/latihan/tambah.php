<div id="layoutSidenav_content">
	<main role="main">
		<div class="container-fluid">
			<div class="row">
				<div class="col">
					<h3>Menambah Data</h3>  
				</div>
			</div>
			<form method="post" action="<?= base_url('Materi/tambah_aksi');?>">

			<input type="hidden" name="id_materi" value="<?= $id_materi?>">
			<?php for ($i=1; $i <= $jumlah ; $i++) { ?>
				<div class="card">
					<div class="card-body">
						<!-- form tambah guru-->
							<div class="form-group">
								<label>soal</label>
								<textarea name="deskripsi[]" class="ckeditor1" cols="30" rows="10"></textarea>
							</div>
							<div class="form-row">
								<div class="form-group col-md-6">
									<label>Pilihan A</label>
									<input type="text" name="a[]" class="form-control" >
								</div>
								<div class="form-group col-md-6">
									<label>Pilihan B</label>
									<input type="text" name="b[]" class="form-control">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-6">
									<label>Pilihan C</label>
									<input type="text" name="c[]" class="form-control" >
								</div>
								<div class="form-group col-md-6">
									<label>Pilihan D</label>
									<input type="text" name="d[]" class="form-control">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-6 mx-auto">
									<label>Jawaban</label>
									<input type="text" name="jawaban[]" class="form-control" >
								</div>
							</div>
						</div>
					</div>
					<?php }?>
					<button type="submit" class="btn btn-primary">Simpan</button>
					<a href="<?= base_url('Materi'); ?>" class="btn btn-danger">Batal</a>
				</form>
			</div>
		</main>
</div>