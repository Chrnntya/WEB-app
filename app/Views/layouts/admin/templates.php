<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DashBoard</title>

    <!-- Custom fonts for this template-->
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <title>Super Admin</title>
    <!-- Custom fonts for this template-->
    <link href="<?= base_url() ?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <link href="<?= base_url() ?>/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/css/sb-admin-2.min.css') ?>" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion noPrint" id="accordionSidebar">
		    <!-- Sidebar - Brand -->
		    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin'); ?>">
		        <div class="sidebar-brand-icon rotate-n-15">
		            <i class="fas fa-briefcase"></i>
		        </div>
		        <div class="sidebar-brand-text mx-3">Vehicle Warehouse <sup>V1.0</sup></div>
		    </a>
		    <!-- Divider -->
		    <hr class="sidebar-divider my-0">
		    <!-- Nav Item - Dashboard -->
		    <li class="nav-item">
		        <a class="nav-link" href="<?= base_url('admin'); ?>">
		            <i class="fas fa-fw fa-tachometer-alt"></i>
		            <span>Dashboard</span></a>
		    </li>

		    <!-- Divider -->
		    <hr class="sidebar-divider">
		    <!-- Nav Item - Tables -->
		    <li class="nav-item">
		        <a class="nav-link" href="<?= base_url('admin/stokbarang'); ?>">
		            <i class="fas fa-cart-plus"></i>
		            <span>Stock Unit</span></a>
		    </li>
			<hr class="sidebar-divider">
		    <!-- Nav Item - Tables -->
		    <li class="nav-item">
		        <a class="nav-link" href="<?= base_url('admin/cabang'); ?>">
		            <i class="fas fa-cart-plus"></i>
		            <span>Cabang</span></a>
		    </li>
			
		    <hr class="sidebar-divider">
		    <!-- Nav Item - Pages Collapse Menu -->
		    <li class="nav-item">
		        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseStok" aria-expanded="true" aria-controls="collapseStok">
		            <i aria-hidden="true" role="presentation" class="fa fa-random q-icon notranslate"> </i>
		            <span>Stock Barang</span>
		        </a>
		        <div id="collapseStok" class="collapse" aria-labelledby="headingStok" data-parent="#accordionSidebar">
		            <div class="bg-white py-2 collapse-inner rounded">
		                <a class="collapse-item" href="<?= base_url('admin/stokin'); ?>">
		                    <i aria-hidden="true" role="presentation" class="fa fa-arrow-circle-down q-icon notranslate"> </i>
		                    Stock In
		                </a>
		                <a class="collapse-item" href="<?= base_url('admin/stokout'); ?>">
		                    <i aria-hidden="true" role="presentation" class="fa fa-arrow-circle-up q-icon notranslate"> </i>
		                    Stock Out
		                </a>
		                
		            </div>
		        </div>
		    </li> 	
		    <!-- Nav Item - Pages Collapse Menu -->
		    <li class="nav-item">
		        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseTwo">
		            <i class="fas fa-fw fa-cog"></i>
		            <span>Show Room</span>
		        </a>
		        <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
		            <div class="bg-white py-2 collapse-inner rounded">
		                <a class="collapse-item" href="<?= base_url('admin/pameran'); ?>">
		                    <i aria-hidden="true" role="presentation" class="fa fa-street-view q-icon notranslate">  </i>
		                    Pameran
		                </a>
		                <a class="collapse-item" href="<?= base_url('admin/publish'); ?>">
		                    <i aria-hidden="true" role="presentation" class="fa fa-eye q-icon notranslate">  </i>
		                    Publish
		                </a>
		            </div>
		        </div>
		    </li>
		    <!-- Nav Item - Pages Collapse Menu -->
		    <li class="nav-item">
		        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
		            <i aria-hidden="true" role="presentation" class="fa fa-user"> </i>
		            <span>Users</span>
		        </a>
		        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
		            <div class="bg-white py-2 collapse-inner rounded">
		                <a class="collapse-item" href="<?= base_url('admin/dataadmin'); ?>">
		                    <i aria-hidden="true" role="presentation" class="fa fa-user q-icon notranslate"> </i>
		                    Admin
		                </a>
		                <a class="collapse-item" href="<?= base_url('admin/datapegawai'); ?>">
		                    <i aria-hidden="true" role="presentation" class="fa fa-user-o q-icon notranslate"> </i>
		                    Pegawai
		                </a>
		            </div>
		        </div>
		    </li>
		    <!-- Divider -->
		    <hr class="sidebar-divider d-none d-md-block">
		    <!-- Sidebar Toggler (Sidebar) -->
		    <div class="text-center d-none d-md-inline">
		        <button class="rounded-circle border-0" id="sidebarToggle"></button>
		    </div>
		</ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
				        <div class="topbar-divider d-none d-sm-block"></div>
				        <!-- Nav Item - User Information -->
				        <li class="nav-item dropdown no-arrow">
				            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				                <span class="mr-2 d-none d-lg-inline text-gray-600 small"> </span>
				                <img class="img-profile rounded-circle" src="<?= base_url('assets/img/undraw_profile.svg') ?>">
				            </a>
				            <!-- Dropdown - User Information -->
				            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
				                <a class="dropdown-item" href="/admin/profil_admin">
				                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
				                                    Profile
				                                </a>
				                <a class="dropdown-item" href="<?= base_url('/login/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
				                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
				                    Logout
				                </a>
				            </div>
				        </li>
				    </ul>

                </nav>
                <!-- End of Topbar -->
                <?php $this->renderSection('content'); ?>

            <!-- Begin Page Content -->
       
            <!-- End of Main Content -->

            <!-- Footer -->
            <!-- Footer -->
            <footer class="sticky-footer bg-white fixed">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Vehicle Warehouse <?= Date('Y') ?> </span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= base_url('/login/logout'); ?>">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
	<script src="<?= base_url('/assets/vendor/jquery/jquery.min.js') ?>"></script>
	<script src="<?= base_url('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
	<script type="text/javascript" src="<?= base_url() ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>
	<!-- Core plugin JavaScript-->
	<script src="<?= base_url('/assets/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>
	<!-- Custom scripts for all pages-->
	<script src="<?= base_url('/assets/js/sb-admin-2.min.js') ?>"></script>
	<!-- Page level plugins -->
	<script src="<?= base_url('/assets/vendor/datatables/jquery.dataTables.min.js') ?>"></script>
	<script src="<?= base_url('/assets/vendor/datatables/dataTables.bootstrap4.min.js') ?>"></script>
	<script src="<?= base_url('/assets/js/demo/datatables-demo.js') ?>"></script>

</body>

</html>