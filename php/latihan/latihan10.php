<?php
//array 1 dimensi (array scalar)
$p1 = ['nip'=>'111', 'nama'=>'Budi Santoso','jabatan'=>'Manager','status'=>'Menikah','agama'=>'Islam'];
$p2 = ['nip'=>'112', 'nama'=>'Siti Aminah','jabatan'=>'Asisten Manager','status'=>'Belum','agama'=>'Islam'];
$p3 = ['nip'=>'113', 'nama'=>'Alissa','jabatan'=>'Supervisor','status'=>'Menikah','agama'=>'Kristen Protestan'];
$p4 = ['nip'=>'114', 'nama'=>'I Putu Gede','jabatan'=>'Staff','status'=>'Belum','agama'=>'Hindu'];
$p5 = ['nip'=>'115', 'nama'=>'Sri Rezeki','jabatan'=>'Staff','status'=>'Menikah','agama'=>'Budha'];
$p6 = ['nip'=>'116', 'nama'=>'Hanif Rizqi','jabatan'=>'Staff','status'=>'Menikah','agama'=>'Islam'];

//array associative
$ar_pegawai = [$p1,$p2,$p3,$p4,$p5,$p6];
$ar_judul = ['NO','NIP','NAMA','JABATAN','STATUS','AGAMA','GAJI POKOK','TUNJAB','BPJS','TUNKEL','ZAKAT','GAJI BERSIH'];
?>
<h3 align="center">Daftar Pegawai</h3>
<table align="center" border="1" cellpadding="10" cellspacing="0">
	<thead>
		<tr bgcolor="#7EAA92">
			<?php
				foreach($ar_judul as $jdl){
					echo '<th>'.$jdl.'</th>';
				}
			?>
		</tr>
	</thead>
	<tbody>
		<?php
		$no = 1;
		foreach($ar_pegawai as $pegawai){
            //--------ambil kolom tertentu untuk struktur kendali---------
            $jabatan = $pegawai['jabatan'];
            $status = $pegawai['status'];
            $agama = $pegawai['agama'];
            //print_r($jabatan); die();
			//-------------cari gapok-----------------
			switch($jabatan){
				case 'Manager': $gapok = 15000000; break;
				case 'Asisten Manager': $gapok = 10000000; break;
				case 'Supervisor':$gapok = 7500000; break;
				case 'Staff': $gapok = 3000000; break;
				default: $gapok = 0; break;
			}
			//-------------cari tunjab => 20% dari gapok-----------------
			$tunjab = 0.2 * $gapok;
			//-------------cari bpjs => 5% dari gapok-----------------
			$bpjs = 0.05 * $gapok;
			//cari tukel => 10% dari gapok untuk yg sudah menikah (gunakan ternary)
			$tunkel = ($status == 'Menikah') ? 0.1 * $gapok : 0;
			//gaji kotor = gapok + tunjab + bpjs + tunkel
			$gator = $gapok + $tunjab + $bpjs + $tunkel;
			//cari zakat => 2,5% dari gaji kotor untuk yg muslim dan gaji kotor minimal 6 jt (gunakan ternary)
           
            $zakat = ($agama == "Islam" && $gator >= 6000000) ? 0.025 * $gator : 0;
			//cari gaji bersih => 
			$gaber = $gator - $zakat;
			//warna-warni
			$warna = ($no % 2 == 1) ? 'beige' : 'khaki';
            ?>
			
			<tr bgcolor="<?= $warna ?>">
				<td><?= $no ?></td>
				<td><?= $pegawai['nip'] ?></td>
				<td><?= $pegawai['nama'] ?></td>
				<td><?= $pegawai['jabatan'] ?></td>
				<td><?= $pegawai['status'] ?></td>
				<td><?= $pegawai['agama'] ?></td>
				<td align="right">Rp. <?= number_format($gapok,0,',','.') ?></td>
				<td align="right">Rp. <?= number_format($tunjab,0,',','.') ?></td>
				<td align="right">Rp. <?= number_format($bpjs,0,',','.') ?></td>
				<td align="right">Rp. <?= number_format($tunkel,0,',','.') ?></td>
				<td align="right">Rp. <?= number_format($zakat,0,',','.') ?></td>
				<td align="right">Rp. <?= number_format($gaber,0,',','.') ?></td>
			</tr>
        <?php    
		$no++;
		}	
		?>
	</tbody>
</table>

<script type="text/javascript">
document.getElementById("judul_tabel").innerHTML = "Data Pegawai";	
jdl_tbl = document.getElementById("judul_tabel"); 
jdl_tbl.style.color = "maroon";
jdl_tbl.style.textAlign = "center";
jdl_tbl.style.textTransform = "uppercase";
</script>