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
                        <h1 class="h3 mb-2 text-gray-800">Form Ubah Password</h1>
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <?= form_button('','<i class="fa fa-arrow-left"></i> Kembali', [
                                    'class' => 'btn btn-md btn-warning m-2',
                                    'onclick' => "location.href=('".base_url('admin/profil_admin')."')"
                                ]) ?>
                            </div>
                            <div class="card-body col-md-6 justify-content-center">
                                <?= form_open('admin/updatepass','',[
                                    'userid' => $userid
                                ]) ?>
                                
                                <div class="form-group">
                                    <label for="namalengkap">Username</label>
                                    <?= form_input('username',$username,[
                                        'class' => 'form-control',
                                        'id' => 'username',
                                        'disabled' => true,
                                        'autofocus' => true
                                    ]);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <label for="pass">Ubah Password</label>
                                    <?= form_input('pass','',[
                                        'class' => 'form-control',
                                        'id' => 'pass',
                                        'autofocus' => true
                                    ]);
                                    ?>
                                </div>
                                
                                
                                <div class="form-group">
                                    <?= form_submit('','Ubah',[
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