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
                        <h1 class="h3 mb-2 text-gray-800">Form Tambah Data</h1>
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <?= form_button('','<i class="fa fa-arrow-left"></i> Kembali', [
                                    'class' => 'btn btn-md btn-warning m-2',
                                    'onclick' => "location.href=('".base_url('stokbarang')."')"
                                ]) ?>
                            </div>
                            <div class="card-body col-md-6 justify-content-center">
                                <?= form_open('stokbarang/simpandata') ?>
                                <div class="form-group">
                                    <label for="kodestok">Kode Stok</label>
                                    <?= form_input('kodestok','',[
                                        'class' => 'form-control',
                                        'id' => 'kodestok',
                                        'autofocus' => true,
                                        'placeholder' => 'Isikan Kode Stok..'
                                    ]);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <label for="jenisstok">Jenis Stok</label>
                                    <?= form_input('jenisstok','',[
                                        'class' => 'form-control',
                                        'id' => 'jenisstok',
                                        'autofocus' => true,
                                        'placeholder' => 'Isikan Jenis Stok..'
                                    ]);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <label for="statusstok">Status Stok</label>
                                    <?= form_input('statusstok','',[
                                        'class' => 'form-control',
                                        'id' => 'statusstok',
                                        'autofocus' => true,
                                        'placeholder' => 'Isikan Status Stok..'
                                    ]);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <label for="lokasi">Lokasi</label>
                                    <?= form_input('lokasi','',[
                                        'class' => 'form-control',
                                        'id' => 'lokasi',
                                        'placeholder' => 'Isikan Jenis Stok..'
                                    ]);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <label for="keterangan">Keterangan</label>
                                    <?= form_input('keterangan','',[
                                        'class' => 'form-control',
                                        'id' => 'keterangan',
                                        'placeholder' => 'Isikan Keterangan..'
                                    ]);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <label for="ispublish">Apakah publish?</label>
                                    <?= form_input('ispublish','',[
                                        'class' => 'form-control',
                                        'id' => 'ispublish',
                                        'placeholder' => 'Isikan 1 atau 0'
                                    ]);
                                    ?>
                                </div>
                                
                                
                                <div class="form-group">
                                    <label for="terjual">Apakah terjual?</label>
                                    <?= form_input('terjual','',[
                                        'class' => 'form-control',
                                        'id' => 'terjual',
                                        'placeholder' => 'Isikan 1 atau 0'
                                    ]);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <?= form_submit('','Simpan',[
                                        'class' => 'btn btn-md btn-success'
                                    ])

                                    ?>
                                </div>
                                <?= form_close(); ?>
                                
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
=======
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
                        <h1 class="h3 mb-2 text-gray-800">Form Tambah Data</h1>
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <?= form_button('','<i class="fa fa-arrow-left"></i> Kembali', [
                                    'class' => 'btn btn-md btn-warning m-2',
                                    'onclick' => "location.href=('".base_url('stokbarang')."')"
                                ]) ?>
                            </div>
                            <div class="card-body col-md-6 justify-content-center">
                                <?= form_open('stokbarang/simpandata') ?>
                                <div class="form-group">
                                    <label for="kodestok">Kode Stok</label>
                                    <?= form_input('kodestok','',[
                                        'class' => 'form-control',
                                        'id' => 'kodestok',
                                        'autofocus' => true,
                                        'placeholder' => 'Isikan Kode Stok..'
                                    ]);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <label for="jenisstok">Jenis Stok</label>
                                    <?= form_input('jenisstok','',[
                                        'class' => 'form-control',
                                        'id' => 'jenisstok',
                                        'autofocus' => true,
                                        'placeholder' => 'Isikan Jenis Stok..'
                                    ]);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <label for="statusstok">Status Stok</label>
                                    <?= form_input('statusstok','',[
                                        'class' => 'form-control',
                                        'id' => 'statusstok',
                                        'autofocus' => true,
                                        'placeholder' => 'Isikan Status Stok..'
                                    ]);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <label for="lokasi">Lokasi</label>
                                    <?= form_input('lokasi','',[
                                        'class' => 'form-control',
                                        'id' => 'lokasi',
                                        'placeholder' => 'Isikan Jenis Stok..'
                                    ]);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <label for="keterangan">Keterangan</label>
                                    <?= form_input('keterangan','',[
                                        'class' => 'form-control',
                                        'id' => 'keterangan',
                                        'placeholder' => 'Isikan Keterangan..'
                                    ]);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <label for="ispublish">Apakah publish?</label>
                                    <?= form_input('ispublish','',[
                                        'class' => 'form-control',
                                        'id' => 'ispublish',
                                        'placeholder' => 'Isikan 1 atau 0'
                                    ]);
                                    ?>
                                </div>
                                
                                
                                <div class="form-group">
                                    <label for="terjual">Apakah terjual?</label>
                                    <?= form_input('terjual','',[
                                        'class' => 'form-control',
                                        'id' => 'terjual',
                                        'placeholder' => 'Isikan 1 atau 0'
                                    ]);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <?= form_submit('','Simpan',[
                                        'class' => 'btn btn-md btn-success'
                                    ])

                                    ?>
                                </div>
                                <?= form_close(); ?>
                                
                            </div>
                        </div>

                    </div>
                    <!-- /.container-fluid -->
                    <!-- Modal Edit cabang-->
                    <form action="/cabang/update" method="post">
                        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Cabang</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <?php
                                    $tgl=date("d/m/Y h:i:s");
                                ?>
                                <div class="form-group">
                                    <label>Cabang</label>
                                    <input type="text" class="form-control namacabang" name="namacabang" placeholder="Product Name">
                                </div>
                                
                                <div class="form-group">
                                    <label>Created by</label>
                                    <input type="text" class="form-control createdby" name="createdby" placeholder="Product Price">
                                </div>

                            </div>
                            <div class="modal-footer">
                                
                                <input type="hidden" class="form-control createddate" name="createddate" value="<?= $tgl; ?>" placeholder="<?= $tgl; ?>">
                                <input type="hidden" name="kodecabang" class="product_id">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                            </div>
                        </div>
                        </div>
                    </form>
                    <!-- End Modal Edit cabang-->
                

            </div>
            <!-- End of Main Content -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
>>>>>>> 737767fa902ca836b8ddea7ef1189958697d4a30
<?php $this->endSection(); ?>