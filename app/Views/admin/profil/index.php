<?php $this->extend('layouts/admin/templates'); ?>
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
                        text-align: left;
                    }
                    th{
                        text-align: left;
                    }
                </style>
                <!-- Begin Page Content -->
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
                                                        <?php
                                                            $no=0;
                                                            foreach ($tampildata as $data) {
                                                                $no++;
                                                        ?>
                                                        <tr>
                                                            
                                                            <th>User ID</th>
                                                            <td>:</td>
                                                            <td><?= $data['userid'];?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Username</th>
                                                            <td>:</td>
                                                            <td><?= $data['username']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Nama Lengkap</th>
                                                            <td>:</td>
                                                            <td><?= $data['namalengkap']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Cabang</th>
                                                            <td>:</td>
                                                            <td><?= $data['cabang']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Email</th>
                                                            <td>:</td>
                                                            <td><?= $data['email']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Akses</th>
                                                            <td>:</td>
                                                            <td><?= $data['akses']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Tanggal Dibuat</th>
                                                            <td>:</td>
                                                            <td><?= $data['created_at']; ?></td>
                                                        </tr>
                                                        <?php } ?>
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
                        window.location=('/admin/formedit/'+userid);
                    }
                    function changepass(userid) {
                        window.location=('/admin/formchange/'+userid);
                    }

                    
                </script>
                

            </div>
            <!-- End of Main Content -->
            
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
<?php $this->endSection(); ?>