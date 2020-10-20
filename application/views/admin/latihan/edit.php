<!-- bagian page konten -->
<div id="layoutSidenav_content">
<main role="main" class="flex-shrink-0">
	<div class="container-fluid">
		<title>Edit Data</title>
            <div class="card">
            	<?php if( $this->session->flashdata('pesan') ) : ?>
                  <div class="row mt-3">
                    <div class="col-md-6">
                      <div class="alert alert-success alert-dismissible fade show"  
                        role="alert">
                        Data <strong>berhasil</strong> <?= $this->session->flashdata('pesan'); ?>
                        <button type="button" class="close" data-dismiss="alert"  
                         aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    </div>
                  </div>
                <?php endif; ?> 
                <div class="card-header"><h1>Edit Data</h1></div>
                  <div class="card-body">
					<form method="post" action="<?= base_url('latihan/edit_aksi');?>">
						<?php
						$no = 0; 
						foreach ($latihan as $row) { 
						$no++;	?>
						<input type="hidden" name="id[]" value="<?= $row['id']; ?>">
						<input type="hidden" name="id_materi[]" value="<?= $row['id_materi']; ?>">
						<br>
						<div class="form-group">
							<h4>soal <?= $no?></h4>
							<textarea name="soal[]" class="ckeditor1" cols="30" rows="10"><?= $row['soal']?></textarea>
						</div>
						<div class="form-row">
								<div class="form-group col-md-6">
									<label>Pilihan A</label>
									<input type="text" name="a[]" class="form-control" value="<?= $row['pil_a']; ?>" >
								</div>
								<div class="form-group col-md-6">
									<label>Pilihan B</label>
									<input type="text" name="b[]" class="form-control" value="<?= $row['pil_b']; ?>">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-6">
									<label>Pilihan C</label>
									<input type="text" name="c[]" class="form-control" value="<?= $row['pil_c']; ?>">
								</div>
								<div class="form-group col-md-6">
									<label>Pilihan D</label>
									<input type="text" name="d[]" class="form-control" value="<?= $row['pil_d']; ?>">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-6 mx-auto">
									<label>Jawaban</label>
									<input type="text" name="jawaban[]" class="form-control" value="<?= $row['jawaban']; ?>">
								</div>
							</div>
							<?php } ?>
					
						<button type="submit" class="btn btn-primary ">Update data</button>
						<a href="<?= base_url('latihan'); ?>" class="btn btn-danger float-right">Batal/Kembali</a>
					</form>
				</div>
			
	</div>
</main>