<!-- bagian page konten -->
<div id="layoutSidenav_content">
<main role="main" class="flex-shrink-0">
	<div class="container-fluid">
		<title>Lihat data</title>
            <div class="card">
                <div class="card-header">
					<h2>Lihat Data</h2>
				</div>
                <div class="card-body">
					<?php foreach ($materi as $row) { ?>
					<form method="post" action="<?= base_url('materi/show_aksi');?>">
						<input type="hidden" name="id" value="<?= $row->id; ?>">
						<div class="form-group">
							<label>Nama Pelajaran</label>
							<select class="form-control" name="mapel" disabled>
								<?php foreach ($mapel as $data) {
									if($data->id == $row->id){?>
									<option value="<?= $data->id;?>" selected><?= $data->nama_pel;?></option>
									<?php }?>
									<option value="<?= $data->id;?>"><?= $data->nama_pel;?></option>
								<?php }?>
							</select>
						</div>
						<div class="form-group">
							<label>Materi</label>
							<input type="text" class="form-control" value="<?= $row->nama_materi;?>" readonly>
						</div>
						<div class="form-group">
							<label >Deskripsi</label>
							<?= $row->deskripsi;?>
						</div>
						<a href="<?= base_url('materi'); ?>" class="btn btn-danger float-right">Kembali</a>
					</form>
				</div>
			</div>
		<?php } ?>
	</main>
</div>			