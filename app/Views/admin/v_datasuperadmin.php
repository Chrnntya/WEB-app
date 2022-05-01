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
                <div class="col-xl-9 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Data Super Admin</div>
                                        <div class="mb-2">
                                            <a href="#tambahdata">
                                                <button tabindex="0" type="button" role="button" class="border border-white q-btn q-btn-item non-selectable no-outline q-btn--standard q-btn--rectangle bg-primary text-white q-btn--actionable q-focusable q-hoverable q-btn--no-uppercase q-btn--wrap" style="font-size: 10px;">
                                                <span class="q-focus-helper">
                                                    <span class="q-btn__wrapper col row q-anchor--skip">
                                                        <span class="q-btn__content text-center col items-center q-anchor--skip justify-center row">
                                                            <i aria-hidden="true" role="img" class="fa fa-plus q-icon fa-2x notranslate"></i>
                                                        </span>
                                                    </span>
                                                </span>
                                            </button>
                                            </a> Tambah Data Super Admin
                                            
                                            
                                        </div>

                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        <table class="table table-responsive-md">
                                            <thead style="text-align: center; vertical-align: middle;">
                                                <tr>
                                                    <th><i>Profil</i></th>
                                                    <th><i>Nama</i></th>
                                                    <th><i>Jabatan</i></th>
                                                    <th><i>Cabang</i></th>
                                                    <th colspan="2" rowspan="2" class="text-center"><i>Options</i></th>

                                                </tr>
                                            </thead>
                                            <tbody class="user" style="text-align: center; color: black; vertical-align: middle;">
                                                <tr>
                                                    <td class="align-middle"><img style="width: 100px; vertical-align: middle;" class="img-profile rounded-circle" src="<?= base_url('assets/img/undraw_profile.svg') ?>"></td>
                                                    <td class="align-middle">Jhon White</td>
                                                    <td class="align-middle">Chief Executive Officer</td>
                                                    <td class="align-middle">Jakarta Barat</td>
                                                    <td class="align-middle" style="color: blue;">
                                                        <a href="#editdata">
                                                            <span >
                                                                        <i aria-hidden="true" role="img" class="fa fa-pencil-square-o q-icon fa-2x notranslate"></i>
                                                                    </span>
                                                        </a>
                                                    </td>
                                                    <td class="align-middle" style="color: red;">
                                                        <a href="#hapusdata">
                                                            <span>
                                                                        <i aria-hidden="true" style="color: red;" role="img" class="fa fa-trash q-icon fa-2x notranslate"></i>
                                                                    </span>
                                                        </a>
                                                    </td>
                                                    

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
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
<?php $this->endSection(); ?>