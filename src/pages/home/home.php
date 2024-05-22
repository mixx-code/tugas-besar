<?php
if (isset($_SESSION["username"])) {
    // jika sudah login, tampilkan link logout
    echo "<h1> Hello " . $_SESSION["username"] . " Selamat datang</h1>";
} else {
    // jika belum login, tampilkan link login
    echo "<h1>Selamat datang</h1>";
}
?>
<a href="../create_puisi/create_puisi.php">Create New Puisi</a>
<div class="container_home">
    <div class="component">
        <?php
        include "../../config/db/koneksi.php"; // file koneksi ke database

        // mengambil data puisi dari tabel puisi
        $sql = "SELECT * FROM puisi";
        $result = mysqli_query($conn, $sql);
        ?>

        <!-- menampilkan data puisi pada HTML -->
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <div class="card">
                <h1 class="title"><?php echo $row['judul']; ?></h1>
                <p><?php echo $row['tanggal_post']; ?></p>
                <p class="body"><?php echo $row['isi']; ?></p>
                <a href="../detail/detail_puisi.php?id=<?php echo $row['id']; ?>">Lihat semua...</a>
            </div>
        <?php endwhile; ?>
    </div>
</div>