<?php
$nama = $email = $nilai = "";
$keterangan = "";

if (isset($_POST['proses'])) {
    $nama  = $_POST['nama'];
    $email = $_POST['email'];
    $nilai = $_POST['nilai'];

    if ($nilai > 70) {
        $keterangan = "Lulus";
    } else {
        $keterangan = "Remedial";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Form Nilai Ujian</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f3f4f6;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .box {
            background: #fff;
            padding: 24px 32px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        h2 {
            text-align: center;
            margin-top: 0;
        }
        input[type=text], input[type=email], input[type=number] {
            width: 100%;
            padding: 8px;
            margin: 4px 0 12px;
            box-sizing: border-box;
        }
        input[type=submit] {
            width: 100%;
            padding: 10px;
            cursor: pointer;
        }
        .hasil {
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <div class="box">
        <h2>Form Nilai Ujian</h2>

        <form method="POST">
            <label>Nama</label>
            <input type="text" name="nama" required>

            <label>Email</label>
            <input type="email" name="email" required>

            <label>Nilai Ujian</label>
            <input type="number" name="nilai" required>

            <input type="submit" name="proses" value="Proses">
        </form>

        <?php if (isset($_POST['proses'])) { ?>
            <hr>
            <div class="hasil">
                Nama: <?= $nama ?>
                <br>Email: <?= $email ?>
                <br>Nilai Ujian: <?= $nilai ?>
                <br>Keterangan: <?= $keterangan ?>
            </div>
        <?php } ?>
    </div>
</body>
</html>