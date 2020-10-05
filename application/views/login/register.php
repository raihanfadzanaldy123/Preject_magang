<div class="container">
    <div class="row mt-lg-5">
        <div class="col-4 mx-auto ">
            <div class="card text-center">
                <div class="card-body">
                    <h4 class="card-title">Register</h4>
                    <form action="<?php echo base_url(). 'Login/register_action'; ?>" method="post">
                        <div class="form-group">
                            <label>username</label>
                            <input type="text" class="form-control" name="user" placeholder="username">
                        </div>
                        <div class="form-group">
                            <label>password</label>
                            <input type="password" class="form-control" name="pass" placeholder="password">
                        </div>
                        <input type="submit" class="btn btn-primary" value="register" >
                        <a class="btn btn-danger" href="<?= base_url('login/index');?>">kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>