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
                        <h1 class="h3 mb-2 text-gray-800">Form Tambah Data Kendaraan</h1>
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <?= form_button('','<i class="fa fa-arrow-left"></i> Kembali', [
                                    'class' => 'btn btn-md btn-warning m-2',
                                    'onclick' => "location.href=('".base_url('stokbarang')."')"
                                ]) ?>
                            </div>
                            <div class="card-body col-md-6 justify-content-center">
                                <?= form_open('datakendaraan/simpandata') ?>
                                <div class="form-group">
                                    <label for="kodestok">Jenis Kendaraan</label>
                                    <select class="form-control" name="kodestok" for="kodestok" id="kodestok">
                                        <?php foreach ($tampildata as $stok):?>
                                        <option class="form-control" value="<?= $stok['kodestok']; ?>"><?= $stok['jenisstok']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="kodetipe">Tipe Kendaraan</label>
                                    <select class="form-control" name="kodetipe" for="kodetipe" id="kodetipe">
                                        <?php foreach ($tampiltipe as $tipe):?>
                                        <option class="form-control" value="<?= $tipe['kodetipe']; ?>"><?= $tipe['merks']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="norangka">No Rangka</label>
                                    <?= form_input('norangka','',[
                                        'class' => 'form-control',
                                        'id' => 'norangka',
                                        'autofocus' => true,
                                        'placeholder' => 'Isikan Nomer Rangka..'
                                    ]);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <label for="nomesin">Nomor Mesin</label>
                                    <?= form_input('nomesin','',[
                                        'class' => 'form-control',
                                        'id' => 'nomesin',
                                        'autofocus' => true,
                                        'placeholder' => 'Isikan Nomer Mesin..'
                                    ]);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <label for="tahunkendaraan">Tahun Kendaraan</label>
                                    <?= form_input('tahunkendaraan','',[
                                        'class' => 'form-control',
                                        'id' => 'tahunkendaraan',
                                        'placeholder' => 'Silahkan masukkan tahun kendaraan...'
                                    ]);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <label for="warna">Warna Kendaraan</label>
                                    <?= form_input('warna','',[
                                        'class' => 'form-control',
                                        'id' => 'warna',
                                        'placeholder' => 'Silahkan isi warna kendaraan'
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
<?php $this->endSection(); ?>