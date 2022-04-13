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
                                <a class="btn btn-primary btn-md" href="<?= base_url('datacabang/formtambah'); ?>"> <i class="fa fa-plus-circle"></i> Tambah Data Cabang</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead class="text-center">
                                            <tr>
                                                <th>No</th>
                                                <th>Kode Cabang</th>
                                                <th>Nama Cabang</th>
                                                <th>Created by</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tfoot class="text-center">
                                            <tr>
                                                <th>No</th>
                                                <th>Kode Cabang</th>
                                                <th>Nama Cabang</th>
                                                <th>Created by</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php 
                                                $nomor = 1;
                                                foreach($tampildata as $row):
                                            ?>

                                            <tr>
                                                <td><?= $nomor++; ?></td>
                                                <td><?= $row['kodecabang']; ?></td>
                                                <td><?= $row['namacabang']; ?></td>
                                                <td><?= $row['createdby']; ?></td>
                                                
                                                <td class="text-center">
                                                    <button class="btn btn-sm btn-warning"  title="Edit data" onclick="edit('<?= $row['kodecabang'] ?>')">Edit</button>
                                                    <button class="btn btn-sm btn-danger"  title="Hapus data" onclick="hapus('<?= $row['kodecabang'] ?>')">Hapus</button>
                                                </td>
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