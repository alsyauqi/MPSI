<?php
	include 'config.php';

	$conn = mysqli_connect($host, $username, $password, $dbname);

	if(!$conn){
		die("Koneksi ke database gagal: ".mysqli_connect_error());
	}
    $nrpMahasiswa = $_POST["nrp"];
	$namaMahasiswa = $_POST["namaLengkapUser"];
    $tanggalLahir = $_POST["tanggal"];
	$tanggalMasuk = $_POST["tanggalMasuk"];
    $tempatLahir = $_POST["tempatLahir"];
    $usiaMahasiswa = $_POST["usiaUser"];
    $sexMahasiswa = $_POST["radioGender"];
    $provinsiMahasiswa = $_POST["provinsi"];
    $kotaMahasiswa = $_POST["kota"];
	$alamatMahasiswa = $_POST["alamat"];
    $prodiMahasiswa = $_POST["prodi"];
    $jurusanMahasiswa = $_POST["jurusan"];
	$semesterMahasiswa = $_POST["semester"];


    $emailMahasiswa = $_POST["emailUser"];
    $passwordMahasiswa = md5($_POST["passwordUser"]);
	$saltMahasiswa = "saltnya";
    $role = $_POST["radioRule"];
	$tanggalPembuatan = date("Y-m-d H:i:s");
	$terakhirLogin = date("Y-m-d H:i:s");

	//Insert ke tabel tb_detail_user
	// $sql = "INSERT INTO tb_detail_user (nrp,nama_user, tanggal_lahir, tempat_lahir, jenis_kelamin, provinsi, kota, alamat, prodi, jurusan ,semester) VALUES ( '$nrpMahasiswa', '$namaMahasiswa', '$tanggalLahir', '$tempatLahir', '$usiaMahasiswa', '$sexMahasiswa', '$provinsiMahasiswa', '$kotaMahasiswa', $alamatMahasiswa', '$prodiMahasiswa, '$jurusanMahasiswa', '$semesterMahasiswa')";
    $sql = "INSERT INTO tb_detail_user (nama_lengkap, usia, jenis_kelamin, provinsi, kota, alamat, prodi, jurusan ,semester, tanggal_lahir, tempat_lahir,tanggal_masuk, nrp) VALUES ( '$namaMahasiswa', '$usiaMahasiswa', '$sexMahasiswa', '$provinsiMahasiswa', '$kotaMahasiswa', $alamatMahasiswa', '$prodiMahasiswa, '$jurusanMahasiswa', '$semesterMahasiswa', '$tanggalLahir', '$tempatLahir', '$tanggalMasuk', '$nrpMahasiswa')";

	if(mysqli_query($conn, $sql)){
		$last_id = mysqli_insert_id($conn);
	} else {
		echo "Error: ".$sql."<br>".mysqli_error($conn);
	}

	// $sql = "INSERT INTO tb_user (id_detail_user,email, password, salt, tanggal_pembuatan, terakhir_login) VALUES ('$last_id', '$emailMahasiswa', '$passwordMahasiswa', '$saltMahasiswa' , '$roleMahasiswa' , '$tanggalPembuatan' , '$terakhirLogin')";
    $sql = "INSERT INTO tb_user ('id_detail_user', 'email', 'password', 'salt', 'tanggal_pembuatan', 'terakhir_login') VALUES ('$last_id', '$emailMahasiswa', '$passwordMahasiswa', '$saltMahasiswa' , '$role' , '$tanggalPembuatan' , '$terakhirLogin')";
	
	if(mysqli_query($conn, $sql)){
		echo "Sukses";
	} else {
		echo "Error: ".$sql."<br>".mysqli_error($conn);
	}

	mysqli_close($conn);
?>