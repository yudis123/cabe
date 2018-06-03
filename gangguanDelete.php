<?php

    include 'config/koneksi.php';
    $id_gangguan = $_GET['id_gangguan'];
    $gangguan = mysql_query("select * from gangguancabai where id_gangguan='$id_gangguan'");
    
    while($row=  mysql_fetch_array($gangguan)){
?>

<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
            <h4 class="modal-title" id="myModalLabel">Delete Gangguan Cabai</h4>
        </div>
        <div class="modal-body">
            <form class="form-horizontal" action="gangguanDelete2.php" name="modal-popup" enctype="multipart/form-data" method="POST">
                
                    <div class="alert alert-danger">Apakah anda yakin ingin menghapus data ini ?</div>
                
                            <div class="form-group">
                                <label class="col-lg-3 control-label">ID Ganggian Cabai</label>
                                    <div class="col-lg-5">
                                        <input style="width: 200px;"  class="form-control" type="text" name="id_gangguan" value="<?php echo $row['id_gangguan']; ?>" readonly/>
                                    </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Nama Gangguan Cabai</label>
                                    <div class="col-lg-5">
                                        <input style="width: 200px;"  class="form-control" type="text" name="nama_gangguan" value="<?php echo $row['nama_gangguan']; ?>" readonly/>
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