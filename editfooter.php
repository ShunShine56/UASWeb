<?php
include_once("config.php");

// query desc profile

$sql = mysqli_query($koneksi, "SELECT * FROM footer WHERE id = 1");
$data = mysqli_fetch_assoc($sql);

?>
<!DOCTYPE html>
<html lang="en">
<?php include('config.php'); ?>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SMA N 1 Bukateja Berita</title>

    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body>
	<div class="container mt-5 ">
		
		<hr>
		<form action="edit_actSambutan.php" method="post" enctype="multipart/form-data">
			<div class="mb-3">
				<label class="form-label">Edit Copy Right</label>
				<textarea class="form-control" name="copy" rows="3"><?php echo $data['copy'];?></textarea>
			</div>
			<div class="mb-3">
				<button class="btn btn-success" type="submit">Submit</button>
				<a href="indexadmin.php" class="btn btn-danger">Kembali</a>
			</div>
		</form>
	</div>
</body>
</html>
<?php
// Create database connection using config file
include_once("../config.php");

if (isset($_GET['update_id'])) {
  $id = $_GET['update_id'];

  // query desc profile
  if ($result = $conn->query("SELECT * FROM investasi where id = $id")) {
  }
} else {
  header("location: /admin?page=list-investasi");
}
?>

<section class="section">
  <div class="section-header">
    <h1>Investasi</h1>
  </div>

  <div class="section-body">

    <?php
    while ($d = mysqli_fetch_array($result)) {
    ?>
      <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
          <div class="card">
            <form action="/pages/update_investasi_act.php?id=<?php echo $d['id'] ?>" enctype="multipart/form-data" method="post">
              <div class="card-header">
                <h4>Buat investasi Baru</h4>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label>Judul</label>
                  <input name="judul" type="text" class="form-control" required="" placeholder="Judul investasi" value="<?php echo $d['name'] ?>">
                  <input name="_id" type="hidden" class="form-control" required="" value="<?php echo $d['id'] ?>">
                </div>
                <div class="form-group">
                  <label>Price</label>
                  <input name="price" type="number" class="form-control" required="" placeholder="Price Investasi" value="<?php echo $d['price']?>">
                </div>
                <div class="form-group">
                  <label>Deskripsi investasi</label>
                  <textarea name="editor1" id="editor1" class="form-control" required="" placeholder="Judul investasi">
                  <?php echo $d['benefit'] ?>
                </textarea>
                </div>
              </div>
              <div class="card-footer text-right">
                <input type="submit" value="Submit" name="submit" class="btn btn-primary">
              </div>
            </form>
          </div>
        </div>
      </div>
    <?php
    }
    ?>
  </div>
</section>