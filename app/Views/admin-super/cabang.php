<<<<<<< HEAD
<?php $this->extend('layouts/super-admin/templates'); ?>
<?php $this->section('content'); ?>
<div class="container">
    <h3>cabang Lists</h3>
    <button type="button" class="btn btn-success mb-2" data-toggle="modal" data-target="#addModal">Add New</button>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Kode Cabang</th>
                    <th>Nama Cabang</th>
                    <th>Created By</th>
                    <th>Created Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($tblcabang as $row):?>
                <tr>
                    <td><?= $row->kodecabang;?></td>
                    <td><?= $row->namacabang;?></td>
                    <td><?= $row->createdby;?></td>
                    <td><?= $row->createddate;?></td>
                    <td>
                        <button type="button" class="btn btn-info btn-sm btn-edit" data-toggle="modal" data-target="#editModal" data-id="<?= $row->kodecabang;?>" data-name="<?= $row->namacabang;?>" data-price="<?= $row->createdby;?>" data-category_id="<?= $row->createddate;?>">Edit</button>
                        <button type="button" class="btn btn-danger btn-sm btn-delete" data-toggle="modal" data-target="#deleteModal" data-kodecabang="<?= $row->kodecabang;?>">Hapus</button>
                    </td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>

    </div>
    
    <!-- Modal Add cabang-->
    <form action="/cabang/save" method="post">
        <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New cabang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php
                    $tgl=date("d/m/Y h:i:s");
                ?>
            
                <div class="form-group">
                    <label>Kode Cabang</label>
                    <input type="text" class="form-control addKode" name="kodecabang" value="">
                </div>
                
                <div class="form-group">
                    <label>Nama Cabang</label>
                    <input type="text" class="form-control" name="namacabang" placeholder="Nama cabang">
                </div>
                <div class="form-group">
                    <label>Created By</label>
                    <input type="text" class="form-control" name="createdby" placeholder="created by">
                </div>
                <input type="hidden" class="form-control" name="createddate" value="<?= $tgl; ?>" placeholder="<?= $tgl; ?>">

            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </div>
        </div>
        </div>
    </form>
    <!-- End Modal Add cabang-->

    <!-- Modal Edit cabang-->
    <form action="/cabang/update" method="post">
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Cabang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php
                    $tgl=date("d/m/Y h:i:s");
                ?>
                <div class="form-group">
                    <label>Cabang</label>
                    <input type="text" class="form-control namacabang" name="namacabang" placeholder="Product Name">
                </div>
                
                <div class="form-group">
                    <label>Created by</label>
                    <input type="text" class="form-control createdby" name="createdby" placeholder="Product Price">
                </div>

            </div>
            <div class="modal-footer">
                
                <input type="hidden" class="form-control createddate" name="createddate" value="<?= $tgl; ?>" placeholder="<?= $tgl; ?>">
                <input type="hidden" name="kodecabang" class="product_id">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
            </div>
        </div>
        </div>
    </form>
    <!-- End Modal Edit cabang-->

    <!-- Modal Delete cabang-->
    <form action="/cabang/delete" method="post">
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete cabang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            
               <h4>Anda yakin akan menghapus cabang?</h4>
            
            </div>
            <div class="modal-footer">
                <input type="hidden" name="kodecabang" class="cabangID">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                <button type="submit" class="btn btn-primary">Yes</button>
            </div>
            </div>
        </div>
        </div>
    </form>
    <!-- End Modal Delete cabang-->


<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function(){
        // get Edit Product
        $('.btn-edit').on('click',function(){
            // get data from button edit
            const id = $(this).data('id');
            const name = $(this).data('name');
            const price = $(this).data('price');
            const category = $(this).data('category_id');
            // Set data to Form Edit
            $('.kodecabang').val(id);
            $('.namacabang').val(name);
            $('.createdby').val(price);
            $('.createddate').val(category).trigger('change');
            // Call Modal Edit
            $('#editModal').modal('show');
        });

        // get Delete Product
        $('.btn-delete').on('click',function(){
            // get data from button edit
            const kodecabang = $(this).data('kodecabang');
            // Set data to Form Edit
            $('.cabangID').val(kodecabang);
            // Call Modal Delete
            $('#deleteModal').modal('show');
        });
        
    });
