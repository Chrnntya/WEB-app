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
                        <h1 class="h3 mb-2 text-gray-800">Form Pengiriman Kendaraan Pameran</h1>
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            
                            <div class="card-body py-3">
                                <?= form_button('','<i class="fa fa-arrow-left"></i> Kembali', [
                                    'class' => 'btn btn-md btn-warning m-2',
                                    'onclick' => "location.href=('".base_url('pameran')."')"
                                ]) ?>

                            </div>
                            <div class="card-body col-md-6 justify-content-center">
                                <?= form_open('pameran/simpandata') ?>
                                <?php 
                                    $nomor = 1;
                                    foreach($tampilkode as $row ):
                                        $kode = $row['nobukti'];
                                        $noUrut = (int) substr($kode, 3, 3);
                                        $noUrut++;
                                        $char = "SHW";
                                        $newID = $char . sprintf("%03s", $noUrut);
                                ?>
                                <div class="form-group">
                                    <input type="hidden" class="form-control" id="nobukti" autofocus name="nobukti" value="<?= $newID; ?>" placeholder="Isikan kode stok">
                                </div>
                                <?php endforeach; ?>
                                <div class="form-group">
                                    <label class="label form-label" for="cabang">Cabang Pameran</label>
                                    <select class="form-control" name="cabang" id="cabang">
                                        <?php foreach ($tampilcabang as $cabang):?>
                                        <option class="form-control" value="<?= $cabang['namacabang']; ?>"><?= $cabang['namacabang']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="label form-label" for="nobukti">Jenis Kendaraan</label>
                                    <select class="form-control" name="kodestok" id="kodestok">
                                        <?php foreach ($tampiltipe as $data):?>
                                        <option class="form-control" value="<?= $data['kodestok']; ?>"><?= $data['merks'].' - '.$data['tipekendaraan'].' - '.$data['subtipe']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="row form-group">
                                    <div class="col-lg-6 col-sm-6">
                                        <label for="startDate">Mulai Pameran</label>
                                        <input id="startDate" class="form-control" type="date" name="tglawalpameran"/>
                                        <span id="startDateSelected"></span>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <label for="endDate">Selesai Pameran</label>
                                        <input id="endDate" class="form-control" type="date" name="tglakhirpameran"/>
                                        <span id="endDateSelected"></span>
                                    </div>
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