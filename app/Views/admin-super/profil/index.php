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
                <style>
                    tr{
                        vertical-align: middle;
                        color: black;
                    }
                    th{
                        text-align: left;
                    }
                </style>
                <!-- Begin Page Content -->
                <div class="card-header py-3">
                    <?= form_button('','<i aria-hidden="true" role="presentation" class="fa fa-user-md q-icon notranslate"> </i> Tambah Admin', [
                        'class' => 'btn btn-md btn-primary m-2',
                        'onclick' => "location.href=('".base_url('datauser/formtambah')."')"
                    ]) ?>
                    <?= form_button('','<i aria-hidden="true" role="presentation" class="fa fa-user q-icon notranslate"> </i> Tambah Pegawai', [
                        'class' => 'btn btn-md btn-primary m-2',
                        'onclick' => "location.href=('".base_url('datauser/formtambah')."')"
                    ]) ?>
                </div>
                <div class="row justify-content-center">
                    
                    <div class="col-xl-10 col-lg-12 col-md-9">
                        <div class="card o-hidden border-0 shadow-lg my-2">
                            <div class="card-body p-0">
                                
                                <!-- Nested Row within Card Body -->
                                <div class="p-5">
                                    
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Profile User Log in</h1>
                                    </div>
                                    <div class="text-center">
                                        <img style="width: 100px; vertical-align: middle;" class="img-profile rounded-circle" src="<?= base_url('assets/img/undraw_profile.svg'); ?>">
                                    </div>
                                    
                                    <div class="text-center">
                                        <?= session()->get('username'); ?>
                                    </div>
                                    <div class="text-center">
                                        <div class="row justify-content-center">
                                            <div class="col col-sm-6 ">
                                                <table class="table table-stripped table-lg">
                                                    <tbody>
                                                        <tr>
                                                            <th>User ID</th>
                                                            <td>:</td>
                                                            <td><?= session()->get('userid'); ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Nama</th>
                                                            <td>:</td>
                                                            <td><?= session()->get('username'); ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Cabang</th>
                                                            <td>:</td>
                                                            <td><?= session()->get('cabang'); ?></td>
                                                        </tr>
                                                        <tr class="vertical-align">
                                                            <th>Option</th>
                                                            <td>:</td>
                                                            <td>
                                                                <button class="btn btn-md btn-primary" title="Edit data" onclick="edit('<?= session()->get('userid'); ?>')">Edit</button>
                                                                <button class="btn btn-md btn-warning" title="Edit password" onclick="changepass('<?= session()->get('userid'); ?>')">Change Password</button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- /.container-fluid -->
                <script>
                    function edit(userid) {
                        window.location=('/profil/formedit/'+userid);
                    }
                    function changepass(userid) {
                        window.location=('/profil/formchange/'+userid);
                    }

                    
                </script>
                

            </div>
            <!-- End of Main Content -->
            
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
<?php $this->endSection(); ?>