<?php $this->extend('layouts/super-admin/templates'); ?>
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
                                        Data User Login</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        <table class="table table-responsive-sm">
                                            <thead>
                                                <tr>
                                                    <th><i>Profil</i></th>
                                                    <th><i>Nama</i></th>
                                                    <th><i>User ID</i></th>
                                                    <th><i>Cabang</i></th>

                                                </tr>
                                            </thead>
                                            <tbody class="user">
                                                <tr>
                                                    <td><img style="width: 100px; vertical-align: middle;" class="img-profile rounded-circle" src="<?= base_url('assets/img/undraw_profile.svg') ?>"></td>
                                                    <td><?= session()->get('username'); ?></td>
                                                    <td><?= session()->get('userid'); ?></td>
                                                    <td><?= session()->get('cabang'); ?></td>
                                                    

                                                </tr>
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