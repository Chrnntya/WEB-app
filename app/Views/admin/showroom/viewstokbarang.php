<?php $this->extend('layouts/admin/templates'); ?>
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
                        <h1 class="h3 mb-2 text-gray-800">Stok Unit</h1>
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">DataTables</h6>
                                <?= form_button('','<i class="fa fa-plus-circle"></i> Tambah Data', [
                                    'class' => 'btn btn-md btn-primary m-2',
                                    'onclick' => "location.href=('".base_url('stokbarang/formtambah')."')"
                                ]) ?>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead class="text-center">
                                            <tr>
                                                <th>No</th>
                                                <th>Kode</th>
                                                <th>Jenis</th>
                                                <th>Status</th>
                                                <th>Lokasi</th>
                                                <th>Keterangan</th>
                                                <th>Publish</th>
                                                <th>Terjual</th>
                                                <!-- <th>Aksi</th> -->
                                            </tr>
                                        </thead>
                                        <tfoot class="text-center">
                                            <tr>
                                                <th>No</th>
                                                <th>Kode</th>
                                                <th>Jenis</th>
                                                <th>Status</th>
                                                <th>Lokasi</th>
                                                <th>Keterangan</th>
                                                <th>Publish</th>
                                                <th>Terjual</th>
                                                <!-- <th>Aksi</th> -->
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php 
                                                $nomor = 1;
                                                foreach($tampildata as $row):
                                            ?>

                                            <tr>
                                                <td><?= $nomor++; ?></td>
                                                <td><?= $row['kodestok']; ?></td>
                                                <td><?= $row['jenisstok']; ?></td>
                                                <td><?= $row['statusstok']; ?></td>
                                                <td><?= $row['lokasi']; ?></td>
                                                <td><?= $row['ispublish']; ?></td>
                                                <td><?= $row['createdby']; ?></td>
                                                <td><?= $row['terjual']; ?></td>
                                                <!-- <td class="text-center">
                                                    <button class="btn btn-sm btn-danger"  title="Edit data" onclick="edit('<?= $row['kodestok'] ?>')">Edit</button>
                                                    <button class="btn btn-sm btn-warning"  title="Hapus data" onclick="hapus('<?= $row['kodestok'] ?>')">Hapus</button>
                                                </td> -->
                                            </tr>

                                            <?php endforeach; ?>
                                            
                                        </tbody>
                                    </table>
                                    <script>
                                        function edit(kodestok) {
                                            window.location=('/stokbarang/formedit/'+kodestok);
                                        }

                                        function hapus(kodestok) {
                                            pesan = confirm('Yakin akan hapus data?');
                                            if (pesan) {
                                                window.location=('/stokbarang/hapus/'+kodestok);
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