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
                        <h1 class="h3 mb-2 text-gray-800">Form Edit Data</h1>
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <?= form_button('','<i class="fa fa-arrow-left"></i> Kembali', [
                                    'class' => 'btn btn-md btn-warning m-2',
                                    'onclick' => "location.href=('".base_url('stokbarang')."')"
                                ]) ?>
                            </div>
                            <div class="card-body col-md-6 justify-content-center">
                                <?= form_open('stokbarang/updatedata','',[
                                    'kodestok' => $kodestok
                                ]) ?>
                                
                                <div class="form-group">
                                    <label for="jenisstok">Jenis Stok</label>
                                    <?= form_input('jenisstok',$jenisstok,[
                                        'class' => 'form-control',
                                        'id' => 'jenisstok',
                                        'autofocus' => true
                                    ]);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <label for="statusstok">Status Stok</label>
                                    <?= form_input('statusstok',$statusstok,[
                                        'class' => 'form-control',
                                        'id' => 'statusstok',
                                        'autofocus' => true
                                    ]);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <label for="lokasi">Lokasi</label>
                                    <?= form_input('lokasi',$lokasi,[
                                        'class' => 'form-control',
                                        'id' => 'lokasi'
                                    ]);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <label for="keterangan">Keterangan</label>
                                    <?= form_input('keterangan',$keterangan,[
                                        'class' => 'form-control',
                                        'id' => 'keterangan'
                                    ]);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <label for="ispublish">Apakah publish?</label>
                                    <?= form_input('ispublish',$ispublish,[
                                        'class' => 'form-control',
                                        'id' => 'ispublish'
                                    ]);
                                    ?>
                                </div>
                                
                                
                                <div class="form-group">
                                    <label for="terjual">Apakah terjual?</label>
                                    <?= form_input('terjual',$terjual,[
                                        'class' => 'form-control',
                                        'id' => 'terjual'
                                    ]);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <?= form_submit('','Update',[
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
                        <h1 class="h3 mb-2 text-gray-800">Form Edit Data</h1>
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <?= form_button('','<i class="fa fa-arrow-left"></i> Kembali', [
                                    'class' => 'btn btn-md btn-warning m-2',
                                    'onclick' => "location.href=('".base_url('stokbarang')."')"
                                ]) ?>
                            </div>
                            <div class="card-body col-md-6 justify-content-center">
                                <?= form_open('stokbarang/updatedata','',[
                                    'kodestok' => $kodestok
                                ]) ?>
                                
                                <div class="form-group">
                                    <label for="jenisstok">Jenis Stok</label>
                                    <?= form_input('jenisstok',$jenisstok,[
                                        'class' => 'form-control',
                                        'id' => 'jenisstok',
                                        'autofocus' => true
                                    ]);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <label for="statusstok">Status Stok</label>
                                    <?= form_input('statusstok',$statusstok,[
                                        'class' => 'form-control',
                                        'id' => 'statusstok',
                                        'autofocus' => true
                                    ]);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <label for="lokasi">Lokasi</label>
                                    <?= form_input('lokasi',$lokasi,[
                                        'class' => 'form-control',
                                        'id' => 'lokasi'
                                    ]);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <label for="keterangan">Keterangan</label>
                                    <?= form_input('keterangan',$keterangan,[
                                        'class' => 'form-control',
                                        'id' => 'keterangan'
                                    ]);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <label for="ispublish">Apakah publish?</label>
                                    <?= form_input('ispublish',$ispublish,[
                                        'class' => 'form-control',
                                        'id' => 'ispublish'
                                    ]);
                                    ?>
                                </div>
                                
                                
                                <div class="form-group">
                                    <label for="terjual">Apakah terjual?</label>
                                    <?= form_input('terjual',$terjual,[
                                        'class' => 'form-control',
                                        'id' => 'terjual'
                                    ]);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <?= form_submit('','Update',[
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
>>>>>>> 737767fa902ca836b8ddea7ef1189958697d4a30
<?php $this->endSection(); ?>