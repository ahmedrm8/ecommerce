
<?php
$source = basename($_SERVER['PHP_SELF'], '.php');
?>
<footer class="sticky-footer bg-white">
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span>Copyright &copy; Your Website 2020</span>
    </div>
  </div>
</footer>
<!-- End of Footer -->
</div>
<!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper -->
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>
<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        Select "Logout" below if you are ready to end your current session.
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="login.php">Logout</a>
      </div>
    </div>
  </div>
</div>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    </script>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <!-- Custom scripts for all pages-->

  <script src="js/sb-admin-2.min.js"></script>
  

/** */
  <?= $source == 'productsTables' || $source == 'tables' || $source == 'usersTables' ? 
  '<!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>' : '' ?>
  <?= $source == 'index' || $source == 'charts' ? 
  '  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>' : '' ?>
  <?= $source == 'charts' ? 
  '<script src="js/demo/chart-bar-demo.js"></script>' : '' ?>
  <script>
    $('.modalmsg').click(function() {
      $(this).parent().parent().find('.view').text('Read');
      // $(this).parent().prev().text('Read');
      // let id = $(this).data('id');
      let id = $(this).attr('data-id');
      $.post("functions/edit_msg.php", {
        id : id,
      }, function(data) {
        $('.numC').text(data);
      })
    })
    // $.getJSON("functions/status.php", function(data) {
    //     var perPage = 5;
    //     var countRows = Math.ceil(data.length / perPage); // Current 11 / 5 = 3
    //     console.log(countRows);
    //     var start = 0;
    //     console.log(start);
    //     $('#first').click(function() {
    //       $(this).attr('data-id', 5);
    //     })
    //     let id = $("#first").data('id');

    //     for(var i = id; i < perPage; i++) {
    //       var count = i + 1;
    //       $('#allUsers').append(
    //         "<tr>" +
    //         "<td>"+ count +"</td>" +
    //         "<td>"+data[i]['name']+"</td>" +
    //         "<td>"+data[i]['address']+"</td>" +
    //         "<td>"+data[i]['phone']+"</td>" +
    //         "<td>"+data[i]['email']+"</td>" +
    //         "<td>"+data[i]['gender']+"</td>" +
    //         "<td>"+data[i]['priv']+"</td>" +
    //         "<td>"+data[i]['status']+"</td>" +
    //         "</tr>"
    //       );
    //     }
    //   });
    // first we create some variables and then we will create a function to fetch api
    var apiUrl = "http://localhost/ecommerce/sb-admin/functions/readUser.php";
    var userData = [];
    let itemsPerPage = 3;
    let currentPage = 1;
    // now we will create pagination
    async function dataTable() {
      await productTable();
      console.log(userData);
      // pagination starts here
      const pages = [];
      for (let i = 0; i <= Math.ceil(userData.length / itemsPerPage); i++) {
        pages.push(i);
      }
      const indexOfLastPage = currentPage * itemsPerPage;
      const indexOfFirstPage = indexOfLastPage - itemsPerPage;
      const currentItems = userData.slice(indexOfFirstPage, indexOfLastPage);
      document.getElementById("allUsers").innerHTML = currentItems.map(data =>
      `
      <tr>
      <td> ${data.user_id} </td>
      <td> ${data.user_name} </td>
      <td> ${data.user_address} </td>
      <td> ${data.user_phone} </td>
      <td> ${data.user_email} </td>
      <td> ${data.user_gender} </td>
      <td> ${data.priv_name} </td>
      <td> ${data.user_status} </td>
      <td>
        <a href="usersTables.php?action=edit&id=${data.user_id}" class="btn btn-primary" data-id="${data.user_id}">Edit</a>
        <a href="functions/userDelete.php?id=${data.user_id}" class="btn btn-danger" data-id="${data.user_id}">Delete</a>
      </td>
      </tr>
      `
      ).join("");
    }
    dataTable();
    const prevBtn = () => {
      if((currentPage - 1) * itemsPerPage) {
        currentPage--;
        dataTable()
      }
    }
    const nextBtn = () => {
      if((currentPage * itemsPerPage) / userData.length) {
        currentPage++;
        dataTable()
      }
    }
    document.getElementById("prevBtn").addEventListener("click", prevBtn, false);
    document.getElementById("nextBtn").addEventListener("click", nextBtn, false);
    async function productTable() {
      const data = await fetch(apiUrl); //the api url
      const res = await data.json();
      userData = res.data;
      console.log(res);
    }
    productTable();
  </script>
</body>
</html>