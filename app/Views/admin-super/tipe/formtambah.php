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
                        <h1 class="h3 mb-2 text-gray-800">Form Tambah Tipe Kendaraan</h1>
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <?= form_button('','<i class="fa fa-arrow-left"></i> Kembali', [
                                    'class' => 'btn btn-md btn-warning m-2',
                                    'onclick' => "location.href=('".base_url('tipekendaraan')."')"
                                ]) ?>
                            </div>
                            <div class="card-body col-md-6 justify-content-center">
                                <?= form_open('tipekendaraan/simpandata') ?>
                                <?php 
                                    $nomor = 1;
                                    foreach($tampiltipe as $row ):
                                        $kode = $row['kodetipe'];
                                        $noUrut = (int) substr($kode, 3, 3);
                                        $noUrut++;
                                        $char = "TP";
                                        $newID = $char . sprintf("%03s", $noUrut);
                                ?>
                                <div class="form-group">
                                    <input type="hidden" class="form-control" id="kodetipe" autofocus name="kodetipe" value="<?= $newID; ?>" placeholder="Isikan kode stok">
                                </div>
                                <?php endforeach;?>
                                <div class="form-group">
                                    <label for="merks">Merk</label>
                                    <?= form_input('merks','',[
                                        'class' => 'form-control',
                                        'id' => 'merks',
                                        'autofocus' => true,
                                        'placeholder' => 'Isikan Merk..'
                                    ]);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <label for="tipekendaraan">Tipe Kendaraan</label>
                                    <?= form_input('tipekendaraan','',[
                                        'class' => 'form-control',
                                        'id' => 'tipekendaraan',
                                        'autofocus' => true,
                                        'placeholder' => 'Isikan Tipe Kendaraan..'
                                    ]);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <label for="subtipe">Sub Tipe</label>
                                    <?= form_input('subtipe','',[
                                        'class' => 'form-control',
                                        'id' => 'subtipe',
                                        'placeholder' => 'Isikan Sub Tipe Kendaraan..'
                                    ]);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <label for="transmisi">Transmisi</label>
                                    <select class="form-control" name="transmisi" id="transmisi">
                                        <option value="MANUAL">MANUAL</option>
                                        <option value="OTOMATIS">OTOMATIS KONVESIONAL</option>
                                        <option value="CVT">CONTINUOUS VARIABLE TRANSMISSION (CVT)</option>
                                        <option value="DCT">DUAL CLUTCH TRANSMISSION (DCT)</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="isdiscontinued">Apakah berkelanjutan?</label>
                                    <select class="form-control" name="isdiscontinued" id="isdiscontinued">
                                        <option value="1">YA</option>
                                        <option value="0">TIDAK</option>
                                    </select>
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