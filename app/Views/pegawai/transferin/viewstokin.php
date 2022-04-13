<?php

use Faker\Provider\Base;

 $this->extend('layouts/pegawai/templates'); ?>
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
                                                <th>Aksi</th>
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
                                                <th>Tahun</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $nomor = 1;
                                                foreach($tampilstok as $row ):
                                                    $kodestok = $row['kodestok'];
                                            ?>

                                            <tr>
                                                <td class="text-center">
                                                    <a href="" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modal<?php echo $row['nobukti']; ?>">
                                                    <i class="fa fa-exclamation-circle" aria-hidden="true"></i> Confirm
                                                    </a>
                                                </td>
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
                                                <!-- modal confirm stok masuk -->
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
                                                                ?>
                                                                <form action="<?= base_url('pegawai/updateTransferStok') ?>">
                                                                    <input type="hidden" name="nobukti" value="<?= $row['nobukti']; ?>">
                                                                    <input type="hidden" name="diterimaoleh" value="<?= session()->get('username'); ?>">
                                                                    <input type="hidden" name="statustransfer" value="READY">
 
                                                                    <label class="text-monospace text-dark" for="">Yakin mau Konfirmasi Stok dengan kode <?= $row['nobukti']; ?>?</label>
                                                                    <div class="modal-footer">
                                                                        <button type="submit" class="btn btn-primary align-right">Accept</button>
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