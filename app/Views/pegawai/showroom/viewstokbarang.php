<?php $this->extend('layouts/pegawai/templates'); ?>
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
                            <div class="card-header py-3 d-flex inline">
                                <?= form_button('','<i class="fa fa-cart-plus"></i> Tambah Stok Unit', [
                                    'class' => 'btn btn-md btn-primary m-2',
                                    'onclick' => "location.href=('".base_url('stokbarang/formtambah')."')"
                                ]) ?>
                                <?= form_button('','<i class="fa fa-car"></i> Tambah Data Kendaraan', [
                                    'class' => 'btn btn-md btn-primary m-2 inline',
                                    'onclick' => "location.href=('".base_url('datakendaraan/formtambah')."')"
                                ]) ?>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead class="text-center">
                                            <tr>
                                                <th>Update</th>
                                                <th>No</th>
                                                <th>Kode</th>
                                                <th>Jenis</th>
                                                <th>Status</th>
                                                <th>Lokasi</th>
                                                <th>Keterangan</th>
                                                <th>Publish</th>
                                                <th>Terjual</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tfoot class="text-center">
                                            <tr>
                                                <th>Update</th>
                                                <th>No</th>
                                                <th>Kode</th>
                                                <th>Jenis</th>
                                                <th>Status</th>
                                                <th>Lokasi</th>
                                                <th>Keterangan</th>
                                                <th>Publish</th>
                                                <th>Terjual</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php 
                                                $nomor = 1;
                                                foreach($tampildata as $row):
                                                    
                                            ?>

                                            <tr>
                                                <td class="text-center">
                                                    <a href="" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modal<?php echo $row['kodestok']; ?>">
                                                    <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                                                    </a>
                                                </td>
                                                <td><?= $nomor++; ?></td>
                                                <td><?= $row['kodestok']; ?></td>
                                                <td><?= $row['jenisstok']; ?></td>
                                                <td><?= $row['statusstok']; ?></td>
                                                <td><?= $row['lokasi']; ?></td>
                                                <td><?= $row['ispublish']; ?></td>
                                                <td><?= $row['createdby']; ?></td>
                                                <td><?= $row['terjual']; ?></td>
                                                <!-- id setiap modal juga harus berbeda, cara membedakannya dengan menggunakan id_barang -->
                                                <div class="modal fade" id="modal<?php echo $row['kodestok']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Ubah Status Stok</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <!-- di dalam modal-body terdapat 4 form input yang berisi data.
                                                            data-data tersebut ditampilkan sama seperti menampilkan data pada tabel. -->
                                                            <div class="modal-body">
                                                                <form action="<?= base_url('pegawai/updateStatusStok') ?>">
                                                                    <input type="hidden" name="kodestok" value="<?= $row['kodestok']; ?>">
                                                                        <div class="form-check m-4">
                                                                            <label class="form-check-label">
                                                                                <input type="radio" class="form-check-input" name="statusstok" value="DRAFT">DRAFT
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check m-4">
                                                                            <label class="form-check-label">
                                                                                <input type="radio" class="form-check-input" name="statusstok" value="READY">READY
                                                                            </label>
                                                                        </div>
                                                                        <hr>
                                                                    <div class="modal-footer">
                                                                        <button type="submit" class="btn btn-primary align-right">Update</button>
                                                                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i></button>
                                                                    </div>
                                                                </form> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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
    <!-- Modal -->
    
<?php $this->endSection(); ?>