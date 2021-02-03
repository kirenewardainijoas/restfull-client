<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800" id="tittle">Dasboard</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Nasabah</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <button type="button" class="btn btn-success btn-icon-split" data-toggle="modal" data-target="#myModal">
                    <span class="text">Tambah</span>
                    <span class="icon text-white-50">
                        <i class='fas fa-plus' style='color:white'></i>
                    </span>
                </button>
                <br>
                <br>
                <table class="table table-bordered" id="Table" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="mdl-data-table__cell--non-numeric">Id Nasabah</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Gender</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $key => $value) : ?>
                            <tr>
                                <td class="mdl-data-table__cell--non-numeric"><?= $value['id']; ?></td>
                                <td><?= $value['first_name']; ?></td>
                                <td><?= $value['last_name']; ?></td>
                                <td><?= $value['email']; ?></td>
                                <td><?= $value['gender']; ?></td>
                                <td>
                                    <a href="<?= base_url(); ?>Amin/edit_data/<?php echo $value['id']?>" type="buttton" class="btn"><i class='fas fa-edit' style='color:black'></i></a>
                                    <a href="<?= base_url(); ?>Amin/edit_data/" type="buttton" class="btn"><i class='far fa-trash-alt' style='color:red'></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
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
                <form action="<?= base_url(); ?>admin/add_data" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="FirstName">First Name</label>
                            <input type="text" name="FirstName" class="form-control" id="FirstName">
                        </div>
                        <div class="form-group">
                            <label for="LastName">Last Name</label>
                            <input type="text" name="LastName" class="form-control" id="LastName">
                        </div>
                        <div class="form-group">
                            <label for="Email">Email</label>
                            <input type="text" name="Email" class="form-control" id="Email">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="row">
                            <button type="submit" class="btn btn-success">Tambah</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->