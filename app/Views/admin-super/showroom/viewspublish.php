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
                        <h1 class="h3 mb-2 text-gray-800">Form Tambah Data</h1>
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <?php 
                                if ($btn==2) {
                                    echo("<a class='btn btn-primary' href='".base_url('publish/index')."'>Belum Publish</a>");
                                }
                                elseif ($btn==1) {
                                    echo("<a class='btn btn-success' href='".base_url('publish/publish_view')."'>Sudah Publish</a>");
                                }
                                ?>
                
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col d-flex justify-content-center">
                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                <thead class="text-center">
                                                    <tr>
                                                        <th>Publish Unit</th>
                                                        <th>Merks</th>
                                                        <th>Tipe Kendaraan</th>
                                                        <th>Sub Tipe</th>
                                                        <th>Transmisi</th>
                                                        <th>No Rangka</th>
                                                        <th>No Mesin</th>
                                                        <th>Tahun</th>
                                                    </tr>
                                                </thead>
                                                
                                                <?= $title; ?>
                                                <tbody>
                                                    <?php 
                                                        $nomor = 1;
                                                        foreach($tampilpublish as $row):
                                                                            
                                                    ?>

                                                    <tr>
                                                        
                                                        <td class="text-center">
                                                            <a href="" class="btn btn-sm btn-warning" data-toggle="modal" data-target="<?php echo $btnpublish.$row['kodestok']; ?>">
                                                            <i class="fa fa-exclamation-circle" aria-hidden="true"></i> Confirm
                                                            </a>
                                                        </td>
                                                        <td><?= $row['merks']; ?></td>
                                                        <td><?= $row['tipekendaraan']; ?></td>
                                                        <td><?= $row['subtipe']; ?></td>
                                                        <td><?= $row['transmisi']; ?></td>
                                                        <td><?= $row['norangka']; ?></td>
                                                        <td><?= $row['nomesin']; ?></td>
                                                        <td><?= $row['tahunkendaraan']; ?></td>
                                                        <!-- modal confirm stok masuk -->
                                                        <!-- id setiap modal juga harus berbeda, cara membedakannya dengan menggunakan id_barang -->
                                                        <div class="modal fade" id="modal<?php echo $row['kodestok']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
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
                                                                        <form action="<?= base_url('publish/updateStok') ?>">
                                                                            <input type="hidden" name="kodestok" value="<?= $row['kodestok']; ?>">
                                                                            <input type="hidden" name="createdby" value="<?= session()->get('username'); ?>">
                                                                            <input type="hidden" name="ispublish" value="1">
        
                                                                            <label class="text-monospace text-dark" for="">Publish Stok dengan kode  <?= $row['kodestok']; ?>?</label>
                                                                            <div class="modal-footer">
                                                                                <button type="submit" class="btn btn-primary align-right">IYA</button>
                                                                                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i></button>
                                                                            </div>
                                                                        </form> 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- id setiap modal juga harus berbeda, cara membedakannya dengan menggunakan id_barang -->
                                                        <div class="modal fade" id="modal2<?php echo $row['kodestok']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
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
                                                                        <form action="<?= base_url('publish/updateStok') ?>">
                                                                            <input type="hidden" name="kodestok" value="<?= $row['kodestok']; ?>">
                                                                            <input type="hidden" name="createdby" value="<?= session()->get('username'); ?>">
                                                                            <input type="hidden" name="ispublish" value="0">
        
                                                                            <label class="text-monospace text-dark" for="">UnPublish Stok dengan kode <?= $row['kodestok']; ?>?</label>
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
                                                    <?php endforeach; ?>
                                                                    
                                                </tbody>
                                            </table>         
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.container-fluid -->
                    <!-- Modal Edit cabang-->
    
                

            </div>
            <!-- End of Main Content -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
<?php $this->endSection(); ?>