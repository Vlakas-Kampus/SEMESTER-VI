<?php
require_once 'koneksi.php';

if (isset($_POST['submit'])) {
	if ($_FILES['upload']['name'] != "") {
		$file = $_FILES['upload'];

		$file_name = $file['name'];
		$file_temp = $file['tmp_name'];
		$file_size = $file['size'];
		$name = explode('.', $file_name);
		$path = "files/" . $file_name;

		// cek jika ukurannya terlalu besar
		if ($file_size > 10000000) {
			echo "<script>
				alert('ukuran file terlalu besar!');
				location.href='admin.php';
			  </script>";
			return false;
		} else {
			echo "<script>
				alert('upload file berhasil');
				location.href='admin.php';
			  </script>";
			$conn->query("INSERT INTO `tb_video` VALUES('', '$name[0]', 'Action', '$path')");
			move_uploaded_file($file_temp, $path);
			header("location:admin.php");
		}
	} else {
		echo "<script>alert('Required Field!')</script>";
		echo "<script>window.location='admin.php'</script>";
	}
}
