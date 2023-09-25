<!doctype html>
<html>
<head>
	<title>Formulir</title>
</head>
<body bgcolor="#0891b2">
	<form action="proses_form_siswa.php" method="POST">
		<table align="center" width="50%" cellpadding="15">
			<thead>
				<tr bgcolor="#0e7490">
					<th colspan="2">FORM SISWA</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td width="25%">Nama Siswa</td>
					<td>
						<input type="text" name="nama" size="60"/>
					</td>
				</tr>
				<tr>
					<td>Mata Pelajaran</td>
					<td>
						<select name="mapel">
							<option value="">-- Pilih Mata Pelajaran--</option>
							<option value="IPA">IPA</option>
							<option value="IPS">IPS</option>
							<option value="Matematika">Matematika</option>
							<option value="Fisika">Fisika</option>
						</select>
					</td>
				</tr>
				<tr>
					<td width="25%">Nilai</td>
					<td>
						<input type="text" name="nilai" size="60"/>
					</td>
				</tr>
			</tbody>
			<tfoot>
				<tr bgcolor="#0e7490">
					<th colspan="2">
						<input type="submit" name="simpan" value="Simpan"/>
						&nbsp;&nbsp;
						<input type="reset" name="batal" value="Batal"/>
					</th>
				</tr>
			</tfoot>
		</table>
	</form>
</body>
</html>