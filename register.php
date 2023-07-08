<?php
include './koneksi.php';

if (isset($_POST['regis'])) {
    $admin = $_POST['username'];
    $pass = $_POST['pass'];

    // var_dump($_POST);


    $password = password_hash($pass, PASSWORD_DEFAULT);
    // var_dump($password);

    $d = mysqli_query($conn, "INSERT INTO admin VALUES(null, '$admin', '$password')");
    var_dump($d);
    if (mysqli_affected_rows($conn) > 0) {
        echo "<script>alert('ok');</script>";
    }
}

?>

<form method="post">
    <button name="regis" type="submit">Submit</button>
    <input type="text" name="username">
    <input type="text" name="pass">
</form>