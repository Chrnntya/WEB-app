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
                        <h1 class="h3 mb-2 text-gray-800">Form Edit Profil</h1>
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <?= form_button('','<i class="fa fa-arrow-left"></i> Kembali', [
                                    'class' => 'btn btn-md btn-warning m-2',
                                    'onclick' => "location.href=('".base_url('profil')."')"
                                ]) ?>
                            </div>
                            <div class="card-body col-md-6 justify-content-center">
                                <?= form_open('datauser/updatedata','',[
                                    'userid' => $userid
                                ]) ?>
                                
                                <div class="form-group">
                                    <label for="namalengkap">Username</label>
                                    <?= form_input('username',$username,[
                                        'class' => 'form-control',
                                        'id' => 'username',
                                        'autofocus' => true
                                    ]);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <label for="namalengkap">Nama Lengkap</label>
                                    <?= form_input('namalengkap',$namalengkap,[
                                        'class' => 'form-control',
                                        'id' => 'namalengkap',
                                        'autofocus' => true
                                    ]);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <label for="cabang">Cabang</label>
                                    <?= form_input('cabang',$cabang,[
                                        'class' => 'form-control',
                                        'id' => 'cabang',
                                        'autofocus' => true
                                    ]);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <?= form_input('email',$email,[
                                        'class' => 'form-control',
                                        'id' => 'email',
                                        'autofocus' => true
                                    ]);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <label for="akses">Akses User<p style="font-size: 11px; color: black;">(Isikan: 1 untuk superadmin, 2 untuk admin, dan 3 untuk pegawai/user biasa)</p></label>
                                    <?= form_input('akses',$akses,[
                                        'class' => 'form-control',
                                        'id' => 'akses',
                                        'autofocus' => true
                                    ]);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <label for="isaktif">User Aktif<p style="font-size: 11px; color: black;">(Isikan: 1 untuk Aktif dan 0 untuk nonaktif)</p></label>
                                    <?= form_input('isaktif',$isaktif,[
                                        'class' => 'form-control',
                                        'id' => 'isaktif',
                                        'autofocus' => true
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
<?php $this->endSection(); ?>