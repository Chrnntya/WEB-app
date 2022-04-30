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
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Data Stok Pembelian</h6>
                                <?= form_button('','<i class="fa fa-plus-circle"></i> Penjualan Unit', [
                                    'class' => 'btn btn-md btn-primary m-2',
                                    'onclick' => "location.href=('".base_url('stokout/formtambah')."')"
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
                                                <th>Kode Stok</th>
                                                <th>Nomor SPK</th>
                                                <th>Nama Sales</th>
                                                <th>Nama Konsumen</th>
                                                <th>Tanggal DO</th>
                                                <th>Dibuat Oleh</th>
                                                
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
                                                <td><?= $row['nospk']; ?></td>
                                                <td><?= $row['namasales']; ?></td>
                                                <td><?= $row['namakonsumen']; ?></td>
                                                <td><?= $row['tgldo']; ?></td>
                                                <td><?= $row['createdby']; ?></td>   
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
    
<?php $this->endSection(); ?>