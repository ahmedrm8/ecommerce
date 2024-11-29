<?php
  $id = $_GET['id'];
  $selectPro = "SELECT * FROM products WHERE pro_id = '$id'";
  $query = $conn -> query($selectPro);
  $product = $query -> fetch_assoc();
?>
<form method="post" action="functions/proEdit.php?id=<?= $product['pro_id'] ?>" enctype="multipart/form-data" class="user">
  <div class="form-group">
    <label for="exampleInputEmail1">Product Name</label>
    <input type="text" name="name" value="<?= $product['pro_name'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Price</label>
    <input type="text" name = "price" value="<?= $product['pro_price'] ?>" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Sale</label>
    <input type="text" name = "sale" value="<?= $product['pro_sale'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Description</label>
    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="5" style="resize:none"><?= $product['pro_description'] ?></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">image</label>
    <input type="file" name="img[]"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" multiple>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">category</label>
    <select class="form-control" name="category" id="exampleFormControlSelect1">
      <?php
      $sel_cat = "SELECT * FROM categories";
      $query_cat = $conn -> query($sel_cat);
      foreach ($query_cat as $category) {
      ?>
      <option value="<?= $category['cat_id'] ?>"><?= $category['cat_name'] ?></option>
      <?php
        }
      ?>
    </select>
  </div>
  <input type="submit" class="btn btn-primary" value="Submit"/>
</form>