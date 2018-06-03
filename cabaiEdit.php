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
            <h4 class="modal-title" id="myModalLabel">Edit Data Jenis-Jenis Cabai</h4>
        </div>
        <div class="modal-body">
            <form class="form-horizontal" action="cabaiEdit2.php" name="modal-popup" enctype="multipart/form-data" method="POST" id="form-edit">
                <div class="form-group">
                                <label class="col-lg-3 control-label">ID Cabai</label>
                                    <div class="col-lg-5">
                                        <input style="width: 210px;"  class="form-control" type="text" name="id_jenis" value="<?php echo $row['id_jenis']; ?>" readonly/>
                                    </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Nama Cabai</label>
                                    <div class="col-lg-5">
                                        <input style="width: 210px;"  class="form-control" type="text" name="nama_cabai" value="<?php echo $row['nama_cabai']; ?>"/>
                                    </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Karakteristik Cabai</label>
                                    <div class="col-lg-5">
                                        <input style="width: 210px;"  class="form-control" type="text" name="karakteristik" value="<?php echo $row['karakteristik']; ?>"/>
                                    </div>
                            </div>

                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success">Update</button>
                                <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Keluar</button>
                            </div>
            </form>
            <?php
    }
            ?>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
                $('#form-edit')
                    .bootstrapValidator({
                            message: 'This value is not valid',
                            feedbackIcons: {
                                valid: 'glyphicon glyphicon-ok',
                                invalid: 'glyphicon glyphicon-remove',
                                validating: 'glyphicon glyphicon-refresh'
                            },
                            fields: {
                                id_jenis: {
                                    message: 'The username is not valid',
                                    validators: {
                                        notEmpty: {
                                            message: 'Jenis Cabai Harus Diisi'
                                        },
                                    }
                                }, 
                                karakteristik: {
                                    message: 'The username is not valid',
                                    validators: {
                                        notEmpty: {
                                            message: 'Karakteristik Cabai Mohon Diisi'
                                        },
                                    }
                                }
                            },
                    });
                });
</script>