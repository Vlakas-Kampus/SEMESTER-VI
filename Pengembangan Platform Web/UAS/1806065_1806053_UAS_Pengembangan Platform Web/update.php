<?php

include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$genre = $_POST['genre'];

$update = mysqli_query($conn, "UPDATE tb_video SET judul_video='$nama', genre='$genre' WHERE id='$id'");

if ($update) {

	echo "

			<script>

			alert('Data Berhasil Di Update');

			location.href='admin.php';

			</script>

	";
} else {

	echo 'Data Gagal Di Update';
}
