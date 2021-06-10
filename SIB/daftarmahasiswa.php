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
					<form action="" id="registerForm">
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
						
						
						<div class="text-xs-left">
							<button type="submit" class="btn btn-primary waves-effect waves-light submit">Daftar</button>
						</div>
					</form>
					<div class="my-2">
						<p style="font-weight: 300;font-size: 0.75rem">Field dengan tanda bintang (*) harus diisi</p>
					</div>
				</div>
				
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