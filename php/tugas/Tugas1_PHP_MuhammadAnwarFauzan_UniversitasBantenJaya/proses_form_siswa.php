<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body bgcolor="#0891b2">
    <?php
        if (isset($_POST['nama']) && isset($_POST['mapel']) && isset($_POST['nilai']))
        {
            $nama = $_POST['nama'];
            $mapel = $_POST['mapel'];
            $nilai = $_POST['nilai'];
            $predikat;
            
            $nilai >= 60? $keterangan = "Lulus" : $keterangan = "Tidak Lulus";

            if ($nilai >= 85 && $nilai <= 100) $grade = 'A';
            else if ($nilai >= 75 && $nilai <= 85) $grade = 'B';
            else if ($nilai >= 60 && $nilai <= 75) $grade = 'C';
            else if ($nilai >= 30 && $nilai <= 60) $grade = 'D';
            else if ($nilai >= 0 && $nilai <= 30) $grade = 'E';
        
            switch($grade){
                case 'A': $predikat = 'Memuaskan'; break;
                case 'B': $predikat = 'Bagus'; break;
                case 'C': $predikat = 'Cukup'; break;
                case 'D': $predikat = 'Kurang'; break;
                case 'E': $predikat = 'Buruk'; break;
                default: $predikat = ''; break;
            }
        

            echo(
                "
                    <table border='1' align='center' width='50%' cellpadding='15'>
                    <thead>
                        <tr bgcolor='#0e7490' align='center'>
                            <td colspan='2'>Hasil Input Form Siswa</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Nama</td>
                            <td>$nama</td>
                        </tr>
                        <tr>
                            <td>Nilai</td>
                            <td>$nilai ($keterangan)</td>
                        </tr>
                        <tr>
                            <td>Grade</td>
                            <td>$grade</td>
                        </tr>
                        <tr>
                            <td>Predikat</td>
                            <td>$predikat</td>
                        </tr>
                    </tbody>
                </table>
        
                "
            );
        }
    ?>
</body>
</html>
