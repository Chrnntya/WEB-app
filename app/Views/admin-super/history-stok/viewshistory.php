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
                        <h1 class="h3 mb-2 text-gray-800">Cabang</h1>
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead class="text-center">
                                            <tr>
                                            <th>No</th>
                                                <th>Kode Stok</th>
                                                <th>Nomor Bukti</th>
                                                <th>Keterangan</th>
                                                <th>Created by</th>
                                                <th>History Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $nomor = 1;
                                                foreach($tampildata as $row):
                                            ?>

                                            <tr>
                                                <td><?= $nomor++; ?></td>
                                                <td><?= $row['kodestok']; ?></td>
                                                <td><?= $row['nobukti']; ?></td>
                                                <td><?= $row['keterangan']; ?></td>
                                                <td><?= $row['createdby']; ?></td>
                                                <td><?= $row['tglhistori']; ?></td>
                                                
                                            </tr>

                                            <?php endforeach; ?>
                                            
                                        </tbody>
                                    </table>
                                    <script>
                                        function edit(kodecabang) {
                                            window.location=('/datacabang/formedit/'+kodecabang);
                                        }

                                        function hapus(kodecabang) {
                                            pesan = confirm('Yakin akan hapus data?');
                                            if (pesan) {
                                                window.location=('/datacabang/hapus/'+kodecabang);
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