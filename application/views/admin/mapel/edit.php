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
                <div class="card-header">Edit Data</div>
                  <div class="card-body">
					<?php foreach ($mapel as $row) { ?>
					<form method="post" action="<?= base_url('mapel/edit_aksi');?>">
						<input type="hidden" name="id" value="<?= $row->id; ?>">
						<div class="form-group">
							<label>Nama Pelajaran</label>
							<input type="text" name="nama" class="form-control" value="<?= $row->nama_pel;?>">
						</div>
						<div class="form-group">
							<label>Materi</label>
							<input type="text" name="materi" class="form-control" value="<?= $row->materi;?>">
						</div>
						<div class="form-group">
							<label >Deskripsi</label>
							<textarea name="deskripsi" id="ckeditor" cols="30" rows="10"><?= $row->deskripsi;?></textarea>
							
						</div>
						<button type="submit" class="btn btn-primary ">Update data</button>
						<a href="<?= base_url('mapel'); ?>" class="btn btn-danger float-right">Batal/Kembali</a>
					</form>
				</div>
			
		<?php } ?>
	</div>
</main>