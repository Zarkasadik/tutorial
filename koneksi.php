<?php

function koneksiDB() {
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "tb_tutorial";

    $conn= mysqli_connect($host, $username, $password, $db);

    if ($conn) {
        die("Koneksi Databse Gagal : " .mysqli_connect_error());
    }else{
        return $conn;
    }
}

function insertData($data) {
    $query = "INSERT INTO tb_barang VALUES ('".$data['kode_buku']. "','" .$data['nama_buku']. "','" .$data['title']. "','" .$data['size']. "','" .$data['ekstensi']. "','" .$data['berkas']."')";

    $result = mysqli_query(koneksiDB(), $query);

    if (!$result) {
        return 0;
    } else {
        return 1;
    }
}

function selectAllData(){
    $query = "SELECT * FROM tb_barang";
    $result = mysqli_query(koneksiDB(), $query);
    return $result;
}


?>