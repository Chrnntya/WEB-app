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
                            
                            <div class="card-body py-3">
                                <?= form_button('','<i class="fa fa-arrow-left"></i> Kembali', [
                                    'class' => 'btn btn-md btn-warning m-2',
                                    'onclick' => "location.href=('".base_url('stokin')."')"
                                ]) ?>

                            </div>
                            <div class="card-body col-md-6 justify-content-center">
                                <?= form_open('stokin/simpandata') ?>

                                <?php 
                                    $nomor = 1;
                                    foreach($tampilkode as $row ):
                                        $kode = $row['kodestok'];
                                        $noUrut = (int) substr($kode, 3, 3);
                                        $noUrut++;
                                        $char = "STK";
                                        $newID = $char . sprintf("%03s", $noUrut);
                                ?>
                                <div class="form-group">
                                    <input type="hidden" class="form-control" id="kodestok" autofocus name="kodestok" value="<?= $newID; ?>" placeholder="Isikan kode stok">
                                </div>
                                <?php endforeach; ?>
                                <div class="form-group">
                                    <label for="kodebuku">Kode Buku</label>
                                    <input type="text" class="form-control" id="kodebuku" name="kodebuku" placeholder="Kode Buku">
                                </div>
                                <div class="form-group">
                                    <label for="nobuku">Nomor Buku</label>
                                    <input type="text" class="form-control" id="nobuku" name="nobuku" placeholder="Nomor Buku">
                                </div>
                                <div class="form-group">
                                    <label for="nodo">Nomer Drop Order</label>
                                    <input type="text" class="form-control" id="nodo" name="nodo" placeholder="Nomor Drop Order">
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-6 col-sm-6">
                                        <label for="startDate">Tanggal Order</label>
                                        <input id="datepicker" class="form-control" type="date" name="tgldo"/>
                                        <span id="startDateSelected"></span>
                                    </div>
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
                        <script>
                            $('.datepicker').datepicker({
                            format: 'mm-dd-yyyy',
                            startDate: '-3d'
                            })
                        </script>

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