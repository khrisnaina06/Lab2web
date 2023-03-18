<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>Pemrograman WEB 2</title>
 <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h2>Form Input</h2><br>
<form method="post" action="">
 <label>NAMA:</label><br>
 <input type="text" name="nama"><br>
 <label>Tanggal lahir:</label><br>
 <input type="date" name="tgl_lahir"><br>
 <label>Pekerjaan:<label><br>
 <select name="pekerjaan">
    <option value="Direktur utama">Direktur utama</option>
    <option value="Manager area">Manager area</option>
    <option value="Karyawan">Karyawan</option>
</select><br><br>
<input type="submit" name="submit" value="submit">
</form>
<br><br>
<?php

    if(isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $pekerjaan = $_POST['pekerjaan'];
        $today = date_create(date("Y-m-d"));
        $birth = date_create($tgl_lahir);
        $umur = date_diff($today, $birth)->y;
        switch($pekerjaan) {
            case "Direktur utama":
                $gaji = 50000000;
                $pajak = 0.01;
                $thp = $gaji - ($gaji*$pajak);
                break;
                case "Manager area":
                    $gaji = 20000000;
                    $pajak = 0.01;
                    $thp = $gaji - ($gaji*$pajak);
                    break;
                    case "Karyawan":     
                        $gaji = 8000000;
                        $pajak = 0.01;
                        $thp = $gaji - ($gaji*$pajak);
                        break;
                        default:
                        $gaji = 0;
                        break;
        }
        echo "<br><br>";
        echo "Nama: ".$nama."<br>";
        echo "Tanggal Lahir: ".$tgl_lahir."<br>";
        echo "Umur: ".$umur." tahun<br>";
        echo "Pekerjaan: ".$pekerjaan."<br>";
        echo "Gaji sebelum pajak = Rp. $gaji <br>";
        echo "Gaji yang dibawa pulang = Rp. $thp";
    }
?>
</body>
</html>