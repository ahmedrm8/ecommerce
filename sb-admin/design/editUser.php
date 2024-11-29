<?php
require_once 'functions/connection.php';
$id = $_GET['id'];
$selectUser = "SELECT users.*,priv.* FROM `users` INNER JOIN `priv` ON users.user_priv = priv.priv_id  WHERE user_id = '$id'";
$query = $conn->query($selectUser);
$user = $query->fetch_assoc();
?>
<form method="post" action="functions/userEdit.php?id=<?=$user['user_id'];?>">
  <div class="form-group">
    <input type="hidden" name="id" value="<?=$user['user_id'];?>">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" name="username" value = "<?=$user['user_name']?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name = "password" value = "<?=$user['user_pass']?>" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="text" name = "email" class="form-control" value = "<?=$user['user_email']?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Phone</label>
    <input type="text" name="phone" class="form-control" value = "<?=$user['user_phone']?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
  <label for="exampleInputEmail1">Gender</label>
  <div class="form-check">
    <input type="radio" class="form-check-input" value='1' <?=$user['user_gender'] == 1 ? 'checked' : ''?> name = "gender" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck2">Female</label>
    <br/>
    <input type="radio" class="form-check-input" value='0' <?=$user['user_gender'] == 0 ? 'checked' : ''?> name = "gender" id="exampleCheck2">
    <label class="form-check-label" for="exampleCheck1">Male</label>
  </div>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Address</label>
    <input type="text" name="address" value = "<?=$user['user_address']?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">privliges</label>
    <?php
$selectPriv = "SELECT * FROM priv";
$query = $conn->query($selectPriv);
?>
    <select class="form-control"  name="priv" id="exampleFormControlSelect1">
      <option value="<?=$user['priv_id'];?>" ><?=$user['priv_name'];?></option>
<?php foreach ($query as $row) {
  if ($row['priv_id'] != $user['priv_id']) {

  
  ?>
      <option value="<?=$row['priv_id'];?>"><?=$row['priv_name'];?></option>
      <?php 
  }
    
    }?>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>