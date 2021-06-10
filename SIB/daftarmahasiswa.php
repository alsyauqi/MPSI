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
				var url = "script-register.php";

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