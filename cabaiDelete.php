<?php

    include 'config/koneksi.php';
    $id_jenis = $_GET['id_jenis'];
    $jeniscabai = mysql_query("select * from jeniscabai where id_jenis='$id_jenis'");
    
    while($row=  mysql_fetch_array($jeniscabai)){
?>

<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
            <h4 class="modal-title" id="myModalLabel">Delete Data Jenis-Jenis Cabai</h4>
        </div>
        <div class="modal-body">
            <form class="form-horizontal" action="cabaiDelete2.php" name="modal-popup" enctype="multipart/form-data" method="POST">
                
                    <div class="alert alert-danger">Apakah anda yakin ingin menghapus data ini ?</div>
                
                            <div class="form-group">
                                <label class="col-lg-3 control-label">ID Cabai</label>
                                    <div class="col-lg-5">
                                        <input style="width: 200px;"  class="form-control" type="text" name="id_jenis" value="<?php echo $row['id_jenis']; ?>" readonly/>
                                    </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Nama Cabai</label>
                                    <div class="col-lg-5">
                                        <input style="width: 200px;"  class="form-control" type="text" name="nama_cabai" value="<?php echo $row['nama_cabai']; ?>" readonly/>
                                    </div>
                            </div>
                
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-danger">Hapus</button>
                                <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Keluar</button>
                            </div>
            </form>
            <?php
    }
            ?>
        </div>
    </div>
</div>