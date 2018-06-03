<?php

    include 'config/koneksi.php';
    $id_penanganan = $_GET['id_penanganan'];
    $penanganan = mysql_query("select * from penanganancabai where id_penanganan='$id_penanganan'");
    
    while($row=  mysql_fetch_array($penanganan)){
?>

<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
            <h4 class="modal-title" id="myModalLabel">Delete Data Penanganan Gangguan Cabai</h4>
        </div>
        <div class="modal-body">
            <form class="form-horizontal" action="penangananDelete2.php" name="modal-popup" enctype="multipart/form-data" method="POST">
                
                    <div class="alert alert-danger">Apakah anda yakin ingin menghapus data ini ?</div>
                
                            <div class="form-group">
                                <label class="col-lg-3 control-label">ID Penanganan</label>
                                    <div class="col-lg-5">
                                        <input style="width: 200px;"  class="form-control" type="text" name="id_penanganan" value="<?php echo $row['id_penanganan']; ?>" readonly/>
                                    </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Cara Penanganan Gangguan Cabai</label>
                                    <div class="col-lg-5">
                                        <input style="width: 200px;"  class="form-control" type="text" name="jenis_penanganan" value="<?php echo $row['jenis_penanganan']; ?>" readonly/>
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