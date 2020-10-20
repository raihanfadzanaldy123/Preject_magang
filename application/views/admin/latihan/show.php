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
					<?php
					$no = 0;
					foreach ($latihan as $row) { 
					$no++ ?>
					<form method="post" action="<?= base_url('materi/show_aksi');?>">
						<input type="hidden" name="id" value="<?= $row['id']; ?>">
						<input type="hidden" name="id_materi" value="<?= $row['id_materi']; ?>">
						<div class="form-group">
							<h4>soal <?= $no?></h4>
							<?= $row['soal'];?>
						</div>
						<div class="form-row">
								<div class="form-group col-md-6">
									<label>Pilihan A</label>
									<input type="text" name="a[]" class="form-control" readonly value="<?= $row['pil_a']; ?>" >
								</div>
								<div class="form-group col-md-6">
									<label>Pilihan B</label>
									<input type="text" name="b[]" class="form-control" readonly value="<?= $row['pil_b']; ?>">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-6">
									<label>Pilihan C</label>
									<input type="text" name="c[]" class="form-control" readonly value="<?= $row['pil_c']; ?>">
								</div>
								<div class="form-group col-md-6">
									<label>Pilihan D</label>
									<input type="text" name="d[]" class="form-control" readonly value="<?= $row['pil_d']; ?>">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-6 mx-auto">
									<label>Jawaban</label>
									<input type="text" name="jawaban[]" class="form-control" readonly value="<?= $row['jawaban']; ?>">
								</div>
							</div>
							<?php } ?>
						<a href="<?= base_url('Latihan'); ?>" class="btn btn-danger float-right">Kembali</a>
					</form>
				</div>
			</div>
	</main>
</div>			