<?php

    include 'koneksi.php';

    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $namaFile = $_FILES['berkas']['name'];
    $x = explode(".", $namaFile);
    $ekstensiFile = strtolower(end($x));
    $ukuranFile = $_FILES['berkas']['size'];
    $File_tmp = $_FILES['berkas']['tmp_name'];

    $dirUpload = 'file/';
    $linkBerkas = $dirUpload.$namaFile;

    $terupload = move_uploaded_file($file_tmp, $linkBerkas);
    $dataArr = array (
        'kode_buku' => $kode,
        'nama_buku' => $nama,
        'title' => $namaFile,
        'size' => $ukuranFile,
        'ekstensi' => $ekstensiFile,
        'berkas' => $linkBerkas,
    )

    if ($terupload && (insertData($dataArr) == 1)) {
        echo "Upload Berhasil";
        header("Location: index.html", true, 301);
    } else {
        echo "Upload Gagal";
        header("Location: halaman_tambah.html", true, 301);



        ?>

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




