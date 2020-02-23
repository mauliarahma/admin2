<!-- <!DOCTYPE html>
<html>
<fieldset>
<legend><h3>Upload Gambar</h3></legend>
<body>

	<form action="upload.php" method="post" enctype="multipart/form-data">
		Pilih Gambar:
		<input type="hidden" name="id_barang" value="<?= !empty($_GET['id']) ? $_GET['id'] : 0; ?>"><br><br>
		<input type="file" name="FileToUpload" id="FileToUpload"><br>
		<br>
		<input type="submit" name="Submit" value="Upload Image"><br>
		<br>
		<button class="btn btn-danger"><a href="data_barang.php">Halaman Utama</a></button>
	</form>

</body>
</fieldset>
</html> -->


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  	 <fieldset>
  <legend><h3>Upload Gambar</h3></legend>
    
    <form action="upload.php" method="post" enctype="multipart/form-data">
		Pilih Gambar:
		<input type="hidden" name="id_barang" value="<?= !empty($_GET['id']) ? $_GET['id'] : 0; ?>"><br><br>
		<input type="file" name="FileToUpload" id="FileToUpload"><br>
		<br>
		<input type="submit" name="Submit" value="Upload Image"><br>
		<br>
		<a href="data_barang.php" class="btn btn-danger"><i class="btn btn-danger">Halaman Utama</i></a>
	</form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </fieldset>
  </body>
</html>