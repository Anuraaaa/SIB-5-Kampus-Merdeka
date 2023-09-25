<!doctype html>
<html>
<head>
	<title>Formulir</title>
</head>
<body bgcolor="#9ED2BE">
<form method="POST" action="proses_form_pegawai.php">
<table align="center" width="50%" cellpadding="15">
	<thead>
		<tr bgcolor="#7EAA92">
			<th colspan="2">FORM PEGAWAI</th>
		</tr>
	</thead>
	<tfoot>
		<tr bgcolor="#7EAA92">
			<th colspan="2">
				<input type="submit" name="simpan" value="Simpan"/>
				&nbsp;&nbsp;
				<input type="reset" name="batal" value="Batal"/>
			</th>
		</tr>
	</tfoot>
	<tbody>
		<tr>
			<td width="25%">Nama Pegawai</td>
			<td>
				<input type="text" name="nama" size="60"/>
			</td>
		</tr>
		<tr>
			<td>Status</td>
			<td>
				<input type="radio" name="status" value="Menikah"/>Menikah
				&nbsp;
				<input type="radio" name="status" value="Belum"/>Belum
			</td>
		</tr>
		<tr>
			<td>Jabatan</td>
			<td>
				<select name="jabatan">
					<option value="">-- Pilih Jabatan--</option>
					<option value="Manager">Manager</option>
					<option value="Asisten Manager">Asisten Manager</option>
					<option value="Staff">Staff</option>
				</select>
			</td>
		</tr>
	</tbody>
</table>
</form>
</body>
</html>