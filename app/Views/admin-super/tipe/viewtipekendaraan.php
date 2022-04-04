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
                        <h1 class="h3 mb-2 text-gray-800">Tipe Kendaraan</h1>
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">DataTables</h6>
                                <?= form_button('','<i class="fa fa-plus-circle"></i> Tambah Data', [
                                    'class' => 'btn btn-md btn-primary m-2',
                                    'onclick' => "location.href=('".base_url('tipekendaraan/formtambah')."')"
                                ]) ?>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead class="text-center">
                                            <tr>
                                                <th>No</th>
                                                <th>Kode</th>
                                                <th>Merk</th>
                                                <th>Tipe Kendaraan</th>
                                                <th>Sub Tipe</th>
                                                <th>Transmisi</th>
                                                <th>IsDiscontinued</th>
                                                <th>Created by</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tfoot class="text-center">
                                            <tr>
                                                <th>No</th>
                                                <th>Kode</th>
                                                <th>Merk</th>
                                                <th>Tipe Kendaraan</th>
                                                <th>Sub Tipe</th>
                                                <th>Transmisi</th>
                                                <th>IsDiscontinued</th>
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
                                                <td><?= $row['kodetipe']; ?></td>
                                                <td><?= $row['merks']; ?></td>
                                                <td><?= $row['tipekendaraan']; ?></td>
                                                <td><?= $row['subtipe']; ?></td>
                                                <td><?= $row['transmisi']; ?></td>
                                                <td><?= $row['isdiscontinued']; ?></td>
                                                <td><?= $row['createdby']; ?></td>
                                                
                                                <td class="text-center">
                                                    <button class="btn btn-sm btn-warning"  title="Edit data" onclick="edit('<?= $row['kodetipe'] ?>')">Edit</button>
                                                    <button class="btn btn-sm btn-danger"  title="Hapus data" onclick="hapus('<?= $row['kodetipe'] ?>')">Hapus</button>
                                                </td>
                                            </tr>

                                            <?php endforeach; ?>
                                            
                                        </tbody>
                                    </table>
                                    <script>
                                        function edit(kodetipe) {
                                            window.location=('/tipekendaraan/formedit/'+kodetipe);
                                        }

                                        function hapus(kodetipe) {
                                            pesan = confirm('Yakin akan hapus data?');
                                            if (pesan) {
                                                window.location=('/tipekendaraan/hapus/'+kodetipe);
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