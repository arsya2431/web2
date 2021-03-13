<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 2 Latihan 3</title>
</head>
<body>
    <?php 
	if(isset($_POST['hitung'])){
		$nilai1 = $_POST['nilai1'];
		$nilai2 = $_POST['nilai2'];
		$operator = $_POST['operator'];
		switch ($operator) {
			case '+':
				$hasil = $nilai1+$nilai2;
			break;
			case '-':
				$hasil = $nilai1-$nilai2;
			break;
			case '*':
				$hasil = $nilai1*$nilai2;
			break;
			case '/':
				$hasil = $nilai1/$nilai2;
			break;			
		}
	}
	?>
    <form method="post" action="Per2_Latihan3.php">
        <table >
            <tr><td align="center"><h3><font color="red">NILAI I</td><td></td><td align="center"><h3><font color="red">NILAI II</font></h3></td></tr>
            <tr><td><input type="text" name="nilai1" class="nilai"></td><td><select name="operator">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
                </select></td><td><input type="text" name="nilai2" class="nilai"></td><td><input type="submit" name="hitung" value="submit"></td></tr>
                <td>    <?php if(isset($_POST['hitung'])){ ?>
			                <input type="text" value="<?php echo $hasil; ?>" class="nilai">
		                <?php }else{ ?>
			                <input type="text" value="0" class="nilai">
		                <?php } ?></td>
        </table>
    </form>

</body>
</html>