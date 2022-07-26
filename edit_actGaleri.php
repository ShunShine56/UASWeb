<?php 
// Menghubungkan file ini dengan file database
include 'config.php';
// Mengecek apakah ID ada datanya atau tidak
if (isset($_POST['id'])) {
    if ($_POST['id'] != "") {
        // Mengambil data dari form lalu ditampung didalam variabel
        $id = $_POST['id'];
        $judul_gambar = $_POST['judul_gambar'];
        $tanggal = $_POST['tanggal'];
        $Deskripsi = $_POST['Deskripsi'];
        $foto_nama = $_FILES['Gambar']['name'];
        $foto_size = $_FILES['Gambar']['size'];

    }else{
        header("location:indexGaleri.php");
    }

    // Mengecek apakah file lebih besar 2 MB atau tidak
    if ($foto_size > 2097152) {
	   // Jika File lebih dari 2 MB maka akan gagal mengupload File
       header("location:indexGaleri.php?pesan=size");

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

            // Mengambil data gambar didalam table berita
            $get_foto = "SELECT Gambar FROM galeri WHERE id ='$id'";
            $data_foto = mysqli_query($koneksi, $get_foto); 
            // Mengubah data yang diambil menjadi Array
            $foto_lama = mysqli_fetch_array($data_foto);

            // Menghapus Foto lama didalam folder FOTO
            unlink("foto/".$foto_lama['Gambar']);    

			// Memindahkan File kedalam Folder "FOTO"
            move_uploaded_file($file_tmp, 'foto/'.$foto_nama);

            // Query untuk memasukan data kedalam table Berita
            $query = mysqli_query($koneksi, "UPDATE galeri SET Gambar='$foto_nama', judul_gambar='$judul_gambar', Deskripsi='$Deskripsi', tanggal='$tanggal'  WHERE id ='$id'");

            // Mengecek apakah data gagal diinput atau tidak
            if($query){
            	header("location:indexGaleri.php?pesan=berhasil");
            } else {
                header("location:indexGaleri.php?pesan=gagal");
            }

        } else { 
        	// Jika ekstensinya tidak sesuai dengan apa yg kita tetapkan maka error
        	header("location:indexGaleri.php?pesan=ekstensi");        }

        }else{

    	// Apabila tidak ada file yang diupload maka akan menjalankan code dibawah ini
          $query = mysqli_query($koneksi, "UPDATE galeri SET judul_gambar='$judul_gambar', tanggal='$tanggal', deskripsi='$Deskripsi' WHERE id='$id'");

            // Mengecek apakah data gagal diinput atau tidak
            if($query){
                header("location:indexGaleri.php?pesan=berhasil");
            }else {
                header("location:indexGaleri.php?pesan=gagal");
            }
        }

    }
}else{
    // Apabila ID tidak ditemukan maka akan dikembalikan ke halaman index
    header("location:indexGaleri.php");
}
?>