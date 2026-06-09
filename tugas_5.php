<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 5</title>
    <style>
        form{
            width: 100px;
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
    </style>
</head>
<body>
    <form action="">
        <div>
            <label for="">Name</label>
            <input name="Nama" placeholder="Masukkan nama" id="">
        </div>
        <div>
            <label for="">Alamat</label>
             <input name="Alamat" placeholder="Masukkan alamat" id="">
        </div>
        <div>
            <button>Submit</button>
        </div>
    </form>
        <?php
    $nama = @$_GET['nama'];
    $alamat = @$_GET['alamat'];

    if($nama){
        echo "<strong>Nama:</strong> {$nama} <br>"
    }

    if($alamat){
        echo "<strong>Alamaat:</strong> {$alamat} <br>"
    }
    ?>
</body>
</html>