
<html>
    <head>
        <title></title>
    </head>
    <body>
        <form method="post" action="" enctype="multipart/form-data">
            <?php 
include('config.php');
$id = $_GET['id_gambar'];
    $data = mysqli_query($koneksi,"select * from tb_gambar where id_gambar='$id'");
    while($d = mysqli_fetch_array($data)){
        ?>
        <table>
            <tr>
                <td>Gambar</td>
                <td><input type="file" name="gambar" value="<?php echo $d['gambar']?>"></td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td><textarea name="keterangan" value="<?php echo $d['keterangan']?>"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="tombol"/></td>
            </tr>
        </table>
        </form>
    </body>
</html>
<?php 
} 
?>