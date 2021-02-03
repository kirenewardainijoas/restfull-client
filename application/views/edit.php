<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800" id="tittle">Dasboard</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Nasabah</h6>
        </div>
        <?php echo form_open('admin/edit_data'); ?>
        <div class="card-body">
            <form action="<?= base_url() . 'admin/edit_data/' . $data['first_name']; ?>" method="post">
                <div class="form-group">
                    <label for="FirstName">First Name</label>
                    <input type="text" name="FirstName" class="form-control" id="FirstName" value="<?= $data['first_name']; ?>">
                </div>
                <div class="form-group">
                    <label for="LastName">Last Name</label>
                    <input type="text" name="LastName" class="form-control" id="LastName" value="<?= $data['last_name']; ?>">
                </div>
                <div class="form-group">
                    <label for="Email">Email</label>
                    <input type="text" name="Email" class="form-control" id="Email" value="<?= $data['email']; ?>">
                </div>
                <div class="row">
                    <button type="submit" class="btn btn-success">Tambah</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-gradient-primary text-white">
                    <h4 class="modal-title">Tambah Data</h4>
                    <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->