<?php 
	include 'koneksi.php';

	if (isset($_POST['save'])) {
		$nama		= $_POST['nama'];
		$nim		= $_POST['nim'];
		$kelas		= $_POST['kelas'];
		$jenisKel	= $_POST['kelas'];
		$hobi 		= $_POST['hobi'];
		$tmp_hobi	= implode(', ', $_POST['hobi']);
		$fakultas	= $_POST['fakultas'];
		$alamat		= $_POST['alamat'];

		$sql = "INSERT INTO datamahasiswa (nama, nim, kelas, jenisKel, hobi, fakultas, alamat) VALUES ('$nama','$nim','$kelas','$jenisKel','$tmp_hobi','$fakultas','$alamat')";
		$query = mysqli_query($conn, $sql);

		if ($query) {
			echo "* Data Berhasil Disimpan";
				}else{
			echo "* Data Gagal Disimpan ".mysqli_connect_error();
		}
	}
?>