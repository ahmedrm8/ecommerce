
<h1 class="h3 mb-2 text-gray-800">Products</h1>
  <!-- <p class="mb-4">
    DataTables is a third party plugin that is used to generate the demo table below.
    For more information about DataTables, please visit the
    <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.
  </p> -->
  <!-- DataTales Example -->
  <a href="?action=add" class="btn btn-primary mb-2">New Product</a>
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Products Tables</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered"  width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Id</th>
              <th>Product Name</th>
              <th>Price</th>
              <th>Sale</th>
              <th>Images</th>
              <th>Description</th>
              <th>cat_id</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Id</th>
              <th>Product Name</th>
              <th>Price</th>
              <th>Sale</th>
              <th>Images</th>
              <th>Description</th>
              <th>cat_id</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
            <?php
$start = 0;
$rows_per_page = 4;
// get the total of rows
$total_rows = "SELECT * FROM products";
$query_rows = $conn->query($total_rows)->num_rows;
$pages = ceil($query_rows / $rows_per_page);
if (isset($_GET['page'])) {
    $page = $_GET['page'] - 1;
    $start = $page * $rows_per_page;
}
$select_pro = "SELECT products.*, categories.cat_name FROM `products` INNER JOIN `categories` ON products.pro_cat_id = categories.cat_id LIMIT $start, $rows_per_page";
$query = $conn->query($select_pro);
$id = 0;
foreach ($query as $product) {
    ?>
              <tr>
                <td><?=++$id;?></td>
                <td><?=$product['pro_name'];?></td>
                <td>$<?=$product['pro_price'];?></td>
                <td>$<?=$product['pro_sale'];?></td>
                <td>
              <?php
if ($product['pro_img'] != '') {

        foreach (json_decode($product['pro_img']) as $image) {
            static $left = 0;
            ?>
                <img style="width: 50px;height:50px;border-radius:50%;margin-right:-<?=$left++ + 25?>px;top:50%;border:1px solid;" src="images/<?php echo $image; ?>" alt="">
                <?php
}
    } else {
        echo 'no photo available';
    }
    ?>
                </td>
                <td>
              <?=$product['pro_description'];?>
                </td>
                <td>
              <?=$product['cat_name'];?>
                </td>
                <td>
 
                  <a href="?action=edit&id=<?=$product['pro_id']?>" class='btn btn-primary'>Edit</a>
                  <!-- <a href="" class='btn btn-danger'>Delete</a> -->
<!-- Button trigger modal -->

<button type="button" id="deletuser" class="btn btn-dark" onclick="(.$id.)" data-toggle="modal" data-target="#product<?=$product['pro_id']?>">
  Delete
  <?php 
    require_once 'functions/connection.php';
if(isset($_POST['deletesend'])){
  $unique=$_POST['deletesend'];
  $sql="delete from `products` where id=$unique";
  $result=mysqli_query($con,$sql);
}
    ?>
    <script>
    function deletuser(deletid){
   ;
      $.ajax ({
        
      url:"functions/proDelete.php",
type:'post',
data:{
  deletesend:deletid

}
succecc:function(data,status){

}
      })
    }
    </script>
</button>
/** */
  
  


<!-- Modal -->
<div class="modal fade" id="product<?=$product['pro_id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
        <a href="functions/proDelete.php?id=<?=$product['pro_id']?>" type="button" class="btn btn-primary">Confirm</a>
      </div>
    </div>
  </div>
</div>
                </td>
              </tr>
            <?php
}
?>
            </tbody>
          </table>

          <div class="page-info">Showing 1 of <?=$pages?></div>
          <div class="pagination" style="width: fit-content; margin: auto">
            <!-- Go to the first page -->
            <a href="?page=1" class="btn btn-primary m-1">First</a>
            <!-- Go to the prev page -->
              <?php
if (isset($_GET['page']) && $_GET['page'] > 1) {
    ?>
                <a href="?page=<?=$_GET['page'] - 1?>" class="btn btn-primary m-1">Previous</a>
              <?php
} else {
    ?>
                <a class="btn btn-primary m-1">Previous</a>
              <?php
}
?>
              <!-- Output the page numbers -->
            <div class="page-numbers">
              <?php
for ($counter = 1; $counter <= $pages; $counter++) {
    ?>
                <a href="?page=<?=$counter?>" class="btn btn-primary m-1"><?=$counter?></a>
              <?php
}
?>
            </div>
            <!-- Go to the next page -->
            <?php
if (!isset($_GET['page'])) {
    ?>
            <a href="?page=2" class="btn btn-primary m-1">Next</a>
            <?php
} else {
    if ($_GET['page'] >= $pages) {
        ?>
              <a class="btn btn-primary m-1">NEXT</a>
            <?php
} else {
        ?>
            <a href="?page=<?=$_GET['page'] + 1?>" class="btn btn-primary m-1">NEXT</a>
            <?php
}
}
?>
            <!-- Go to the Last page -->
            <a href="?page=<?=$pages?>" class="btn btn-primary m-1">Last</a>
          </div>
        </div>
      </div>
    </div>