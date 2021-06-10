<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>SIB</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-dark navbar-fixed-top scrolling-navbar">
        <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#collapseContent">
            <i class="fa fa-bars"></i>
        </button>

        <div class="container">
            <!-- Konten yang di collapse -->
            <div class="collapse navbar-toggleable-xs" id="collapseContent">
                <a class="navbar-brand" href="#">
                    <strong>SIB</strong>
                </a>

                <ul class="nav navbar-nav smooth-scroll">
                   
                    <li class="nav-item">
                        <a class="nav-link" href="#daftarBeasiswa">Daftar Beasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#footer">Tentang SIB</a>
                    </li>

                    <?php if(isset($_SESSION['id']) && !empty($_SESSION['id'])) {?>
                    <li class="nav-item">
                        <a class="nav-link" id="btnDashboard">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="btnLogout">Keluar</a>
                    </li>
                    <?php } else {?>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="modal" data-target="#modalLogin">Masuk</a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>
    <!--Navbar-->

    <!--Carousel-->
    <div id="carousel-featured" class="carousel slide carousel-fade white-text" data-ride="carousel">
        <!-- Indikator -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-featured" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-featured" data-slide-to="1"></li>
            <li data-target="#carousel-featured" data-slide-to="2"></li>
        </ol>
        <!-- Indikator -->

        <!-- Konten carousel-->
        <div class="carousel-inner" role="listbox">

            <!-- Slide 1 -->
            <div class="carousel-item active view hm-black-light" style="background-image: url('http://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(11).jpg'); background-repeat: no-repeat; background-size: cover;">

                <!-- Caption -->
                <div class="flex-center white-text animated fadeInDown">
                    <ul>
                        <li>
                            <h1 class="h1-responsive">
                                Apply Sekarang Beasiswa Mountain East Dakota
                            </h1>
                        </li>
                        <li>
                            <p>
                                $200 Tuition per bulan dan program pengembangan technical skill serta kesempatan 3 bulan internship di rocky mount Nevada
                            </p>
                        </li>
                        <li>
                            <a target="_blank" href="https://id.tun.com/beasiswa/kategori/residensi_kebutuhan/selatan-dakota/" class="btn btn-info btn-lg" rel="nofollow">Detail Beasiswa</a>
                        </li>
                    </ul>
                </div>
                <!-- Caption -->

            </div>
            <!-- Slide 1 -->

            <!-- Slide 2 -->
            <div class="carousel-item view hm-black-light" style="background-image: url('http://mdbootstrap.com/img/Photos/Slides/img%20(67).jpg'); background-repeat: no-repeat; background-size: cover;">

                <!-- Caption -->
                <div class="flex-center white-text animated fadeInDown">
                    <ul>
                        <li>
                            <h1 class="h1-responsive">
                                Program Beasiswa Pengembang Gravicode
                            </h1>
                        </li>
                        <li>
                            <p>
                                Bergabung dengan program pengembangan bakat dan kemampuan teknis dengan <i>monthly tuition</i> sebesar $150
                            </p>
                        </li>
                        <li>
                            <a target="_blank" href="https://gravicode.com/" class="btn btn-info btn-lg" rel="nofollow">Detail Beasiswa</a>
                        </li>
                    </ul>
                </div>
                <!-- Caption -->

            </div>
            <!-- Slide 2 -->

            <!-- Slide 3 -->
            <div class="carousel-item view hm-black-light" style="background-image: url('http://mdbootstrap.com/img/Photos/Slides/img%20(97).jpg'); background-repeat: no-repeat; background-size: cover;">

                <!-- Caption -->
                <div class="flex-center white-text animated fadeInDown">
                    <ul>
                        <li>
                            <h1 class="h1-responsive">
                                Program Pengembangan Ketrampilan Kepemimpinan
                            </h1>
                        </li>
                        <li>
                            <p>
                            Peserta mendapat dukungan beasiswa penuh dan tunjangan bulanan, pelatihan berjenjang dan monitoring yang terstruktur untuk meningkatkan soft skill.
                            </p>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.tanotofoundation.org/id/pemimpin-masa-depan/pengembangan-kepemimpinan-indonesia/teladan/" class="btn btn-info btn-lg" rel="nofollow">Detail Beasiswa</a>
                        </li>
                    </ul>
                </div>
                <!-- Caption -->

            </div>
            <!-- Slide 3 -->
        </div>
        <!-- Konten carousel-->

        <!-- kontroller carousel -->
        <a class="left carousel-control" href="#carousel-featured" role="button" data-slide="prev">
            <span class="icon-prev" aria-hidden="true"></span>
            <span class="sr-only">Sebelumnya</span>
        </a>

        <a class="right carousel-control" href="#carousel-featured" role="button" data-slide="next">
            <span class="icon-next" aria-hidden="true"></span>
            <span class="sr-only">Selanjutnya</span>
        </a>
        <!-- kontroller carousel -->
    </div>
    <!-- Carousel -->
    <br>

    <!-- Konten Landing Page -->
    <div class="container" id="daftarBeasiswa">
        <div class="row">
            <!-- Kolom Pertama -->
            <div class="col-lg-4">
                <div class="card wow fadeIn" data-wow-delay="0.2s">
                    <!-- Card Image -->
                    <div class="view overlay hm-white-slight">
                        <img src="https://bidikmisi.belmawa.ristekdikti.go.id/images/logo.png" class="img-fluid" alt="">
                        <a href="https://bidikmisi.belmawa.ristekdikti.go.id/">
                            <div class="mask"></div>
                        </a>
                    </div>

                    <!-- Card Content -->
                    <div class="card-block">
                        <h4 class="card-title">BIDIKMISI</h4>
                        <p class="card-text">BIDIKMISI adalah bantuan biaya pendidikan bagi calon mahasiswa tidak mampu secara ekonomi dan memiliki potensi akademik baik untuk menempuh pendidikan di perguruan tinggi pada program studi unggulan sampai lulus tepat waktu.</p>
                        <a href="#"><a href='https://bidikmisi.belmawa.ristekdikti.go.id/'class="btn btn-info">Info Selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- Kolom Kedua -->
            <div class="col-lg-4">
                <div class="card wow fadeIn" data-wow-delay="0.2s">
                    <!-- Card Image -->
                    <div class="view overlay hm-white-slight">
                        <img src="https://kaltimtoday.co/wp-content/uploads/2020/02/sliders5d7b36327d196qADsM1568355890.jpeg" class="img-fluid" alt="">
                        <a href="https://beasiswa.kaltimprov.go.id/">
                            <div class="mask"></div>
                        </a>
                    </div>

                    <!-- Card Content -->
                    <div class="card-block">
                        <h4 class="card-title">Kaltim Tuntas</h4>
                        <p class="card-text">Pemerintah Provinsi Kalimantan Timur (Kaltim) memberikan kesempatan kepada Pelajar dan Mahasiswa Kaltim untuk mengikuti program Beasiswa tahun 2021.</p>
                        <a href="#"><a href='https://beasiswa.kaltimprov.go.id/'class="btn btn-info">Info Selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- Kolom Ketiga -->
            <div class="col-lg-4">
                <div class="card wow fadeIn" data-wow-delay="0.2s">
                    <!-- Card Image -->
                    <div class="view overlay hm-white-slight">
                        <img src="https://djarumbeasiswaplus.org/mobile/assets/img/logo.jpg" class="img-fluid" alt="">
                        <a href="https://djarumbeasiswaplus.org/">
                            <div class="mask"></div>
                        </a>
                    </div>

                    <!-- Card Content -->
                    <div class="card-block">
                        <h4 class="card-title">Beasiswa Djarum Plus</h4>
                        <p class="card-text">Lebih dari 11.840 mahasiswa berprestasi telah menjadi penerima program. Mereka berasal dari berbagai macam latar belakang pendidikan di lebih dari 123 perguruan tinggi unggulan di seluruh 34 provinsi di Indonesia. Sebuah bukti keseriusan Djarum Foundation dalam komitmennya membangun bangsa melalui pendidikan.</p>
                        <a href="#"><a href='https://djarumbeasiswaplus.org/'class="btn btn-info">Info Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Konten Landing Page -->

    <!-- Footer -->
    <footer class="page-footer center-on-small-only" id="footer">
        <div class="container-fluid">
            <div class="row">
                <!-- Kolom footer pertama -->
                <div class="col-lg-3 offset-lg-1 hidden-lg-down">
                    <h5 class="title">Tentang SIB</h5>
                    <p>SIB atau <i>Sistem Informasi Beasiswa</i> program manajemen beasiswa  yang dapat digunakan oleh mahasiswa untuk mendaftarkan dirinya ke beasiswa yang disediakan oleh penyedia beasiswa</p>

                    
                </div>

                <hr class="hidden-md-up">

                <!-- Kolom footer kedua -->
                <div class="col-lg-2 col-md-4 offset-lg-1">
                    <h5 class="title">Pranala Luar</h5>
                    <ul>
                        <li><a href="https://politanisamarinda.ac.id/">Website </a></li>
                        <li><a href="#!">Kemahasiswaan </a></li>
                        <li><a href="#!">PMB </a></li>
                    </ul>
                </div>

                <!-- Kolom footer ketiga -->
                <div class="col-lg-2 col-md-4">
                    <h5 class="title">Referensi Luar</h5>
                    <ul>
                        <li><a href="https://www.kemdikbud.go.id/main/">Kemendikbud</a></li>
                        <li><a href="https://www.lpdp.kemenkeu.go.id/">Website LPDP</a></li>
                        <li><a href="#!"></a></li>
                    </ul>
                </div>

                <!-- Kolom footer keempat -->
                <div class="col-lg-2 col-md-4">
                    <h5 class="title">Sosial Media</h5>
                    <ul>
                        <li><a href="https://id-id.facebook.com/public/Politani-Samarinda">Facebook </a></li>
                        <li><a href="#!">Telepon. 0541 -260421, Faximile. 0541- 260680</a></li>
                        <li><a href="#!">Kemahasiswaan Lt.1 Gedung Direktorat </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer -->

    <!-- Modal Login-->
    <div class="modal fade modal-ext" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="loginLabel" aria-hidden="true">
        <div class="modal-dialog cascading-model" role="document">
            <!-- Konten -->
            <div class="modal-content">
                <div class="modal-c-tabs">
                    <ul class="nav nav-tabs tabs-2 light-blue darken-3" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#panelLoginInternal" role="tab
                            "><i class="fa fa-user mr-1"></i> Mahasiswa/BAAK</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#panelLoginEksternal" role="tab
                            "><i class="fa fa-user mr-1"></i> Pendonor</a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <!-- Panel Login Mahasiswa -->
                        <div class="tab-pane fade in show active" id="panelLoginInternal" role="tabpanel">
                            <!-- Body -->
                            <div class="modal-body">
                                <div class="md-form">
                                    <i class="fa fa-envelope prefix"></i>
                                    <input type="email" name="email" id="inputEmailMhs" class="form-control validate">
                                    <label for="inputEmailMhs" data-error="Emailsalah" data-success="">E-mail</label>
                                </div>

                                <br>

                                <div class="md-form">
                                    <i class="fa fa-lock prefix"></i>
                                    <input type="password" name="password" id="inputPasswordMhs" class="form-control">
                                    <label for="inputPasswordMhs">Password</label>
                                </div>

                                <div class="text-xs-center">
                                    <button class="btn btn-primary btn-lg" id="btnMasukMhs">Masuk</button>
                                </div>
                            </div>

                            <!-- Footer -->
                            <div class="modal-footer">
                                <div class="options">
                                    <p>Belum punya akun? <a href="daftarmahasiswa.php">Daftar</a></p>
                                    <p>Lupa <a href="#">Password?</a></p>
                                </div>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                            </div>
                        </div>

                        <!-- Panel Login Pendonor -->
                        <div class="tab-pane fade" id="panelLoginEksternal" role="tabpanel">
                            <!-- Body -->
                            <div class="modal-body">
                                <div class="md-form">
                                    <i class="fa fa-envelope prefix"></i>
                                    <input type="email" name="email" id="inputEmailDon" class="form-control validate">
                                    <label for="inputEmailDon" data-error="Emailsalah" data-success="">E-mail</label>
                                </div>

                                <br>

                                <div class="md-form">
                                    <i class="fa fa-lock prefix"></i>
                                    <input type="password" name="password" id="inputPasswordDon" class="form-control">
                                    <label for="inputPasswordDon">Password</label>
                                </div>

                                <div class="text-xs-center">
                                    <button class="btn btn-primary btn-lg" id="btnMasukDon">Masuk</button>
                                </div>
                            </div>

                            <!-- Footer -->
                            <div class="modal-footer">
                                <div class="options">
                                    <p>Ingin Menjadi Donatur? <a href="daftar.php">Daftar</a></p>
                                    <p>Lupa <a href="#">Password?</a></p>
                                </div>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Header -->
            </div>
        </div>
        <!-- Modal Login-->

        <!-- SCRIPTS -->

        <!-- JQuery -->
        <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>

        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="js/tether.min.js"></script>

        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>

        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="js/mdb.min.js"></script>

        <script>
            new WOW().init();
        </script>

        <script>
            $(document).ready(function(){
                console.log("script jalan")
                $('#btnMasukMhs').click(function(){
                    var emailMhs = $('#inputEmailMhs').val();
                    var passwordMhs = $('#inputPasswordMhs').val();
                    var isValid = true;
                    var url = 'script-login-mahasiswa.php';

                    console.log(emailMhs);
                    console.log(passwordMhs);

                    if(emailMhs.length == 0){
                        toastr["error"]("Email Kosong");
                        isValid = false;
                    }
                    if(passwordMhs.length == 0){
                        toastr["error"]("Password Kosong");
                        isValid = false;
                    }

                    if(!isValid){
                        toastr["error"]("Email/Password Kosong");
                    }else{
                        $.ajax({
                            type: "POST",
                            url: url,
                            dataType: "json",
                            data: {'emailMhs': emailMhs, 'passwordMhs': passwordMhs},
                            success: function(data){
                                // console.log("yang pasti masuk success");
                                console.log(data);
                                // console.log(data[0].JUMLAH);
                                // console.log(data[0].ROLE);
                                if(data.JUMLAH > 0){
                                    toastr["success"]("Berhasil Masuk Mahasiswa");
                                    $(location).attr('href',"dashboard.php");              
                                }else{
                                    toastr["error"]("Gagal Masuk Mahasiswa");
                                }                                                      
                            },
                            error: function(jqXHR, status, err){
                                alert("Login gagal");
                                console.log("jqXHR : "+jqXHR);
                                console.log("status : "+status);
                                console.log("err : "+err);
                            }
                        });
                    }
                });
                $('#btnMasukDon').click(function(){
                    var emailDon = $('#inputEmailDon').val();
                    var passwordDon = $('#inputPasswordDon').val();
                    var isValid = true;
                    var url = 'script-login-pendonor.php';

                    if(emailDon.length == 0){
                        toastr["error"]("Email Kosong");
                        isValid = false;
                    }
                    if(passwordDon.length == 0){
                        toastr["error"]("Password Kosong");
                        isValid = false;
                    }

                    if(!isValid){
                        toastr["error"]("Email/Password Kosong");
                    }else{
                        $.ajax({
                            type: "POST",
                            url: url,
                            dataType: "json",
                            data: {'emailDonor': emailDon, 'passwordDonor': passwordDon},
                            success: function(data){
                                // console.log("yang pasti masuk success");
                                // console.log(data);
                                // console.log(data[0].JUMLAH);
                                // console.log(data[0].ROLE);
                                if(data.JUMLAH > 0){
                                    toastr["success"]("Berhasil Masuk Pendonor");
                                    $(location).attr('href',"dashboard.php");              
                                }else{
                                    toastr["error"]("Gagal Masuk Pendonor");
                                }                                                      
                            },
                            error: function(jqXHR, status, err){
                                alert("Login gagal");
                                console.log("jqXHR : "+jqXHR);
                                console.log("status : "+status);
                                console.log("err : "+err);
                            }
                        });
                    }
                });

                $("#btnDashboard").click(function(){
                    $(location).attr('href',"dashboard.php");
                });

                $('#btnLogout').click(function(){
                var url = 'destroy.php';
                $.ajax({
                    type: "POST",
                    url: url,
                    success: function(){
                        $(location).attr('href',"index.php");
                    },
                    error: function(jqXHR, status, err){
                        alert("Logout gagal");
                        console.log("jqXHR : "+jqXHR);
                        console.log("status : "+status);
                        console.log("err : "+err);
                    }
                });
            });
            });
        </script>

    </body>

    </html>