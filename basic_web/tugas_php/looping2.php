<!DOCTYPE html>
<html>
<head>
	<title>Tugas looping 2</title>
    <style>
	table{width:300px; text-align:center; margin:auto; }
	table th { background-color: blue; }
	h2 {text-align:center; font-style:italic; font-weight:bold;}
</style>
</head>
<body>
		

	<form>
		<table  cellspacing="0">
			<tr>
				<th>NO</th>
				<th>Nama</th>
				<th>Kelas</th>
			</tr>
            <?php  
            for ($no = 1, $i=1, $a=10; $i<=10, $a>=1  ; $i++, $a--) { 
                ?>
                    <tr>
                        <td> <?php echo $no; ?></td>
                        <td><?php echo"nama ke - $i"; ?></td>
                        <td><?php echo"kelas ke - $a"; ?></td>
                    </tr>
                <?php $no++; 
            } ?>
			<tr>
				<td></td>
				<td></td>
				<td></td>
			</tr>

		</table>
	</form>
</body>
</html>