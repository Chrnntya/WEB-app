<!DOCTYPE html>
<html lang="en">

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <?= $this->include('/layouts/super-admin/sidebar') ?>
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <?= $this->include('/layouts/super-admin/topbar') ?>
                <!-- End of Topbar -->
                <!-- Begin Page Content -->
                <?= $this->renderSection('content') ?>
                <!-- /.container-fluid -->
                <div class="col-xl-9 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Super Admin</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        <table class="table table-responsive-md">
                                            <thead>
                                                <tr>
                                                    <th><i>Profil</i></th>
                                                    <th><i>Nama</i></th>
                                                    <th><i>Jabatan</i></th>
                                                    <th><i>Cabang</i></th>
                                                    <th colspan="2" rowspan="2" class="text-center"><i>Options</i></th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><img style="width: 100px;;" class="img-profile rounded-circle" src="<?= base_url('assets/img/undraw_profile.svg') ?>"></td>
                                                    <td>Dani Hartanto</td>
                                                    <td>Chief Executive Officer</td>
                                                    <td>Jakarta Barat</td>
                                                    <td style="color: red;">Delete</td>
                                                    <td style="color: blue;">Edit</td>

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
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Codelapan <?= Date('Y') ?> </span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
</body>

</html>