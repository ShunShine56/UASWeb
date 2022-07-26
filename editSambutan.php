<?php 
include 'config.php';
if (isset($_GET['id'])) {
	if ($_GET['id'] != "") {
		
		$id = $_GET['id'];

		$query = mysqli_query($koneksi,"SELECT * FROM kepalasekolah WHERE id='$id'");
		$row = mysqli_fetch_array($query);

	}else{
		header("location:indexSambutan.php");
	}
}else{
	header("location:indexSambutan.php");
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
	
	<title>Update Sambutan</title>
</head>
<body>
	<div class="container mt-5 ">
		
		<hr>
		<form action="edit_actSambutan.php" method="post" enctype="multipart/form-data">
			<div class="mb-3">
				<label class="form-label">Nama Kepala Sekolah</label>
				<input type="text" name="nama_kepsek" class="form-control" value="<?php echo $row['nama_kepsek']; ?>" >
				<input type="hidden" name="id" class="form-control" value="<?php echo $row['id']; ?>" >
			<div class="mb-3">
				<label class="form-label">Sambutan</label>
				<textarea class="form-control" name="sambutan" rows="3"><?php echo $row['sambutan']; ?></textarea>
			</div>
			<div class="mb-3">
				<button class="btn btn-success" type="submit">Submit</button>
				<a href="indexSambutan.php" class="btn btn-danger">Kembali</a>
			</div>
		</form>
		
	</div>
</body>
</html>