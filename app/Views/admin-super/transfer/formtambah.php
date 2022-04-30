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
                        <h1 class="h3 mb-2 text-gray-800">Form Pengiriman Kendaraan</h1>
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            
                            <div class="card-body py-3">
                                <?= form_button('','<i class="fa fa-arrow-left"></i> Kembali', [
                                    'class' => 'btn btn-md btn-warning m-2',
                                    'onclick' => "location.href=('".base_url('transfer')."')"
                                ]) ?>

                            </div>
                            <div class="card-body col-md-6 justify-content-center">
                                <?= form_open('transfer/simpandata') ?>
                                <div class="form-group">
                                    <label class="label form-label" for="nobukti">Jenis Kendaraan</label>
                                    <select class="form-control" name="kodestok" id="kodestok">
                                        <?php foreach ($tampildata as $stok):?>
                                        <option class="form-control" value="<?= $stok['kodestok']; ?>"><?= $stok['jenisstok']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="label form-label" for="nobukti">Nomer Bukti</label>
                                    <input class="form-control" autofocus type="text" name="nobukti" id="nobukti" for="nobukti" placeholder="Isikan nomer bukti">
                                </div>
                                <div class="form-group">
                                    <label class="label form-label" for="lokasitujuan">Lokasi Tujuan</label>
                                    <input type="text" class="form-control" name="lokasitujuan" id="lokasitujuan" placeholder="Isikan lokasi tujuan">
                                </div>
                                
                                <div class="form-group">
                                    <label class="label form-label" for="namasupir">Nama Supir</label>
                                    <input class="form-control" type="text" name="namasupir" id="namasupir" for="namasupir" placeholder="Isikan nama supir">
                                </div>
                                <div class="form-group">
                                    <label class="label form-label" for="keterangan">Keterangan</label>
                                    <input class="form-control" type="text" name="keterangan" id="keterangan" for="keterangan" placeholder="Isikan keterangan">
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