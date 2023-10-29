<?php
    $obj_person = new contact_person();
	$data = $_GET['id'];
	$person = $obj_person->getPersonById($data);
	if (file_exists("images/". $person['foto']))
	{
		unlink("images/" . $person['foto']);
	}
    $rs = $obj_person->deletePerson($data);

?>

<script type="text/javascript">
		alert ("Data Berhasil di Hapus");
		window.location.href="?hal=contact_person";
</script>