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
                        <h1 class="h3 mb-2 text-gray-800">Form Tambah Data</h1>
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <?= form_button('','<i class="fa fa-arrow-left"></i> Kembali', [
                                    'class' => 'btn btn-md btn-warning m-2',
                                    'onclick' => "location.href=('".base_url('stokbarang')."')"
                                ]) ?>
                            </div>
                            
                            <div class="card-body col-md-12 justify-content-center">
                                <?= form_open('stokbarang/simpandata') ?>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="jenisstok">Jenis Kendaraan</label>
                                            <select name="jenisstok" id="lokasi" class="form-control">
                                                <?php 
                                                foreach($tampiltipe as $tipe ):
                                                ?>
                                                <option value="<?= $tipe['merks']; ?>"><?= $tipe['merks'].' - '.$tipe['tipekendaraan']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="kodetipe">Tipe Kendaraan</label>
                                            <select class="form-control" name="kodetipe" for="kodetipe" id="kodetipe">
                                                <?php foreach ($tampiltipe as $tipe):?>
                                                <option class="form-control" value="<?= $tipe['kodetipe']; ?>"><?= $tipe['subtipe']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="statusstok">Status Stok</label>
                                            <select name="statusstok" id="statusstok" class="form-control">
                                                <option value="READY">READY</option>
                                                <option value="DRAFT">DRAFT</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="jenisstok">Jenis Stok</label>
                                            <select name="jenisstok" id="jenisstok" class="form-control">
                                                <option value="DISPLAY">DISPLAY</option>
                                                <option value="STOCK">STOCK</option>
                                                <option value="TEST DRIVE">TEST DRIVE</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="lokasi">Lokasi Cabang</label>
                                            <select name="lokasi" id="lokasi" class="form-control">
                                                <?php 
                                                foreach($tampilcabang as $cabang ):
                                                ?>
                                                <option value="<?= $cabang['namacabang']; ?>"><?= $cabang['namacabang']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="keterangan">Keterangan</label>
                                            <input type="text" name="keterangan" id="keterangan" class="form-control" placeholder="Isikan Keterangan...">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="ispublish">Apakah publish?</label>
                                            <select class="form-control" name="ispublish" id="ispublish">
                                                <option value="1">YA</option>
                                                <option value="0">TIDAK</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="startDate">Tanggal Order</label>
                                            <input id="datepicker" class="form-control" type="date" name="tgldo"/>
                                            <span id="startDateSelected"></span>
                                        </div>
                                        <!-- generate otomatis kode stok -->
                                        <?php 
                                            $nomor = 1;
                                            foreach($tampilkode as $row ):
                                                $kode = $row['kodestok'];
                                                $noUrut = (int) substr($kode, 3, 3);
                                                $noUrut++;
                                                $char = "STK";
                                                $newID = $char . sprintf("%03s", $noUrut);
                                        ?>
                                        <div class="form-group">
                                            <input type="hidden" class="form-control" id="kodestok" autofocus name="kodestok" value="<?= $newID; ?>" placeholder="Isikan kode stok">
                                        </div>
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="col-6">
                                        
                                        <div class="form-group">
                                            <label for="norangka">No Rangka</label>
                                            <?= form_input('norangka','',[
                                                'class' => 'form-control',
                                                'id' => 'norangka',
                                                'autofocus' => true,
                                                'placeholder' => 'Isikan Nomer Rangka..'
                                            ]);
                                            ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="nomesin">Nomor Mesin</label>
                                            <?= form_input('nomesin','',[
                                                'class' => 'form-control',
                                                'id' => 'nomesin',
                                                'autofocus' => true,
                                                'placeholder' => 'Isikan Nomer Mesin..'
                                            ]);
                                            ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="tahunkendaraan">Tahun Kendaraan</label>
                                            <?= form_input('tahunkendaraan','',[
                                                'class' => 'form-control',
                                                'id' => 'tahunkendaraan',
                                                'placeholder' => 'Silahkan masukkan tahun kendaraan...'
                                            ]);
                                            ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="warna">Warna Kendaraan</label>
                                            <?= form_input('warna','',[
                                                'class' => 'form-control',
                                                'id' => 'warna',
                                                'placeholder' => 'Silahkan isi warna kendaraan'
                                            ]);
                                            ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="kodebuku">Kode Buku</label>
                                            <input type="text" class="form-control" id="kodebuku" name="kodebuku" placeholder="Kode Buku">
                                        </div>
                                        <div class="form-group">
                                            <label for="nobuku">Nomor Buku</label>
                                            <input type="text" class="form-control" id="nobuku" name="nobuku" placeholder="Nomor Buku">
                                        </div>
                                        <div class="form-group">
                                            <label for="nodo">Nomer Drop Order</label>
                                            <input type="text" class="form-control" id="nodo" name="nodo" placeholder="Nomor Drop Order">
                                        </div>
                                        <div class="form-group">
                                            <input type="hidden" name="terjual" value="0">
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                            <?= form_submit('','Tambah Stok',[
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