<?php $this->extend('layouts/pegawai/templates'); ?>
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
                        <h1 class="h3 mb-2 text-gray-800">Form Tambah Tipe Kendaraan</h1>
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            
                            <div class="card-body py-3">
                                <?= form_button('','<i class="fa fa-arrow-left"></i> Kembali', [
                                    'class' => 'btn btn-md btn-warning m-2',
                                    'onclick' => "location.href=('".base_url('pegawai/stokout')."')"
                                ]) ?>

                            </div>
                            <div class="card-body col-md-6 justify-content-center">
                                <?= form_open('pegawai/simpandata_out') ?>
                                <div class="form-group">
                                    <label for="kodecabang">Kode Stok</label>
                                    <select class="form-control" name="kodestok" id="kodestok">
                                        <?php 
                                        foreach ($kodestok as $stok):
                                        ?>
                                        <option class="form-control" value="<?= $stok['kodestok']; ?>"><?= $stok['kodestok']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="namacabang">Nomor SPK</label>
                                    <input type="text" class="form-control" name="nospk" placeholder="Isikan Nomor SPK...">
                                </div>
                                <div class="form-group">
                                    <label for="namacabang">Nama Sales</label>
                                    <input type="text" class="form-control" name="namasales" placeholder="Isikan Nama Sales...">
                                </div>
                                <div class="form-group">
                                    <label for="namacabang">Nama Konsumen</label>
                                    <input type="text" class="form-control" name="namakonsumen" placeholder="Isikan Nama Konsumen...">
                                </div>
                                <div class="form-group">
                                    <label for="startDate">Tanggal Order</label>
                                    <input id="datepicker" class="form-control" type="date" name="tgldo"/>
                                    <span id="startDateSelected"></span>
                                </div>
                                <div class="form-group">
                                    <?= form_submit('','Kirim',[
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