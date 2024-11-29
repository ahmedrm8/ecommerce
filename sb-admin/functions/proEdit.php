<?php
require_once 'connection.php';
$id = $_GET['id'];
echo "<pre>";
$name = $_POST['name'];
$price = $_POST['price'];
$sale = $_POST['sale'];
$category = $_POST['category'];
$description = $_POST['description'];
$totalFiles = count($_FILES['img']['name']);
$filesArray = array();
for ($img = 0; $img < $totalFiles; $img++) {
  $imageName = $_FILES['img']['name'][$img];
  $tmpName = $_FILES['img']['tmp_name'][$img];
  $imageExtension = explode('.', $imageName);
  $imageExtension = strtolower(end($imageExtension));
  $newImageName = md5(uniqid()) . '.' . $imageExtension;
  move_uploaded_file($tmpName, '../images/' . $newImageName);
  $filesArray[] = $newImageName;
}
$filesArray = json_encode($filesArray);
require_once 'connection.php';
  $updatePro = "UPDATE products SET pro_name = '$name', pro_price = '$price', pro_sale = '$sale',
  pro_cat_id = '$category', pro_description = '$description' WHERE pro_id = '$id'";
  $query = $conn -> query($updatePro);
  
if ($query) {
  header ("Location: ../productsTables.php");
} else {
    echo $conn->error;
}