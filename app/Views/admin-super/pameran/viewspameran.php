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
                        <h1 class="h3 mb-2 text-gray-800">Transfer Kendaraan untuk Pameran</h1>
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex inline">
                                <?= form_button('','<i class="fa fa-cart-plus"></i> Transfer Pameran', [
                                    'class' => 'btn btn-md btn-primary m-2',
                                    'onclick' => "location.href=('".base_url('pameran/formtambah')."')"
                                ]) ?>
                                
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
                                                <th>No</th>
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
                                                <td><?= $nomor++; ?></td>
                                                <td><?= $row['nobukti']; ?></td>
                                                <td><?= $row['cabang']; ?></td>
                                                <td><?= $row['tglawalpameran']; ?></td>
                                                <td><?= $row['tglakhirpameran']; ?></td>
                                                <td><?= $row['namasupir']; ?></td>
                                                <td><?= $row['dibuatoleh']; ?></td>
                                                <td><?= $row['dikonfirmasioleh']; ?></td>
                                                <td><?= $row['jenisstok']; ?></td>
                                                <td><?= $row['keterangan']; ?></td>
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