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
                        <h1 class="h3 mb-2 text-gray-800">Form Tambah User</h1>
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            
                            <div class="card-body py-3">
                                <?= form_button('','<i class="fa fa-arrow-left"></i> Kembali', [
                                    'class' => 'btn btn-md btn-warning m-2',
                                    'onclick' => "location.href=('".base_url('profil')."')"
                                ]) ?>

                            </div>
                            <div class="card-body col-md-6 justify-content-center">
                                <?= form_open('datauser/simpandata') ?>
                                <div class="form-group">
                                    <?php 
                                        $data  = date('smhYmd');
                                    ?>
                                    <input type="text" name="userid" value="<?= $data; ?>">
                                </div>
                                <div class="form-group">
                                    <?php 
                                        $session = $_SESSION['username'];
                                    ?>
                                    <input type="text" name="createdby" value="<?= $session; ?>">
                                </div>
                                <div class="form-group">
                                    <label class="label form-label" for="namalengkap">Username</label>
                                    <input type="text" name="username" id="username" class="form-control" placeholder="Isikan username" autofocus>
                                </div>
                                <div class="form-group">
                                    <label class="label form-label" for="namalengkap">Nama Lengkap</label>
                                    <input class="form-control" autofocus type="text" name="namalengkap" id="namalengkap" for="namalengkap" placeholder="Isikan nomer nama lengkap">
                                </div>
                                <div class="form-group">
                                    <label class="label form-label" for="email">Email</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Isikan email">
                                </div>
                                
                                <div class="form-group">
                                    <label class="label form-label" for="cabang">Cabang</label>
                                    <select name="cabang" id="cabang" class="form-control">
                                        <?php 
                                        foreach ($tampilcabang as $cabang) {
                                            
                                        
                                        ?>
                                        <option value="<?= $cabang['namacabang']; ?>"><?= $cabang['namacabang']; ?></option>
                                        <?php } ?>
                                    </select>

                                    
                                </div>
                                <div class="form-group">
                                    <label class="label form-label" for="akses">Akses</label>
                                    <select name="akses" id="akses" class="form-control">
                                        <option value="1">Super Admin</option>
                                        <option value="2">Admin</option>
                                        <option value="3">Pegawai</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="label form-label" for="isaktif">Aktif User</label>
                                    <select name="isaktif" id="isaktif" class="form-control">
                                        <option value="1">1</option>
                                        <option value="0">0</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label for="password">Password</label>
                                            <input type="password" name="pass" id="pass" class="form-control">
                                        </div>
                                        <div class="col">
                                            <label for="password">Validasi Password</label>
                                            <input type="password" name="pass_conf" id="pass_conf" class="form-control">
                                        </div>
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