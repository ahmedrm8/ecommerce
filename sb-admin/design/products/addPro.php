<form method="post" action="functions/proAdd.php" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">Product Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Product name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Price</label>
    <input type="text" name = "price" class="form-control" id="exampleInputPassword1" placeholder="Price">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Sale</label>
    <input type="text" name = "sale" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Sale">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Description</label>
    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="5" style="resize:none"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">image</label>
    <input type="file" name="img[]" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" multiple>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">category</label>
    <select class="form-control" name="category" id="exampleFormControlSelect1">
      <?php
      $sel_cat = "SELECT * FROM categories";
      $query = $conn -> query($sel_cat);
      foreach ($query as $category) {
      ?>
      <option value="<?= $category['cat_id'] ?>"><?= $category['cat_name'] ?></option>
      <?php
        }
      ?>
    </select>
  </div>
  <input type="submit" class="btn btn-primary" value="Submit"/>
</form>