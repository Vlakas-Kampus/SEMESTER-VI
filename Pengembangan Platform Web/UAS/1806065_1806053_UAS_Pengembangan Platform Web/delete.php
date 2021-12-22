<?php
include 'koneksi.php';

$id_file = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM tb_video WHERE id=$id_file");

$data = mysqli_fetch_array($result);

$name = explode('/', $data['file']);
$namaFile = $data['file'];

unlink($namaFile);

$delete = mysqli_query($conn, "DELETE FROM tb_video WHERE id='$id_file'");

if ($delete) {

	echo "

			<script>

			alert('Data Berhasil Di hapus');

			location.href='admin.php';

			</script>

	";
} else {

	echo 'Data Gagal Di hapus';
}
