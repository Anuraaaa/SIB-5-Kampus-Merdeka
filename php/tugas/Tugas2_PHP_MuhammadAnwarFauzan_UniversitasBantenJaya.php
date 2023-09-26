<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Online Anwar</title>
</head>
<body>
    <?php
        $p1 = ['nama'=>'Budi Santoso','produk'=>'TV','qty'=>3];
        $p2 = ['nama'=>'Siti Aminah','produk'=>'AC','qty'=>2];
        $p3 = ['nama'=>'Alissa','produk'=>'AC','qty'=>5];
        $p4 = ['nama'=>'I Putu Gede','produk'=>'TV','qty'=>1];
        $p5 = ['nama'=>'Sri Rezeki','produk'=>'Kulkas','qty'=>1];
        $p6 = ['nama'=>'Hanif Rizqi','produk'=>'Kulkas','qty'=>3];
        //array associative
        $ar_pelanggan = [$p1,$p2,$p3,$p4,$p5,$p6];
        $ar_judul = ['NO','NAMA','PRODUK','JUMLAH BELI','HARGA SATUAN', 'HARGA KOTOR','DISKON','PPN','HARGA BERSIH'];
        $randomcolor1 = sprintf("#%06X", mt_rand(0, 0xFFFFFF));

        ?>

    <table align="center" cellpadding="15" border="1">
    <thead>
        <tr bgcolor=<?=$randomcolor1?>>
            <?php
                    foreach ($ar_judul as $judul)
                    {
                        echo("<td>$judul</td>"
                        );
                    }
                ?>
        </tr>
        </thead>
        <tbody>
            <?php
                $hargasatuan;
                $no = 1;
                foreach ($ar_pelanggan as $pembeli)
                {
                    $nama = $pembeli ['nama'];
                    $produk = $pembeli['produk'];
                    $quantity = $pembeli['qty'];
                
                    switch ($produk) 
                    {
                        case 'TV': 
                        {
                            $hargasatuan = 3000000;
                            break;
                        }
                        case 'AC':
                        {
                            $hargasatuan = 4000000;
                            break;
                        }
                        case 'Kulkas':
                        {
                            $hargasatuan = 5000000;
                            break;
                        }
                    }
                    $hargakotor = $hargasatuan * $quantity;
                    $diskon;
                    $produk == 'Kulkas' && $quantity >=3 ? $diskon = 0.3 : $diskon = 0.1;
                    $ppn = 0.11 * ($hargakotor - $diskon);
                    $hargabersih = ($hargakotor - $diskon) + $ppn;
                    $randomcolor2 = sprintf("#%06X", mt_rand(0, 0xFFFFFF));
                    echo(
                        "<tr bgcolor='$randomcolor2'>
                            <td>$no</td>
                            <td>$nama</td>
                            <td>$produk</td>
                            <td>$quantity</td>
                            <td>Rp. ". number_format($hargasatuan, 0, ', ', ', '). "</td>
                            <td>Rp. ". number_format($hargakotor, 0, ', ', ', '). "</td>
                            <td>". $diskon * 100 ."%</td>
                            <td>Rp. ". number_format($ppn, 0, ', ', ', '). "</td>
                            <td>Rp. ". number_format($hargabersih, 0, ', ', ', '). "</td>
                        </tr>
                        "
                    );
                    $no++;
                }
            ?>
        </tbody>
    </table>
</body>
</html>