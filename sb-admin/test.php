<?php
require_once "functions/connection.php";
$select_pro = "SELECT products.*, categories.cat_name FROM `products` INNER JOIN `categories` ON products.pro_cat_id = categories.cat_id";
$query = $conn -> query($select_pro);
foreach ($query as $product) {
  ?>
  <table bordered='1'>
  <td><?= $product['pro_id'] ?></td>
  <td><?= $product['pro_name'] ?></td>
  <td><?= $product['pro_price'] ?></td>
  <td><?= $product['cat_name'] ?></td>
  </table>
  <?php
}
?>