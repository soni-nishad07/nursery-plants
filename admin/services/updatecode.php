<?php


$id = $_POST['id'];

$file=$_FILES['file']['name'];
$file_loc=$_FILES['file']['tmp_name'];
$title=$_POST['title'];
$file_size=$_FILES['file']['size'];
$file_type=$_FILES['file']['type'];
$paragraph=$_POST['paragraph'];
// $ext=pathinfo('$file',PATHINFO_EXTENSION);
$folder="./upload/";
move_uploaded_file($file_loc,$folder.$file);
$con=mysqli_connect("localhost","root","","nurseray_plant");
$query="update services set image='$file' , title='$title' , paragraph='$paragraph' where id='$id' ";
$res=mysqli_query($con,$query);


header("location:show.php");


?>