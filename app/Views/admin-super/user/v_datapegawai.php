<?php $this->extend('layouts/super-admin/templates'); ?>
<?php $this->section('content'); ?>
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- /.container-fluid -->
                <div class="col-xl-12 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Data Pegawai</div>
                                        <div class="mb-2">
                                            
                                            
                                            
                                        </div>

                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        <table class="table table-responsive-md">
                                            <thead style="text-align: center; vertical-align: middle;">
                                                <tr>
                                                    <th><i>Profil</i></th>
                                                    <th><i>User ID</i></th>
                                                    <th><i>Username</i></th>
                                                    <th><i>Nama</i></th>
                                                    <th><i>Cabang</i></th>
                                                    <th><i>Jabatan</i></th>
                                                    <th><i>Created By</i></th>
                                                    <!-- <th colspan="2" rowspan="2" class="text-center"><i>Options</i></th> -->

                                                </tr>
                                            </thead>
                                            <tbody class="user" style="text-align: center; color: black; vertical-align: middle;">
                                            <?php
                                            $no=0;
                                            foreach ($tampil_pegawai as $data) {
                                                $no++;
                                            ?>
                                                <tr>
                                                    <td class="align-middle"><img style="width: 100px; vertical-align: middle;" class="img-profile rounded-circle" src="<?= base_url('assets/img/undraw_profile.svg') ?>"></td>
                                                    <td class="align-middle text-left"><?= $data->userid; ?></td>
                                                    <td class="align-middle"><?= $data->username; ?></td>
                                                    <td class="align-middle"><?= $data->namalengkap; ?></td>
                                                    <td class="align-middle"><?= $data->cabang; ?></td>
                                                    <td class="align-middle"><?= $data->akses; ?></td>
                                                    <td class="align-middle"><?= $data->createdby; ?></td>
                                                    

                                                    <!-- <td class="align-middle" style="color: blue;">
                                                        <button class="btn btn-md btn-primary" title="Edit data" onclick="edit('<?= $data->userid; ?>')">Edit</button>
                                                    </td>
                                                    <td class="align-middle" style="color: red;">
                                                        <button class="btn btn-sm btn-danger"  title="Hapus data" onclick="hapus_user('<?= $data->userid; ?>')">Hapus</button>
                                                    </td> -->
                                                    

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
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
    <script>
        function edit(userid) {
            window.location=('/profil/formedit/'+userid);
        }
        function hapus_user(userid) {
            pesan = confirm('Yakin akan hapus data?');
            if (pesan) {
                window.location=('/datauser/hapus_user/'+userid);
            }else{
                return false;
            }
        }
    </script>
<?php $this->endSection(); ?>