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
					<?php foreach ($mapel as $row) { ?>
					<form method="post" action="<?= base_url('mapel/show_aksi');?>">
						<input type="hidden" name="id" value="<?= $row->id; ?>">
						<div class="form-group">
							<label>Nama Pelajaran</label>
							<input type="text" class="form-control" value="<?= $row->nama_pel;?>" readonly>
						</div>
						<a href="<?= base_url('mapel'); ?>" class="btn btn-danger float-right">Kembali</a>
					</form>
				</div>
			</div>
		<?php } ?>
	</main>
</div>			