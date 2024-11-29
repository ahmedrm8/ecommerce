<h1 class="h3 mb-2 text-gray-800">Messages</h1>
  <!-- <p class="mb-4">
    DataTables is a third party plugin that is used to generate the demo table below.
    For more information about DataTables, please visit the
    <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.
  </p> -->
  <!-- DataTales Example -->
  <a href="?action=add" class="btn btn-primary mb-2">New Messages</a>
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Messages Tables</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered"  width="100%" cellspacing="0">
          <thead>
            <tr>
            <th>Id</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Messages</th>
              <th>view</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Id</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Messages</th>
              <th>view</th>
            </tr>
          </tfoot>
          <tbody>
            <?php
$start = 0;
$rows_per_page = 4;
// get the total of rows
$total_rows = "SELECT * FROM messages";
$query_rows = $conn->query($total_rows)->num_rows;
$pages = ceil($query_rows / $rows_per_page);
if (isset($_GET['page'])) {
    $page = $_GET['page'] - 1;
    $start = $page * $rows_per_page;
}
$select_msg = "SELECT * FROM messages LIMIT $start, $rows_per_page";
$query = $conn->query($select_msg);
$id = 0;
foreach ($query as $msg) {
    ?>
              <tr>
                <td><?=++$id;?></td>
                <td><?=$msg['msg_fname'];?></td>
                <td>$<?=$msg['msg_lname'];?></td>
                <td>$<?=$msg['msg_email'];?></td>
                <td><?=$msg['msg_phone'];?></td>
                <td><?=$msg['msg_msge'];?></td>
                <td class="view"><?=$msg['view'] == 1 ? 'Read':'Unread';?></td>
                <td>
<button type="button" class="btn btn-primary modalmsg" data-toggle="modal" data-target="#message<?=$msg['msg_id']?>" data-id="<?=$msg['msg_id']?>" >
  View Message
</button>

<!-- Modal -->
<div class="modal fade" id="message<?=$msg['msg_id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><?= $msg['msg_fname']; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?= $msg['msg_msge']; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="functions/proDelete.php?id=<?=$msg['msg_id']?>" type="button" class="btn btn-primary">Confirm</a>
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