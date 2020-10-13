    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Buat akun</h3></div>
                                    <div class="row">
                                        <div class="card-body">
                                            <form action="<?php echo base_url(). 'Login/register_action'; ?>" method="post">
                                                <div class="form-group">
                                                    <label class="small mb-1">Nama</label>
                                                    <input class="form-control py-2" name="nama" type="text" placeholder="Masukan Nama" />
                                                </div>
                                                <div class="form-group">
                                                    <label class="small mb-1">No handphone</label>
                                                    <input class="form-control py-2" name="hp" type="number" placeholder="No Handphone" />
                                                </div>
                                                <div class="form-group">
                                                    <label class="small mb-1">Kelas</label>
                                                    <input class="form-control py-2" name="kelas" type="number" placeholder="Kelas" />
                                                </div>
                                                <div class="form-group">
                                                    <label class="small mb-1">Tanggal lahir</label>
                                                    <input class="form-control py-2" name="tgl" type="date" placeholder="tanggal lahir" />
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label class="small mb-1">Username</label>
                                                    <input class="form-control py-2" name="user" type="text" placeholder="masukan username" />
                                                </div>
                                                <div class="form-group">
                                                    <label class="small mb-1">email</label>
                                                    <input class="form-control py-2" name="email" type="email" placeholder="masukan alamat email" />
                                                </div>
                                                <div class="form-group">
                                                    <label class="small mb-1">Password</label>
                                                    <input class="form-control py-2" name="pass" type="password" placeholder="masukan password" />
                                                </div>
                                                <input type="submit" class="btn btn-primary" value="register" >
                                            </form>
                                        </div>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="<?= base_url('login');?>">Sudah mempunyai akun? kembali</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
