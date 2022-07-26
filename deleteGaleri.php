<?php 
include 'config.php';
if (isset($_GET['id'])) {
	if ($_GET['id'] != "") {
		
		// Mengambil ID diURL
		$id = $_GET['id'];

		
		$get_foto = "SELECT Gambar FROM galeri WHERE id='$id'";
		$data_foto = mysqli_query($koneksi, $get_foto); 
        // Mengubah data yang diambil menjadi Array
		$foto_lama = mysqli_fetch_array($data_foto);

        // Menghapus Foto lama didalam folder FOTO
		unlink("foto/".$foto_lama['Gambar']);    

		// Mengapus data siswa berdasarkan ID
		$query = mysqli_query($koneksi,"DELETE FROM galeri WHERE id='$id'");
		if ($query) {
			header("location:indexGaleri.php?pesan=hapus");
		}else{
			header("location:indexGaleri.php?pesan=gagalhapus");
		}
		
	}else{
		// Apabila ID nya kosong maka akan dikembalikan kehalaman index
		header("location:indexGaleri.php");
	}
}else{
	// Jika tidak ada Data ID maka akan dikembalikan kehalaman index
	header("location:indexGaleri.php");
}

?>