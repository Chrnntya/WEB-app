<<<<<<< HEAD
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
                        <h1 class="h3 mb-2 text-gray-800">Transfer Stok Out</h1>
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex inline">
                                <?= form_button('','<i class="fa fa-cart-plus"></i> Create Stock Out', [
                                    'class' => 'btn btn-md btn-primary m-2',
                                    'onclick' => "location.href=('".base_url('transferout/formtambah')."')"
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
                                                <th>Status Transfer</th>
                                                <th>Lokasi Tujuan</th>
                                                <th>Tanggal Kirim</th>
                                                <th>Tanggal Terima</th>
                                                <th>Nama Supir</th>
                                                <th>Ditransfer Oleh</th>
                                                <th>Di Terima Oleh</th>
                                                <th>Keterangan</th>
                                                <th>Jenis Kendaraan</th>
                                                <th>Nomor Rangka</th>
                                                <th>Nomor Mesin</th>
                                                <th>Tahun Kendaraan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $nomor = 1;
                                                foreach($tampilstok as $row ):
                                            ?>

                                            <tr>
                                                <td><?= $nomor++; ?></td>
                                                <td><?= $row['nobukti']; ?></td>
                                                <td><?= $row['statustransfer']; ?></td>
                                                <td><?= $row['lokasitujuan']; ?></td>
                                                <td><?= $row['tglkirim']; ?></td>
                                                <td><?= $row['tglterima']; ?></td>
                                                <td><?= $row['namasupir']; ?></td>
                                                <td><?= $row['ditransferoleh']; ?></td>
                                                <td><?= $row['diterimaoleh']; ?></td>
                                                <td><?= $row['keterangan']; ?></td>
                                                <td><?= $row['jenisstok']; ?></td>
                                                <td><?= $row['norangka']; ?></td>
                                                <td><?= $row['nomesin']; ?></td>
                                                <td><?= $row['tahunkendaraan']; ?></td>  
                                            </tr>
                                            <?php endforeach;?>
                                            
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
    
=======
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
                        <h1 class="h3 mb-2 text-gray-800">Transfer Stok Out</h1>
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex inline">
                                <?= form_button('','<i class="fa fa-cart-plus"></i> Create Stock Out', [
                                    'class' => 'btn btn-md btn-primary m-2',
                                    'onclick' => "location.href=('".base_url('transferout/formtambah')."')"
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
                                                <th>Status Transfer</th>
                                                <th>Lokasi Tujuan</th>
                                                <th>Tanggal Kirim</th>
                                                <th>Tanggal Terima</th>
                                                <th>Nama Supir</th>
                                                <th>Ditransfer Oleh</th>
                                                <th>Di Terima Oleh</th>
                                                <th>Keterangan</th>
                                                <th>Jenis Kendaraan</th>
                                                <th>Nomor Rangka</th>
                                                <th>Nomor Mesin</th>
                                                <th>Tahun Kendaraan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $nomor = 1;
                                                foreach($tampilstok as $row ):
                                            ?>

                                            <tr>
                                                <td><?= $nomor++; ?></td>
                                                <td><?= $row['nobukti']; ?></td>
                                                <td><?= $row['statustransfer']; ?></td>
                                                <td><?= $row['lokasitujuan']; ?></td>
                                                <td><?= $row['tglkirim']; ?></td>
                                                <td><?= $row['tglterima']; ?></td>
                                                <td><?= $row['namasupir']; ?></td>
                                                <td><?= $row['ditransferoleh']; ?></td>
                                                <td><?= $row['diterimaoleh']; ?></td>
                                                <td><?= $row['keterangan']; ?></td>
                                                <td><?= $row['jenisstok']; ?></td>
                                                <td><?= $row['norangka']; ?></td>
                                                <td><?= $row['nomesin']; ?></td>
                                                <td><?= $row['tahunkendaraan']; ?></td>  
                                            </tr>
                                            <?php endforeach;?>
                                            
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
    
>>>>>>> 737767fa902ca836b8ddea7ef1189958697d4a30
<?php $this->endSection(); ?>