<<!DOCTYPE html>
<html>
<head>
    <title>Halaman Tambah</title>
    <style>
        body {
            width: 800px;
            margin: auto;
            padding: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 90vh;
            background-color: #060a1f;
        }

        h2 {
            text-align: center;
            text-transform: uppercase;
            text-underline-position: under;
            text-decoration-color: underline black;
        }

        button {
            padding: 10px;
            font-weight: bold;
            color: white;
            background-color: $4caf50;
            border: none;
            font-size: 16px;
            cursor: pointer;
            display: block;
            margin-top: 20px;
            float: right;
        }

        label {
            font-weight: bold;
            display: block;
            font-size: 20px;
            margin-bottom: 10px;
        }

        input {
            width: 100%;
            padding: 10px;
            border: 1px solid gray;
            border-radius: 5px;
            box-sizing: border-box;
        }

        div {
            border: 1px solid black;
            padding: 20px;
            width: 90%;
            background-color: white;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <<div>
        <h2>Form Upload File PDF</h2>
        <form action="ScriptFileUpload.php" method="Post" enctype="multipart/form-data>
            
            <input type="text" name="kode" placeholder="masukan Kode">
            <label>Kode Buku :</label>
            <input type="text" name="kode" placeholder="masukan Kode">
            <label>Nama Buku :</label>
            <input type="text" name="kode" placeholder="masukan Nama">
            <label>Upload File :</label>
            <input type="file" name="berkas" accept="application/pdf">
            <button type="submit">Upload File</button>
    </div>

</body>
</html>