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
                                    'onclick' => "location.href=('".base_url('tipekendaraan')."')"
                                ]) ?>
                            </div>
                            <div class="card-body col-md-6 justify-content-center">
                                <?= form_open('tipekendaraan/updatedata','',[
                                    'kodetipe' => $kodetipe
                                ]) ?>
                                
                                <div class="form-group">
                                    <label for="merks">Jenis Stok</label>
                                    <?= form_input('merks',$merks,[
                                        'class' => 'form-control',
                                        'id' => 'merks',
                                        'autofocus' => true
                                    ]);
                                    ?>
                                </div>
                                
                                <div class="form-group">
                                    <label for="tipekendaraan">tipekendaraan</label>
                                    <?= form_input('tipekendaraan',$tipekendaraan,[
                                        'class' => 'form-control',
                                        'id' => 'tipekendaraan'
                                    ]);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <label for="subtipe">subtipe</label>
                                    <?= form_input('subtipe',$subtipe,[
                                        'class' => 'form-control',
                                        'id' => 'subtipe'
                                    ]);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <label for="transmisi">Transmisi</label>
                                    <select class="form-control" name="transmisi" id="transmisi">
                                        <option value="<?= $transmisi; ?>"><?= $transmisi; ?></option>
                                        <option value="MANUAL">MANUAL</option>
                                        <option value="AUTOMATIC">AUTOMATIC</option>
                                        <option value="AMT">AUTOMATED MANUAL TRANSMISSION (AMT)</option>
                                        <option value="CVT">CONTINUOUS VARIABLE TRANSMISSION (CVT)</option>
                                        <option value="DCT">DUAL CLUTCH TRANSMISSION (DCT)</option>
                                    </select>
                                </div>
                                
                                
                                <div class="form-group">
                                    <label for="isdiscontinued">Apakah isdiscontinued?</label>
                                    <select class="form-control" name="isdiscontinued" id="isdiscontinued">
                                        <option value="<?= $isdiscontinued; ?>">
                                        <?php 
                                        if ($isdiscontinued ==1) {
                                            echo "YA";
                                        }else{
                                            echo "TIDAK";
                                        }
                                        
                                        ?>
                                        
                                    </option>
                                        <option value="1">YA</option>
                                        <option value="0">TIDAK</option>
                                    </select>
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
<?php $this->endSection(); ?>