<?php
require_once 'connection.php';
echo "<pre>";
$name = $_POST['name'];
$price = $_POST['price'];
$sale = $_POST['sale'];
$description = $_POST['description'];
$category = $_POST['category'];
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
if (!empty($filesArray)) {
  $inserPro = "INSERT INTO products (pro_name, pro_price, pro_sale, pro_cat_id, pro_img) VALUES ('$name', '$price', '$sale', '$category', '$filesArray')";
} else {
  $inserPro = "INSERT INTO products (pro_name, pro_price, pro_sale, pro_cat_id) VALUES ('$name', '$price', '$sale', '$category')";
  
}
$query = $conn->query($inserPro);
if ($query) {
    header("location: ../productsTables.php");
} else {
    echo $conn->error;
}
