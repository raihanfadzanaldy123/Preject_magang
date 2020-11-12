    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg overlay2">
        <h3>Profil</h3>
    </div>
    <!-- bradcam_area_end -->

    <?php foreach ($join as $data) {
    } ?>

    <!-- about_area_start -->
    <div class="about_area">
        <div class="container">
            <div class="row">
                <div class="col-5 ">
                    <h1>
                        <legend>Edit Profil</legend>
                    </h1>
                    <form action="<?= base_url('Profil/edit_aksi/' . $_SESSION['id_pengguna']) ?>" method="POST">
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" name="nama" class="form-control" id="" value="<?= $pengguna->nama; ?>">
                        </div>
                        <input type="hidden" name="id" value="<?= $pengguna->id ?>">
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" name="email" class="form-control" id="" value="<?= $pengguna->email; ?>">
                        </div>

                        <div class="form-group">
                            <label for="">No. HP</label>
                            <input type="text" name="hp" class="form-control" id="" value="<?= $pengguna->hp; ?>">
                        </div>

                        <div class="form-group">
                            <input type="submit" value="Simpan" name="save" class=" btn btn-info btn-block">
                        </div>
                        <div class="icon">
                            <i class="flaticon-art-and-design"></i>
                        </div>
                    </form>
                </div>
                <div class="col-xl-6 offset-xl-1 col-lg-6">
                    <div class="about_tutorials">
                        <div class="courses">
                            <div class="inner_courses">
                                <div class="text_info">
                                    <span><?= $data['Total'] ?></span>
                                    <p> Tugas Selesai</p>
                                </div>
                            </div>
                        </div>
                        <div class="courses-blue">
                            <div class="inner_courses">
                                <div class="text_info">
                                    <span><?= $total_materi->Total_materi ?></span>
                                    <p> Total Materi</p>
                                </div>

                            </div>
                        </div>
                        <div class="courses-sky">
                            <div class="inner_courses">
                                <div class="text_info">
                                    <span><?= $total_materi->Total_materi - $data['Total'] ?></span>
                                    <p> Materi Belum Selesai</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about_area_end -->

    <!-- our_team_member_start -->
    <div class="our_team_member">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="single_team">
                        <div class="thumb">
                            <img src="img/team/1.png" alt="">
                            <div class="social_link">
                                <a href="#"><i class="fa fa-envelope"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="master_name text-center">
                            <h3>Macau Wilium</h3>
                            <p>Massage Master</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="single_team">
                        <div class="thumb">
                            <img src="img/team/2.png" alt="">
                            <div class="social_link">
                                <a href="#"><i class="fa fa-envelope"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="master_name text-center">
                            <h3>Dan Jacky</h3>
                            <p>Mens Cut</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="single_team">
                        <div class="thumb">
                            <img src="img/team/3.png" alt="">
                            <div class="social_link">
                                <a href="#"><i class="fa fa-envelope"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="master_name text-center">
                            <h3>Luka Luka</h3>
                            <p>Mens Cut</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="single_team">
                        <div class="thumb">
                            <img src="img/team/4.png" alt="">
                            <div class="social_link">
                                <a href="#"><i class="fa fa-envelope"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="master_name text-center">
                            <h3>Rona Dana</h3>
                            <p>Ladies Cut</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- our_team_member_end -->

    <!-- testimonial_area_start -->
    <div class="testimonial_area testimonial_bg_1 overlay">
        <div class="testmonial_active owl-carousel">
            <div class="single_testmoial">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="testmonial_text text-center">
                                <div class="author_img">
                                    <img src="img/testmonial/author_img.png" alt="">
                                </div>
                                <p>
                                    "Working in conjunction with humanitarian aid <br> agencies we have supported
                                    programmes to <br>
                                    alleviate.
                                    human suffering.

                                </p>
                                <span>- Jquileen</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_testmoial">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="testmonial_text text-center">
                                <div class="author_img">
                                    <img src="img/testmonial/author_img.png" alt="">
                                </div>
                                <p>
                                    "Working in conjunction with humanitarian aid <br> agencies we have supported
                                    programmes to <br>
                                    alleviate.
                                    human suffering.

                                </p>
                                <span>- Jquileen</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial_area_end -->

    <!-- our_courses_start -->
    <div class="our_courses">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        <h3>Our Course Speciality</h3>
                        <p>Your domain control panel is designed for ease-of-use and <br>
                            allows for all aspects of your domains.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- <div class="col-xl-3 col-md-6 col-lg-6">
                    <div class="single_course text-center">
                        <div class="icon">
                            <i class="flaticon-art-and-design"></i>
                        </div>
                        <h3>Premium Quality</h3>
                        <p>
                            Your domain control panel is designed for ease-of-use <br> and <br>
                            allows for all aspects of
                        </p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-6">
                    <div class="single_course text-center">
                        <div class="icon blue">
                            <i class="flaticon-business-and-finance"></i>
                        </div>
                        <h3>Kelas Reguler</h3>
                        <p>
                            Kelas Reguler
                        </p>
                    </div>
                </div> -->
                <div class="col-xl-3 col-md-6 col-lg-6">
                    <div class="single_course text-center">
                        <div class="icon">
                            <i class="flaticon-premium"></i>
                        </div>
                        <h3>Kelas Reguler</h3>
                        <p>
                            Kelas Premium
                        </p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-6">
                    <div class="single_course text-center">
                        <div class="icon gradient">
                            <i class="flaticon-crown"></i>
                        </div>
                        <h3>Premium Quality</h3>
                        <p>
                            kelas Premium
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- our_courses_end -->

    <!-- subscribe_newsletter_Start -->
    <div class="subscribe_newsletter">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="newsletter_text">
                        <h3>Subscribe Newsletter</h3>
                        <p>Your domain control panel is designed for ease-of-use and allows for all aspects of your</p>
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-lg-6">
                    <div class="newsletter_form">
                        <h4>Your domain control panel is</h4>
                        <form action="#" class="newsletter_form">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit">Sign Up</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- subscribe_newsletter_end -->

    <!-- our_latest_blog_start -->
    <div class="our_latest_blog">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        <h3>Our Latest Blog</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-4">
                    <div class="single_latest_blog">
                        <div class="thumb">
                            <img src="img/latest_blog/1.png" alt="">
                        </div>
                        <div class="content_blog">
                            <div class="date">
                                <p>12 Jun, 2019 in <a href="#">Design tips</a></p>
                            </div>
                            <div class="blog_meta">
                                <h3><a href="#">Commitment to dedicated Support</a></h3>
                            </div>
                            <p class="blog_text">
                                Firmament morning sixth subdue darkness creeping gathered divide.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_latest_blog">
                        <div class="thumb">
                            <img src="img/latest_blog/2.png" alt="">
                        </div>
                        <div class="content_blog">
                            <div class="date">
                                <p>12 Jun, 2019 in <a href="#">Design tips</a></p>
                            </div>
                            <div class="blog_meta">
                                <h3><a href="#">Commitment to dedicated Support</a></h3>
                            </div>
                            <p class="blog_text">
                                Firmament morning sixth subdue darkness creeping gathered divide.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_latest_blog">
                        <div class="thumb">
                            <img src="img/latest_blog/3.png" alt="">
                        </div>
                        <div class="content_blog">
                            <div class="date">
                                <p>12 Jun, 2019 in <a href="#">Design tips</a></p>
                            </div>
                            <div class="blog_meta">
                                <h3><a href="#">Commitment to dedicated Support</a></h3>
                            </div>
                            <p class="blog_text">
                                Firmament morning sixth subdue darkness creeping gathered divide.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- our_latest_blog_end -->


    <!-- footer -->
    <footer class="footer footer_bg_1">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="img/logo.png" alt="">
                                </a>
                            </div>
                            <p>
                                Firmament morning sixth subdue darkness creeping gathered divide our let god moving.
                                Moving in fourth air night bring upon it beast let you dominion likeness open place day
                                great.
                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-youtube-play"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-2 offset-xl-1 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Courses
                            </h3>
                            <ul>
                                <li><a href="#">Wordpress</a></li>
                                <li><a href="#"> Photoshop</a></li>
                                <li><a href="#">Illustrator</a></li>
                                <li><a href="#">Adobe XD</a></li>
                                <li><a href="#">UI/UX</a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Resourches
                            </h3>
                            <ul>
                                <li><a href="#">Free Adobe XD</a></li>
                                <li><a href="#">Tutorials</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#"> About</a></li>
                                <li><a href="#"> Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Address
                            </h3>
                            <p>
                                200, D-block, Green lane USA <br>
                                +10 367 467 8934 <br>
                                edumark@contact.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer -->


    <!-- form itself end-->
    <form id="test-form" class="white-popup-block mfp-hide">
        <div class="popup_box ">
            <div class="popup_inner">
                <div class="logo text-center">
                    <a href="#">
                        <img src="img/form-logo.png" alt="">
                    </a>
                </div>
                <h3>Sign in</h3>
                <form action="#">
                    <div class="row">
                        <div class="col-xl-12 col-md-12">
                            <input type="email" placeholder="Enter email">
                        </div>
                        <div class="col-xl-12 col-md-12">
                            <input type="password" placeholder="Password">
                        </div>
                        <div class="col-xl-12">
                            <button type="submit" class="boxed_btn_orange">Sign in</button>
                        </div>
                    </div>
                </form>
                <p class="doen_have_acc">Don’t have an account? <a class="dont-hav-acc" href="#test-form2">Sign Up</a>
                </p>
            </div>
        </div>
    </form>
    <!-- form itself end -->

    <!-- form itself end-->
    <form id="test-form2" class="white-popup-block mfp-hide">
        <div class="popup_box ">
            <div class="popup_inner">
                <div class="logo text-center">
                    <a href="#">
                        <img src="img/form-logo.png" alt="">
                    </a>
                </div>
                <h3>Resistration</h3>
                <form action="#">
                    <div class="row">
                        <div class="col-xl-12 col-md-12">
                            <input type="email" placeholder="Enter email">
                        </div>
                        <div class="col-xl-12 col-md-12">
                            <input type="password" placeholder="Password">
                        </div>
                        <div class="col-xl-12 col-md-12">
                            <input type="Password" placeholder="Confirm password">
                        </div>
                        <div class="col-xl-12">
                            <button type="submit" class="boxed_btn_orange">Sign Up</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </form>
    <!-- form itself end -->