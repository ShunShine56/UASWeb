<?php 
include 'config.php';
if (isset($_GET['id'])) {
	if ($_GET['id'] != "") {
		
		$id = $_GET['id'];

		$query = mysqli_query($koneksi,"SELECT * FROM galeri WHERE id='$id'");
		$row = mysqli_fetch_array($query);

	}else{
		header("location:indexGaleri.php");
	}
}else{
	header("location:indexGaleri.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	
	<title>CRUD Galeri</title>
</head>
<body>
	<div class="container mt-5 ">
		
		<hr>
		<form action="edit_actGaleri.php" method="post" enctype="multipart/form-data">
			<div class="mb-3">
				<label class="form-label">Judul Gamber</label>
				<input type="text" name="judul_gambar" class="form-control" value="<?php echo $row['judul_gambar']; ?>">
				<input type="hidden" name="id" class="form-control" value="<?php echo $row['Id']?>">
			</div>
			<div class="mb-3">
				<label class="form-label">Tanggal</label>
				<input type="text" name="tanggal" class="form-control" value="<?php echo $row['tanggal']; ?>">
			</div>
			<div class="mb-3">
				<label class="form-label">Deskripsi</label>
				<textarea class="form-control" name="deskripsi" rows="3"><?php echo $row['deskripsi']; ?></textarea>
			</div>
			<div class="mb-3">
				<label class="form-label">Gambar</label>
				<input type="file" name="Gambar" class="form-control">
				<br>
				<?php 
				if ($row['Gambar'] == "") { ?>
					<img src="https://via.placeholder.com/500x500.png?text=INSERT+FOTO" style="width:100px;height:100px;">
				<?php }else{ ?>
					<img src="foto/<?php echo $row['Gambar']; ?>" style="width:100px;height:100px;">
				<?php } ?>
			</div>
			<div class="mb-3">
				<button class="btn btn-success" type="submit">Submit</button>
				<a href="indexGaleri.php" class="btn btn-danger">Kembali</a>
			</div>
		</form>
		
	</div>
</body>
</html>