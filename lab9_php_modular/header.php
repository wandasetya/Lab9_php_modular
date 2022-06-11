<?php
include("koneksi.php");

$sql = 'SELECT * FROM data_barang';
$result = mysqli_query($conn, $sql);

?>
<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <title>Data Barang</title>
</head>
<body>
    <div id="container">
        <nav>
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="kontak.php">Kontak</a>
        </nav>