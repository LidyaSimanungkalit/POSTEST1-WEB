<?php
$server = "localhost"; # pembuatan hubungan nama server
$username = "root"; #pembuatan huubngan login
$password = ""; #pembuatan huubngan login
$db_name = "modul_7"; # pembuatan hubungan dengan database

#menghubungkan database ke codingan
$db = new mysqli($server, $username, $password, $db_name);

if(!$db){ #jika $db gagal terbaca menggunakan 'die' untuk mematikan
    die("Database connection failed");
}

?>