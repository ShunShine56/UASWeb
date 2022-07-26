<?php 
// Menghubungkan file ini dengan file database
include 'config.php';

// Mengambil data dari form lalu ditampung didalam variabel
$nama_guru = $_POST['nama_guru'];
$keterangan = $_POST['keterangan'];
$foto_nama = $_FILES['Gambar']['name'];
$foto_size = $_FILES['Gambar']['size'];

// Mengecek apakah file lebih besar 2 MB atau tidak
if ($foto_size > 2097152) {
	// Jika File lebih dari 2 MB maka akan gagal mengupload File
	header("location:insertGuru.php?pesan=size");
}else{

	// Mengecek apakah Ada file yang diupload atau tidak
	if ($foto_nama != "") {

		// Ekstensi yang diperbolehkan untuk diupload boleh diubah sesuai keinginan
		$ekstensi_izin = array('png','jpg','jepg');
		// Memisahkan nama file dengan Ekstensinya
		$pisahkan_ekstensi = explode('.', $foto_nama); 
		$ekstensi = strtolower(end($pisahkan_ekstensi));
		// Nama file yang berada di dalam direktori temporer server
		$file_tmp = $_FILES['Gambar']['tmp_name'];   
		
	

		// Mengecek apakah Ekstensi file sesuai dengan Ekstensi file yg diuplaod
		if(in_array($ekstensi, $ekstensi_izin) === true)  {
			// Memindahkan File kedalam Folder "FOTO"
            move_uploaded_file($file_tmp, 'foto/'.$foto_nama);

            // Query untuk memasukan data kedalam table Berita
            $query = mysqli_query($koneksi, "INSERT INTO gurukaryawan VALUES ('','$foto_nama', '$nama_guru','$keterangan')");

            // Mengecek apakah data gagal diinput atau tidak
            if($query){
            	header("location:insertGuru.php?pesan=berhasil");
            } else {
                header("location:insertGuru.php?pesan=gagal");
            }

        } else { 
        	// Jika ekstensinya tidak sesuai dengan apa yg kita tetapkan maka error
        	header("location:insertGuru.php?pesan=ekstensi");       }

    }else{

    	// Apabila tidak ada file yang diupload maka akan menjalankan code dibawah ini
    	 $query = mysqli_query($koneksi, "INSERT INTO gurukaryawan(nama_guru, keterangan) VALUES ('$nama_guru', '$keterangan')");

            // Mengecek apakah data gagal diinput atau tidak
            if($query){
            	header("location:insertGuru.php?pesan=berhasil");
            } else {
                header("location:insertGuru.php?pesan=gagal");
            }

    }

}
?>