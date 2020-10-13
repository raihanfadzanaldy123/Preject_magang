<!-- header-start -->
<header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="index.html">
                                    <img src="<?=base_url('assets/edumark/img/logo.png')?>" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="<?=base_url()?>">Home</a></li>
                                        <li><a href="<?=base_url('Home/pelajaran')?>">Courses</a></li>
                                        <li><a href="<?=base_url('Home/tentang')?>">About</a></li>
                                        <li><a href="<?=base_url('Home/kontak')?>">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="log_chat_area d-flex align-items-center">
                                <a href="#test-form" class="login popup-with-form">
                                    <i class="flaticon-user"></i>
                                    <span>log in</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- form itself end-->
    <form id="test-form" class="white-popup-block mfp-hide" action="<?= base_url('Login/login_action'); ?>" method="post">
        <div class="popup_box ">
            <div class="popup_inner">
                <div class="logo text-center">
                    <a href="#">
                        <img src="<?=base_url('assets/edumark/img/form-logo.png')?>" alt="">
                    </a>
                </div>
                <h3>Sign in</h3>
                    <div class="row">
                        <div class="col-xl-12 col-md-12">
                            <input type="email" name="email" placeholder="Enter email">
                        </div>
                        <div class="col-xl-12 col-md-12">
                            <input type="pass" name="pass" placeholder="Password">
                        </div>
                        <div class="col-xl-12">
                            <button type="submit" class="boxed_btn_orange">Sign in</button>
                        </div>
                    </div>
                <p class="doen_have_acc">Don’t have an account? <a class="dont-hav-acc" href="#test-form2">Sign Up</a>
                </p>
            </div>
        </div>
    </form>
    <!-- form itself end -->

    <!-- form itself end-->
    <form id="test-form2" class="white-popup-block mfp-hide" action="<?= base_url('Login/register_action'); ?>" method="post">
        <div class="popup_box ">
            <div class="popup_inner">
                <div class="logo text-center">
                    <a href="#">
                        <img src="<?=base_url('assets/edumark/img/form-logo.png')?>" alt="">
                    </a>
                </div>
                <h3>Registration</h3>
                <div class="row">
                    <div class="col-xl-12 col-md-12">
                        <input type="text" name="user" placeholder="Username">
                    </div>
                    <div class="col-xl-12 col-md-12">
                        <input type="email" name="email" placeholder="Email">
                    </div>
                    <div class="col-xl-12 col-md-12">
                        <input type="password" name="pass" placeholder="Password">
                    </div>
                    <div class="col-xl-12">
                        <input type="submit" class="boxed_btn_orange" value="Register">
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- form itself end -->