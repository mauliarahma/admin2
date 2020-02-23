<?php include "config/config.php";
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["FileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["Submit"])) {
   

if (file_exists($target_file)){
	echo "Sorry, file already exists";
	$uploadOk = 0;
}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

if ($uploadOk == 0) {
	echo "sorry";
}else{
	 if (move_uploaded_file($_FILES["FileToUpload"]["tmp_name"], $target_file)) {
	 	$id = $_POST['id_barang'];
	 	$query = "UPDATE tb_barang set gambar = '".$target_file."' where id_barang = '".$id."'";
	 	$sql = mysqli_query($conn,$query);
	 	if($sql){
	 		header("location:data_barang.php");
	 	}
        echo "<img src='".$target_file."' width='100px'>";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
}
?>