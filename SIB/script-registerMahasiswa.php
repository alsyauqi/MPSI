<?php
	include 'config.php';

	$conn = mysqli_connect($host, $username, $password, $dbname);

	if(!$conn){
		die("Koneksi ke database gagal: ".mysqli_connect_error());
	}
    $nimMahasiswa = $_POST["nim"];
	$namaMahasiswa = $_POST["nama"];
    $tanggalLahir = $_POST["tanggal"]
    $tempatLahir = $_POST["tempat"]
    $usiaMahasiswa = $_POST["usia"];
    $sexMahasiswa = $_POST["sex"];
    $provinsiMahasiswa = $_POST["provinsi"];
    $kotaMahasiswa = $_POST["kota"];
	$alamatMahasiswa = $_POST["alamat"];
    $prodiMahasiswa = $_POST["prodi"];
    $jurusanMahasiswa = $_POST["jurusan"];
	$semesterMahasiswa = $_POST["semester"];


    $emailMahasiswa = $_POST["email"];
    $passwordMahasiswa = md5($_POST["password"]);
	$saltMahasiswa = "saltnya";
    $roleMahasiswa = "mahasiswa";
	$tanggalPembuatan = date("Y-m-d H:i:s");
	$terakhirLogin = date("Y-m-d H:i:s");

	//Insert ke tabel tb_detail_user
	// $sql = "INSERT INTO tb_detail_user (nrp,nama_user, tanggal_lahir, tempat_lahir, jenis_kelamin, provinsi, kota, alamat, prodi, jurusan ,semester) VALUES ( '$nimMahasiswa', '$namaMahasiswa', '$tanggalLahir', '$tempatLahir', '$usiaMahasiswa', '$sexMahasiswa', '$provinsiMahasiswa', '$kotaMahasiswa', $alamatMahasiswa', '$prodiMahasiswa, '$jurusanMahasiswa', '$semesterMahasiswa')";
    $sql = "INSERT INTO tb_detail_user (nrp, nama_user, tanggal_lahir, tempat_lahir, jenis_kelamin, provinsi, kota, alamat, prodi, jurusan ,semester) VALUES ( '$nimMahasiswa', '$namaMahasiswa', '$tanggalLahir', '$tempatLahir', '$usiaMahasiswa', '$sexMahasiswa', '$provinsiMahasiswa', '$kotaMahasiswa', $alamatMahasiswa', '$prodiMahasiswa, '$jurusanMahasiswa', '$semesterMahasiswa')";

	if(mysqli_query($conn, $sql)){
		$last_id = mysqli_insert_id($conn);
	} else {
		echo "Error: ".$sql."<br>".mysqli_error($conn);
	}

	// $sql = "INSERT INTO tb_user (id_detail_user,email, password, salt, tanggal_pembuatan, terakhir_login) VALUES ('$last_id', '$emailMahasiswa', '$passwordMahasiswa', '$saltMahasiswa' , '$roleMahasiswa' , '$tanggalPembuatan' , '$terakhirLogin')";
    $sql = "INSERT INTO tb_user (id_detail_user,email, password, salt, tanggal_pembuatan, terakhir_login) VALUES ('$last_id', '$emailMahasiswa', '$passwordMahasiswa', '$saltMahasiswa' , '$roleMahasiswa' , '$tanggalPembuatan' , '$terakhirLogin')";
	if(mysqli_query($conn, $sql)){
		echo "Sukses";
	} else {
		echo "Error: ".$sql."<br>".mysqli_error($conn);
	}

	mysqli_close($conn);
?>