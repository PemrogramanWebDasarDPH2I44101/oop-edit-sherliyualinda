<?php 
require_once 'class.php';
$k = new Kalkulator();
$id = isset($_GET['id']) ? $_GET['id'] : null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="class.php?update=true" method="post">
    	<?php 
    	$d = mysqli_fetch_array($k->bagi($id));
    	?>
    	<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
        Masukan NIM <input type="text" name="input1" value="<?php echo $d['nim']; ?>"><br>
        Masukan Nama<input type="text" name="input2" value="<?php echo $d['nama']; ?>"><br>
        Masukan Tanggal Lahir<input type="date" name="input3" value="<?php echo $d['tgl_lahir']; ?>"><br>
        <br>
        <input type="submit" value="Kirim">
    </form>
</body>
</html>