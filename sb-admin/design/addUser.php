<form class="user" method="post" action="functions/userAdd.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name = "password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="text" name = "email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Phone</label>
    <input type="text" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
  <label for="exampleInputEmail1">Address</label>
  <div class="form-check">
    <input type="radio" class="form-check-input" value="0" name = "gender" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Male</label>
    <br/>
    <input type="radio" class="form-check-input" value="1" name = "gender" id="exampleCheck2">
    <label class="form-check-label" for="exampleCheck2">Female</label>
  </div>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Address</label>
    <input type="text" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">privliges</label>
    <select class="form-control" name="priv" id="exampleFormControlSelect1">
    <?php
$selectPriv = "SELECT * FROM priv";
$query = $conn->query($selectPriv);
foreach ($query as $priv) {
  if ($_SESSION['priv'] == 2 && $priv['priv_id'] > 2) {
?>
      <option value="<?= $priv['priv_id'] ?>"><?= $priv['priv_name'] ?></option>
      <?php
      } elseif ($_SESSION['priv'] == 1) {
        ?>
      <option value="<?= $priv['priv_id'] ?>"><?= $priv['priv_name'] ?></option>
        <?php
      }
      }
      ?>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
