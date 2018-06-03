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
            <h4 class="modal-title" id="myModalLabel">Edit Data Penanganan Gangguan Cabai</h4>
        </div>
        <div class="modal-body">
            <form class="form-horizontal" action="penangananEdit2.php" name="modal-popup" enctype="multipart/form-data" method="POST" id="form-edit">
                <div class="form-group">
                                <label class="col-lg-3 control-label">ID Penangan</label>
                                    <div class="col-lg-5">
                                        <input style="width: 210px;"  class="form-control" type="text" name="id_penanganan" value="<?php echo $row['id_penanganan']; ?>" readonly/>
                                    </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Cara Penanganan Gangguan Cabai</label>
                                    <div class="col-lg-5">
                                        <input style="width: 210px;"  class="form-control" type="text" name="jenis_penanganan" value="<?php echo $row['jenis_penanganan']; ?>"/>
                                    </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Keterangan Penanganan Gangguan Cabai</label>
                                    <div class="col-lg-5">
                                        <input style="width: 210px;"  class="form-control" type="text" name="keterangan" value="<?php echo $row['keterangan']; ?>"/>
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
                                jenis_penanganan: {
                                    message: 'The username is not valid',
                                    validators: {
                                        notEmpty: {
                                            message: 'Cara Penanganan Gangguan Cabai Mohon Diisi'
                                        },
                                    }
                                }, 
                                keterangan: {
                                    message: 'The username is not valid',
                                    validators: {
                                        notEmpty: {
                                            message: 'Keterangan Cara Penanganan Gangguan Cabai Mohon Diisi'
                                        },
                                    }
                                }
                            },
                    });
                });
</script>