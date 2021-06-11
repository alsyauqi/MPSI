<?php
	include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<title>SIB </title>

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
	<div class="edge-header view" style="background-image: url('http://mdbootstrap.com/img/Photos/Slides/img%20(97).jpg'); background-repeat: no-repeat; background-size: cover;z-index: -4;">
		<div class="mask pattern-1">

		</div>
	</div>
	<div class="container free-bird" style="z-index: 2">
		<div class="row">
			<div class="col-md-8 col-lg-7 mx-auto float-xs-snone white z-depth-1 py-2 px-2">
				<h2 class="h2-responsive"><strong>Form Daftar Akun Mahasiswa</strong></h2>

			<div class="card-block">
				<form method="post" action="scrip-registerMahasiswa.php" >
                    <div class="md-form">
                        <input type="text" id="inputNRP" name="nrp" class="form-control validate required" idField="NRP">
                        <label for="inputNRP" data-error="" data-success="">NIM *</label>
                    </div>
                    <div class="md-form">
                        <input type="email" id="inputEmailUser" name="emailUser" class="form-control validate required" idField="E-mail">
                        <label for="inputEmailUser" data-error="" data-success="">E-mail *</label>
                    </div>
                    <div class="md-form">
                        <input type="password" id="inputPasswordUser" name="passwordUser" class="form-control validate required" idField="Password">
                        <label for="inputPasswordUser" data-error="" data-success="">Password *</label>
                    </div>
                    
                    <div class="md-form">
                        <input type="text" id="inputNamaLengkapUser" name="namaLengkapUser" class="form-control validate required" idField="Nama Lengkap">
                        <label for="inputNamaLengkapUser" data-error="" data-success="">Nama Lengkap *</label>
                    </div>
                    <div class="md-form">
                        <input type="text" id="inputUsiaUser" name="usiaUser" class="form-control validate required" idField="Usia">
                        <label for="inputUsiaUser" data-error="" data-success="">Usia *</label>
                    </div>
                    <div class="md-form">
                        <h5>Jenis Kelamin</h5>
                        <fieldset class="form-group">
                            <input name="radioGender" type="radio" class="with-gap" id="radioPria" value="pria">
                            <label for="radioPria">Pria</label>
                        </fieldset>
                        <fieldset class="form-group">
                            <input name="radioGender" type="radio" class="with-gap" id="radioWanita" value="wanita">
                            <label for="radioWanita">Wanita</label>
                        </fieldset>
                    </div>
                    <div class="md-form">
                        <input type="text" id="inputProvinsi" name="provinsi" class="form-control validate required" idField="Provinsi">
                        <label for="inputProvinsi" data-error="" data-success="">Provinsi *</label>
                    </div>
                    <div class="md-form">
                        <textarea type="text" id="inputKota" name="kota" class="md-textarea validate required" idField="Kota"></textarea>
                        <label for="inputKota" data-error="" data-success="">Kota *</label>
                    </div>
                    <div class="md-form">
                        <input type="text" id="inputAlamat" name="alamat" class="form-control validate required" idField="Alamat">
                        <label for="inputAlamat" data-error="" data-success="">Alamat *</label>
                    </div>
                    <div class="md-form">
                        <input type="text" id="inputProdi" name="prodi" class="form-control validate required" idField="Prodi">
                        <label for="inputProdi" data-error="" data-success="">Prodi *</label>
                    </div>
                    <div class="md-form">
                        <input type="text" id="inputJurusan" name="jurusan" class="form-control validate required" idField="Jurusan">
                        <label for="inputJurusan" data-error="" data-success="">Jurusan *</label>
                    </div>
                    <div class="md-form">
                        <input type="text" id="inputSemester" name="semester" class="form-control validate required" idField="Semester">
                        <label for="inputSemester" data-error="" data-success="">Semester *</label>
                    </div>
                    <div class="md-form">
                        <input type="text" id="inputTempatLahir" name="tempatLahir" class="form-control validate required" idField="Tempat Lahir">
                        <label for="inputTempatLahir" data-error="" data-success="">Tempat Lahir *</label>
                    </div>
                    <div class="md-form">
                        <input placeholder="Pilih Tanggal" type="text" id="datePickerTanggalLahir" name="tanggal" class="form-control datepicker">
                        <label for="datePickerTanggalLahir">Tanggal Lahir</label>
                    </div>                    
                    <div class="md-form">
                        <input placeholder="Pilih Tanggal" type="text" id="datePickerTanggalMasuk" name="tanggalMasuk" class="form-control datepicker">
                        <label for="datePickerTanggalMasuk">Tanggal Masuk</label>
                    </div>
                    
                    <br><br>
                    <div class="text-xs-center">
                        <button type="submit" class="btn btn-primary waves-effect waves-light submit">Daftar</button>
                    </div>
                
						<p style="font-weight: 300;font-size: 0.75rem">Field dengan tanda bintang (*) harus diisi</p>
					</div>
				 </div>
                </form>

			</div>
		</div>
	</div>

	<div class="fixed-action-btn" style="bottom: 45px; right:24px;">
		<a class="btn-floating btn-large red" id="fixedBtn">
			<i class="fa fa-arrow-left"></i>
		</a>
	</div>
    

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
            $('.datepicker').pickadate();
            $('.mdb-select').material_select();
			$("form").submit(function(e){
				var isValid = true;
				var counter = 1;
				var url = "script-registerMahasiswa.php";

				$("input,textarea").each(function(){
					if($.trim($(this).val()).length == 0){
						var fieldKosong = $(this).attr("idField");			
						isValid = false;
						toastr["error"](fieldKosong+" Kosong");
						counter++;
					}else{
						$(this).focus()
					}
				});

				if(!isValid){
					toastr["error"]("Isi semua field yang memiliki tanda bintang (*)");
					return isValid;
				}else{
					$.ajax({
						type: "POST",
						url: url,
						data: $("#registerForm").serialize(),
						success: function(data){
							toastr["success"]("Registrasi Berhasil");
							console.log(data);
							$(location).attr('href',"index.php");
						},
						error: function(jqXHR, status, err){
							alert("Insert gagal");
							console.log("jqXHR : "+jqXHR);
							console.log("status : "+status);
							console.log("err : "+err);
						}
					});
				}

				e.preventDefault();
			});

			$("#fixedBtn").click(function(){
				$(location).attr('href',"index.php");
			});

		});
	</script>

</body>

</html>