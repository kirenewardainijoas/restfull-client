<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/') ?>material.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/') ?>sb-admin-2.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css"/> -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Nasabah</title>
</head>
<body>
    <!-- Always shows a header, even in smaller screens. -->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
                <!-- Title -->
                <span class="mdl-layout-title">Nasabah</span>
                <!-- Add spacer, to align navigation to the right -->
                <div class="mdl-layout-spacer"></div>
                <!-- Navigation. We hide it in small screens. -->
                <nav class="mdl-navigation mdl-layout--large-screen-only">
                    <a class="mdl-navigation__link" href="">Nasabah</a>
                    <a class="mdl-navigation__link" href="">Masukan Data Nasabah</a>
                </nav>
            </div>
        </header>
        <div class="mdl-layout__drawer">
            <span class="mdl-layout-title">Nasabah</span>
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="">Nasabah</a>
                <a class="mdl-navigation__link" href="">Masukan Data Nasabah</a>
            </nav>
        </div>
        <main class="mdl-layout__content">
            <div class="page-content">
                <div class="mdl-grid">
                    <div class="mdl-cell--12-col">
                        <table id="table" class="mdl-cell--12-col" >
                            <thead>
                                <tr>
                                    <th class="mdl-data-table__cell--non-numeric">Id</th>
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
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Your content goes here -->
            </div>
        </main>
    </div>
</body>
<script type="text/javascript" src=" <?php echo base_url('assets/js/') ?>material.min.js "></script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">  
    $(document).ready(function() {
        $('#table').DataTable();
    });
</script>
</html>