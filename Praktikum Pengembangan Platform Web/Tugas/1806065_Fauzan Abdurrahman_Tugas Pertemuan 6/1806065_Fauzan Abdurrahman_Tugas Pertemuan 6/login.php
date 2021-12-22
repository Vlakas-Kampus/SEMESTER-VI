<?php
if (isset($_POST['submit'])) {
    if ($_POST['username'] == 1806065 && $_POST['password'] == "ozan123") {
        header("location:beranda.html");
    } else {
        header("location:loginGagal.html");
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>
        <img src="sttg.png" alt="Sekolah Tinggi Teknologi Garut" width="150px" align="middle" class="center">
        Fauzan Abdurrahman (1806065)
    </p>
    <h2>Halaman Pendaftaran</h2>
    <form method="POST">
        <table>
            <tr>
                <td>
                    <label for="username">Username :</label>
                </td>
                <td>
                    <input type="text" name="username" placeholder="Username">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="password">Password :</label>
                </td>
                <td>
                    <input type="password" name="password" placeholder="Password">
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit" name="submit">Login</button>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="register.html">Register</a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="lupa_password.html">lupa password</a>
                </td>
            </tr>
        </table>

    </form>
</body>

</html>