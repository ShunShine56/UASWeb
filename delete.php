<?php 
include 'Config.php';
if (isset($_GET['id'])) {
	if ($_GET['id'] != "") {
		
		// Mengambil ID diURL
		$id = $_GET['id'];

		// Mengambil data siswa_foto didalam table siswa
		$get_foto = "SELECT Gambar FROM berita WHERE id='$id'";
		$data_foto = mysqli_query($koneksi, $get_foto); 
        // Mengubah data yang diambil menjadi Array
		$foto_lama = mysqli_fetch_array($data_foto);

        // Menghapus Foto lama didalam folder FOTO
		unlink("foto/".$foto_lama['Gambar']);    

		// Mengapus data siswa berdasarkan ID
		$query = mysqli_query($koneksi,"DELETE FROM berita WHERE id='$id'");
		if ($query) {
			header("location:indexBerita.php?pesan=hapus");
		}else{
			header("location:indexBerita.php?pesan=gagalhapus");
		}
		
	}else{
		// Apabila ID nya kosong maka akan dikembalikan kehalaman index
		header("location:indexBerita.php");
	}
}else{
	// Jika tidak ada Data ID maka akan dikembalikan kehalaman index
	header("location:indexBerita.php");
}

?>