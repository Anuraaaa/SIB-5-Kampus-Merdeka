<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
</head>
<body>
<?php
    if (isset($_GET['a1']) && isset($_GET['a2']) && isset($_GET['process']))
    {

        $a1 = $_GET['a1'];
        $a2 = $_GET['a2'];
        $tombol = $_GET['process'];
        switch ($tombol)
        {
            case 'tambah': $hasil = $a1 + $a2; break;
            case 'kurang': $hasil = $a1 - $a2; break;
            case 'kali': $hasil = $a1 * $a2; break;
            case 'bagi': $hasil = $a1 / $a2; break;
            case 'pangkat': $hasil = pow($a1, $a2); break;
            default: $hasil = 0;
        }
    }
    ?>

    <form action="" method="GET">
        <table  align="center" border="0" cellpadding="10" cellspacing="0">
            <thead>
                <tr bgcolor="khaki">
                    <th colspan="2">Kalkulatorku</th>
                </tr>
            </thead>
            <tbody>
                <tr bgcolor="beige">
                    <td>Angka 1</td>
                    <td>
                        <input type="text" name="a1">
                    </td>
                </tr>
                <tr bgcolor="beige">
                    <td>Angka 2</td>
                    <td>
                        <input type="text" name="a2">
                    </td>
                </tr>
                <tr bgcolor="beige">
                    <td>Hasil</td>
                    <td>
                        <?php
                            if(isset($_GET['process']))
                            {
                                echo("
                                    <input type='text' name='hasil' disabled value='$hasil'>
                                ");
                                
                            }
                            else
                            {
                                echo("
                                    <input type='text' name='hasil' disabled>
                                ");
                            }
                        ?>
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr bgcolor="khaki">
                    <th colspan="2">
                        <button type="submit" name="process" value="tambah">+</button>
                        <button type="submit" name="process" value="kurang">-</button>
                        <button type="submit" name="process" value="kali">x</button>
                        <button type="submit" name="process" value="bagi">/</button>
                        <button type="submit" name="process" value="pangkat">^</button>
                    </th>
                </tr>
            </tfoot>
        </table>
    </form>
</body>
</html>