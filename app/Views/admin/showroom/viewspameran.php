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
                        <h1 class="h3 mb-2 text-gray-800">Transfer Kendaraan untuk Pameran</h1>
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex inline">
                                
                                
                            </div>
                            
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
                                                <th>Konfirmasi Pameran</th>
                                                <th>No Bukti</th>
                                                <th>Cabang</th>
                                                <th>Tanggal Mulai Pameran</th>
                                                <th>Tanggal Selesai Pameran</th>
                                                <th>Nama Supir</th>
                                                <th>Di buat Oleh</th>
                                                <th>Di konfirmasi Oleh</th>
                                                <th>Jenis Kendaraan</th>
                                                <th>Keterangan Pameran</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $nomor = 1;
                                                foreach($tampildata as $row ):
                                            ?>

                                            <tr>
                                                <td class="text-center">
                                                    <a href="" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modal<?php echo $row['nobukti']; ?>">
                                                        <i class="fa fa-exclamation-circle" aria-hidden="true"></i> Confirm
                                                    </a>
                                                </td>
                                                <td><?= $row['nobukti']; ?></td>
                                                <td><?= $row['cabang']; ?></td>
                                                <td><?= $row['tglawalpameran']; ?></td>
                                                <td><?= $row['tglakhirpameran']; ?></td>
                                                <td><?= $row['namasupir']; ?></td>
                                                <td><?= $row['dibuatoleh']; ?></td>
                                                <td><?= $row['dikonfirmasioleh']; ?></td>
                                                <td><?= $row['jenisstok']; ?></td>
                                                <td><?= $row['keterangan']; ?></td>
                                                <!-- id setiap modal juga harus berbeda, cara membedakannya dengan menggunakan id_barang -->
                                                <div class="modal fade" id="modal<?php echo $row['nobukti']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
                                                            aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Stok In</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <!-- di dalam modal-body terdapat 4 form input yang berisi data.
                                                            data-data tersebut ditampilkan sama seperti menampilkan data pada tabel. -->
                                                            <div class="modal-body">
                                                                <?php 
                                                                $tgl = date('Y-m-d');
                                                                $tgl = date('Y-m-d');
                                                                ?>
                                                                <form action="<?= base_url('admin/updatepameran') ?>">
                                                                    <input type="hidden" name="nobukti" value="<?= $row['nobukti']; ?>">
                                                                    <input type="hidden" name="dikonfirmasioleh" value="<?= session()->get('username'); ?>">
                                                                    <input type="hidden" name="isconfirmed" value="1">
            
                                                                    <label class="text-monospace text-dark" for="">Publish Stok dengan kode  <?= $row['nobukti']; ?>?</label>
                                                                    <div class="modal-footer">
                                                                        <button type="submit" class="btn btn-primary align-right">IYA</button>
                                                                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i></button>
                                                                    </div>
                                                                </form> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </tr>
                                            <?php endforeach;?>
                                            
                                        </tbody>
                                    </table>
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