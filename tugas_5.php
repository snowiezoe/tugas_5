<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Form Sederhana</title>
    <link rel="stylesheet" href="filecss.css">
    <style>
        form{
            width: 500px;
            height: 130px;
            margin: 10px;
            font-family:'Times New Roman';
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        input placeholder{
            background-color: white;
            color :black;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        div {
            display: flex;
            justify-content: center;
            padding: 10px;
            margin-right: 10px;
        }
        label{
            margin-right: 5px;
        }
        button{
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            border-radius: 30px;
            font-family: 'Times New Roman';
        }
    </style>
</head>
<body class="body-html">
    <form>
        <div class="nama-label">
            <label>Nama</label> <br>
            <input name="nama" type="text" placeholder="Masukkan nama">
        </div>

        <div class="alamat-label">
            <label>Alamat</label> <br>
            <input name="alamat" type="text" placeholder="Masukkan alamat">
        </div>

        <div>
            <button>Submit</button>
        </div>
    </form>

<?php # membuka tag PHP

$nama = @$_GET['nama'];
$alamat = @$_GET['alamat'];

# di sini nanti kita akan tampilkan variabel $nama dan $alamat
if ($nama) {
    echo "<strong>Nama:</strong> {$nama} <br>";
}

if ($alamat) {
    echo "<strong>Alamat:</strong> {$alamat} <br>";
}

# jangan lupa tutup tag PHP
?>

</body>
</html>