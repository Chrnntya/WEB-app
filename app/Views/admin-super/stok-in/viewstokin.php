<?php $this->extend('layouts/super-admin/templates'); ?>
<?php $this->section('content'); ?>
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- /.container-fluid -->
                
                    <!-- Begin Page Content -->
                    <div class="container-fluid">
                        <!-- Page Heading -->
                        <h1 class="h3 mb-2 text-gray-800">Transfer Stok In</h1>
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            
                            <div class="card-body">
                                <style>
                                    tr{
                                        font-size: 14px;
                                        color: black;
                                    }
                                </style>
                                <div class="table-responsive">
                                    <table class="table table-responsive-lg table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead class="text-center">
                                            <tr>
                                                <th>No</th>
                                                <th>Kode Stok</th>
                                                <th>Kode Buku</th>
                                                <th>Nomor Buku</th>
                                                <th>Nomor DO</th>
                                                <th>Tanggal DO</th>
                                                <th>Tanggal Datang</th>
                                                <th>Di buat oleh</th>
                                                <th>Aksi</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $nomor = 1;
                                                foreach($tampilstok as $row ):
                                            ?>

                                            <tr>
                                                <td><?= $nomor++; ?></td>
                                                <td><?= $row['kodestok']; ?></td>
                                                <td><?= $row['kodebuku']; ?></td>
                                                <td><?= $row['nobuku']; ?></td>
                                                <td><?= $row['nodo']; ?></td>
                                                <td><?= $row['tgldo']; ?></td>
                                                <td><?= $row['tgldatang']; ?></td>
                                                <td><?= $row['createdby']; ?></td>   
                                                <td class="text-center">
                                                    <button class="btn btn-sm btn-warning"  title="Edit data" onclick="edit('<?= $row['kodestok'] ?>')">Edit</button>
                                                    <button class="btn btn-sm btn-danger"  title="Hapus data" onclick="hapus('<?= $row['kodestok'] ?>')">Hapus</button>
                                                </td>
                                            </tr>
                                            <?php endforeach;?>
                                            
                                        </tbody>
                                    </table>
                                    <script>
                                        function edit(kodestok) {
                                            window.location=('/stokin/formedit/'+kodestok);
                                        }

                                        function hapus(kodestok) {
                                            pesan = confirm('Yakin akan hapus data?');
                                            if (pesan) {
                                                window.location=('/stokin/hapus/'+kodestok);
                                            }else{
                                                return false;
                                            }
                                            
                                        }
                                    </script>
                                </div>
                            </div>
                            
                        </div>


                    </div>
                    <!-- /.container-fluid -->
                

            </div>
            <!-- End of Main Content -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
    
<?php $this->endSection(); ?>