</script>
=======
<?php $this->extend('layouts/super-admin/templates'); ?>
<?php $this->section('content'); ?>
<div class="container">
    <h3>cabang Lists</h3>
    <button type="button" class="btn btn-success mb-2" data-toggle="modal" data-target="#addModal">Add New</button>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Kode Cabang</th>
                    <th>Nama Cabang</th>
                    <th>Created By</th>
                    <th>Created Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($tblcabang as $row):?>
                <tr>
                    <td><?= $row->kodecabang;?></td>
                    <td><?= $row->namacabang;?></td>
                    <td><?= $row->createdby;?></td>
                    <td><?= $row->createddate;?></td>
                    <td>
                        <button type="button" class="btn btn-info btn-sm btn-edit" data-toggle="modal" data-target="#editModal" data-id="<?= $row->kodecabang;?>" data-name="<?= $row->namacabang;?>" data-price="<?= $row->createdby;?>" data-category_id="<?= $row->createddate;?>">Edit</button>
                        <button type="button" class="btn btn-danger btn-sm btn-delete" data-toggle="modal" data-target="#deleteModal" data-kodecabang="<?= $row->kodecabang;?>">Hapus</button>
                    </td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>

    </div>
    
    <!-- Modal Add cabang-->
    <form action="/cabang/save" method="post">
        <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New cabang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php
                    $tgl=date("d/m/Y h:i:s");
                ?>
            
                <div class="form-group">
                    <label>Kode Cabang</label>
                    <input type="text" class="form-control addKode" name="kodecabang" value="">
                </div>
                
                <div class="form-group">
                    <label>Nama Cabang</label>
                    <input type="text" class="form-control" name="namacabang" placeholder="Nama cabang">
                </div>
                <div class="form-group">
                    <label>Created By</label>
                    <input type="text" class="form-control" name="createdby" placeholder="created by">
                </div>
                <input type="hidden" class="form-control" name="createddate" value="<?= $tgl; ?>" placeholder="<?= $tgl; ?>">

            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </div>
        </div>
        </div>
    </form>
    <!-- End Modal Add cabang-->

    <!-- Modal Edit cabang-->
    <form action="/cabang/update" method="post">
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Cabang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php
                    $tgl=date("d/m/Y h:i:s");
                ?>
                <div class="form-group">
                    <label>Cabang</label>
                    <input type="text" class="form-control namacabang" name="namacabang" placeholder="Product Name">
                </div>
                
                <div class="form-group">
                    <label>Created by</label>
                    <input type="text" class="form-control createdby" name="createdby" placeholder="Product Price">
                </div>

            </div>
            <div class="modal-footer">
                
                <input type="hidden" class="form-control createddate" name="createddate" value="<?= $tgl; ?>" placeholder="<?= $tgl; ?>">
                <input type="hidden" name="kodecabang" class="product_id">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
            </div>
        </div>
        </div>
    </form>
    <!-- End Modal Edit cabang-->

    <!-- Modal Delete cabang-->
    <form action="/cabang/delete" method="post">
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete cabang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            
               <h4>Anda yakin akan menghapus cabang?</h4>
            
            </div>
            <div class="modal-footer">
                <input type="hidden" name="kodecabang" class="cabangID">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                <button type="submit" class="btn btn-primary">Yes</button>
            </div>
            </div>
        </div>
        </div>
    </form>
    <!-- End Modal Delete cabang-->


<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function(){
        // get Edit Product
        $('.btn-edit').on('click',function(){
            // get data from button edit
            const id = $(this).data('id');
            const name = $(this).data('name');
            const price = $(this).data('price');
            const category = $(this).data('category_id');
            // Set data to Form Edit
            $('.kodecabang').val(id);
            $('.namacabang').val(name);
            $('.createdby').val(price);
            $('.createddate').val(category).trigger('change');
            // Call Modal Edit
            $('#editModal').modal('show');
        });

        // get Delete Product
        $('.btn-delete').on('click',function(){
            // get data from button edit
            const kodecabang = $(this).data('kodecabang');
            // Set data to Form Edit
            $('.cabangID').val(kodecabang);
            // Call Modal Delete
            $('#deleteModal').modal('show');
        });
        
    });
</script>
>>>>>>> 737767fa902ca836b8ddea7ef1189958697d4a30
<?php $this->endSection(); ?>