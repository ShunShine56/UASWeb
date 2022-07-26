<?php
include('config.php');
$query = mysqli_query($koneksi, "select * from tb_gambar");
?>
<html>
<meta charset="UTF-8">
<!--<title> Drop Down Sidebar Menu | CodingLab </title>-->
<link href="assets/css/styleAdmin.css" rel="stylesheet">
<!-- Boxiocns CDN Link -->
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>
    <title></title>
</head>

<body>

    <div class="sidebar close">
        <div class="logo-details">
            <span class="logo_name">Admin</span>
        </div>
        <div class="container">
            <a chref="FormUpgambar.php">Upload Gambar</a>
            <table border="1">
                <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Keterangan</th>
                    <th>Tipe</th>
                    <th>Ukuran</th>
                    <th>Action</th>
                </tr>
                <?php
                $no = 1;
                while ($row = mysqli_fetch_array($query)) {
                ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><img src="./files/<?php echo $row['gambar']; ?>" width="100" /></td>
                        <td><?php echo $row['keterangan']; ?></td>
                        <td><?php echo $row['tipe_gambar']; ?></td>
                        <td><?php echo $row['ukuran_gambar']; ?></td>
                        <td><a href="deleteGambar.php?id_gambar=<?php echo $row['id_gambar']; ?>">Delete</a></td>
                        <!-- <td><a href="updateGambar.php?id_gambar=<?php echo $row['id_gambar']; ?>">Update</a></td> -->

                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
        <ul class="nav-links">
            <li>
                <a href="#">
                    <i class='bx bx-grid-alt'></i>
                    <span class="link_name">Dashboard</span>
                </a>
            <li>
            <li>
                <a href="indexGambar.php">
                    <i class='bx bx-grid-alt'></i>
                    <span class="link_name">Olah data gambar</span>
                </a>
            <li>
            <li>
                <a href="berita.php">
                    <i class='bx bx-grid-alt'></i>
                    <span class="link_name">Olah data Berita</span>
                </a>
            <li>
            <li>
                <a href="logout.php">
                    <i class='bx bx-grid-alt'></i>
                    <span class="link_name">Olah data Berita</span>
                </a>
            <li>
            </li>
        </ul>
    </div>

    <section class="home-section">
        <div class="home-content">
            <i class='bx bx-menu'></i>
            <span class="text">Welcome</span>
        </div>
    </section>

    <script>
        let arrow = document.querySelectorAll(".arrow");
        for (var i = 0; i < arrow.length; i++) {
            arrow[i].addEventListener("click", (e) => {
                let arrowParent = e.target.parentElement.parentElement; //selecting main parent of arrow
                arrowParent.classList.toggle("showMenu");
            });
        }
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".bx-menu");
        console.log(sidebarBtn);
        sidebarBtn.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        });
    </script>
</body>

</html>