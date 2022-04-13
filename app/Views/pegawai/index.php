<?php $this->extend('layouts/pegawai/templates'); ?>
<?php $this->section('content'); ?>
    <div id="wrapper">
        <!-- Sidebar -->
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                
                <!-- End of Topbar -->
                <!-- Begin Page Content -->
                
                <!-- /.container-fluid -->
                <div class="col-xl-12 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Pegawai</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        <table class="table table-responsive-sm">
                                            <thead>
                                                <tr class="text-center">
                                                    <th><i>Profil</i></th>
                                                    <th><i>User ID</i></th>
                                                    <th><i>Username</i></th>
                                                    <th><i>Nama Lengkap</i></th>
                                                    <th><i>Cabang</i></th>

                                                </tr>
                                            </thead>
                                            <tbody class="user text-center align-middle">
                                                <?php 
                                                foreach ($tampildata as $data) {
                                                    
                                                ?>
                                                <tr>
                                                    <td class="align-middle"><img style="width: 100px; vertical-align: middle;" class="img-profile rounded-circle" src="<?= base_url('assets/img/undraw_profile.svg') ?>"></td>
                                                    <td class="align-middle"><?= $data['userid']; ?></td>
                                                    <td class="align-middle"><?= $data['username'];?></td>
                                                    <td class="align-middle"><?= $data['namalengkap']; ?></td>
                                                    <td class="align-middle"><?= $data['cabang']; ?></td>
                                                    

                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                                <div class="col-auto">
                                    <i class="fas fa fa-4x"></i>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <!-- End of Main Content -->
            
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
<?php $this->endSection(); ?>