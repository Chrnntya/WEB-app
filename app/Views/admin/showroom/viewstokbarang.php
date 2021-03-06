<?php $this->extend('layouts/admin/templates'); ?>
<?php $this->section('content'); ?>
    <style type="text/css">
        @media print {
            .noPrint{
                display:none;
            }
            .Print{
                display: flex;
            }
        }
        table{
            font-size: 14px;
        }
    </style>
    <!-- Page Wrapper -->
    <div id="wrapper" class="noPrint">
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- /.container-fluid -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid">
                        <h1 class="h3 mb-2 text-gray-800">Stok Unit </h1>
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header inline py-3 noPrint">
                                <!-- Page Heading -->
                                
                                <?php 
                                echo ("<br>");
                                echo("<button class='btn btn-secondary' onclick='window.print()''><i class='fa fa-print'></i></button>");
                                ?>
                            </div>
                            <div class="card-body Print">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead class="text-center">
                                            <tr>
                                                <th>No</th>
                                                <th>Kode</th>
                                                <th>Jenis</th>
                                                <th>Status</th>
                                                <th>Lokasi</th>
                                                <th>Keterangan</th>
                                                <th>Publish</th>
                                                <th>Terjual</th>
                                               
                                            </tr>
                                        </thead>
                                        <tfoot class="text-center">
                                            <tr>
                                                <th>No</th>
                                                <th>Kode</th>
                                                <th>Jenis</th>
                                                <th>Status</th>
                                                <th>Lokasi</th>
                                                <th>Keterangan</th>
                                                <th>Publish</th>
                                                <th>Terjual</th>
                                                
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php 
                                                $nomor = 1;
                                                foreach($tampildata as $row):
                                            ?>

                                            <tr>
                                                <td><?= $nomor++; ?></td>
                                                <td><?= $row['kodestok']; ?></td>
                                                <td><?= $row['jenisstok']; ?></td>
                                                <td><?= $row['statusstok']; ?></td>
                                                <td><?= $row['lokasi']; ?></td>
                                                <td><?= $row['keterangan']; ?></td>
                                                <td class="text-center">
                                                    <?php 
                                                    if ($row['ispublish']==1) {
                                                        echo "Publish";
                                                    }else {
                                                        echo "Belum Publish";
                                                    }
                                                    ?>
                                                </td>
                                                <td class="text-center">
                                                    <?php  
                                                    if ($row['terjual']==1) {
                                                        echo "Terjual";
                                                    }else {
                                                        echo "Belum Terjual";
                                                    }
                                                    ?>
                                                </td>
                                                <!-- <td class="text-center">
                                                    <button class="btn btn-sm btn-warning"  title="Edit data" onclick="edit('<?= $row['kodestok'] ?>')">Edit</button>
                                                    <button class="btn btn-sm btn-danger"  title="Hapus data" onclick="hapus('<?= $row['kodestok'] ?>')">Hapus</button>
                                                </td> -->
                                            </tr>

                                            <?php endforeach; ?>
                                            
                                        </tbody>
                                    </table>
                                    <script>
                                        function edit(kodestok) {
                                            window.location=('/stokbarang/formedit/'+kodestok);
                                        }

                                        function hapus(kodestok) {
                                            pesan = confirm('Yakin akan hapus data?');
                                            if (pesan) {
                                                window.location=('/stokbarang/hapus/'+kodestok);
                                            }else{
                                                return false;
                                            }
                                            
                                        }
                                    </script>
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