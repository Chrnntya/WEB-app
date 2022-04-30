<?php $this->extend('layouts/super-admin/templates'); ?>
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
                        <h1 class="h3 mb-2 text-gray-800">Form Edit Data</h1>
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <?= form_button('','<i class="fa fa-arrow-left"></i> Kembali', [
                                    'class' => 'btn btn-md btn-warning m-2',
                                    'onclick' => "location.href=('".base_url('stokin')."')"
                                ]) ?>
                            </div>
                            <div class="card-body col-md-6 justify-content-center">
                                <?= form_open('stokin/updatedata','',[
                                    'kodestok' => $kodestok
                                ]) ?>
                                
                                <div class="form-group">
                                    <div class="col-lg-6 col-sm-6">
                                        <label for="startDate">Tanggal Order</label>
                                        <input id="startDate" class="form-control" type="date" name="tgldatang"/>
                                        <span id="startDateSelected"></span>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <?= form_submit('','Update',[
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