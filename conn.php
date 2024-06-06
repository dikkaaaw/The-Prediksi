<?php

define('hostname', 'localhost');
define('db_user', 'root');
define('db_pass', '');
define('db_name', 'club');

$conn = mysqli_connect(hostname, db_user, db_pass, db_name);

if (!$conn) {
    die('Gagal terkoneksi ke database! ' . mysqli_connect_error());
}

?>