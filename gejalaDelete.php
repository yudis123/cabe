<?php

    include 'config/koneksi.php';
    $id_gejala = $_GET['id_gejala'];
    $gejala = mysql_query("select * from gejalacabai where id_gejala='$id_gejala'");
    
    while($row=  mysql_fetch_array($gejala)){
?>

<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
            <h4 class="modal-title" id="myModalLabel">Delete Gejala Gangguan Cabai</h4>
        </div>
        <div class="modal-body">
            <form class="form-horizontal" action="gejalaDelete2.php" name="modal-popup" enctype="multipart/form-data" method="POST">
                
                    <div class="alert alert-danger">Apakah anda yakin ingin menghapus data ini ?</div>
                
                            <div class="form-group">
                                <label class="col-lg-3 control-label">ID Gejala</label>
                                    <div class="col-lg-5">
                                        <input style="width: 200px;"  class="form-control" type="text" name="id_gejala" value="<?php echo $row['id_gejala']; ?>" readonly/>
                                    </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Gejala Gangguan Cabai</label>
                                    <div class="col-lg-5">
                                        <input style="width: 200px;"  class="form-control" type="text" name="gejala" value="<?php echo $row['gejala']; ?>" readonly/>
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