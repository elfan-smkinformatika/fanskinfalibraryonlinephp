<?php
    require_once '../includes/connection.php';
    
    date_default_timezone_set("asia/jakarta"); // untuk mengatur waktu
    
    $target_dir = "images/"; // untuk menentukan folder penyimpanan
    $file_tmp_name = $_FILES["image"]["tmp_name"]; // untuk menentukan file sementara
    $file_name = $_FILES["image"]["name"]; // untuk menentukan nama file
    $file_name = date("HisdmY").$file_name; // untuk menentukan nama file
    $target_file = $target_dir.$file_name; // untuk menentukan file tujuan

    move_uploaded_file($file_tmp_name,$target_file); // untuk memindahkan file

    $title = $_POST['title']; // untuk menentukan judul
    mysqli_query($conn, "insert into gallery(image, title) values('$file_name', '$title')");

    header("Location../index.php"); // untuk mengarahkan ke halaman index
?>