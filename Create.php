<!doctype html>
<html lang="en">

<head>
<title>Tambah Data Kue</title>
</head>

<body>
<h1>Tambah</h1>
<a href="index.php">Kembali</a>
<br><br>
<form action="proses.php" method="post">
<label>ID </label>
<br>
<input type="text" name="ID">
<br>
<label>nama konsumen </label>
<br>
<input type="text" name="namakonsumen">
<br>
<label>nama kue </label>
<br>
<input type="text" name="namakue">
<br>
<label>harga kue </label>
<br>
<input type="number" name="hargakue">
<br>
<label>ukuran kue</label>
<br>
<input type="number" name="ukurankue">
<br><br>
<button type="submit" name="submit_simpan">Submit</button>
<button type="reset">Reset</button>
</form>
</body>

</html>