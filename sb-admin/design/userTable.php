<h1 class="h3 mb-2 text-gray-800">Products</h1>
      <p class="mb-4">
        DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the
        <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.
      </p>
      <!-- DataTales Example -->
      <a href="?action=add" class="btn btn-primary mb-4">New User</a>
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
                  <th>Username</th>
                  <th>Address</th>
                  <th>Phone</th>
                  <th>Email</th>
                  <th>Gender</th>
                  <th>Priv</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Id</th>
                  <th>Username</th>
                  <th>Address</th>
                  <th>Phone</th>
                  <th>Email</th>
                  <th>Gender</th>
                  <th>Priv</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </tfoot>
              <tbody id="allUsers">
              </tbody>
            </table>
            <div class="page-info">Showing 1 of 50</div>
          <div class="pagination" style="width: fit-content; margin: auto">
            <!-- Go to the first page -->
            <button class="btn btn-primary m-1" id="prevBtn">Prev</button>
            <button class="btn btn-primary m-1" id="nextBtn">Next</button>
            <!-- Go to the prev page -->
          </div>
          </div>
        </div>
      </div>
    </div>