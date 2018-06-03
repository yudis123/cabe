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
            <h4 class="modal-title" id="myModalLabel">Edit Data Gangguan Cabai</h4>
        </div>
        <div class="modal-body">
            <form class="form-horizontal" action="gangguanEdit2.php" name="modal-popup" enctype="multipart/form-data" method="POST" id="form-edit">
                <div class="form-group">
                                <label class="col-lg-3 control-label">ID Gangguan Cabai</label>
                                    <div class="col-lg-5">
                                        <input style="width: 210px;"  class="form-control" type="text" name="id_gangguan" value="<?php echo $row['id_gangguan']; ?>" readonly/>
                                    </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Nama Gangguan Cabai</label>
                                    <div class="col-lg-5">
                                        <input style="width: 210px;"  class="form-control" type="text" name="nama_gangguan" value="<?php echo $row['nama_gangguan']; ?>"/>
                                    </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Keterangan Gangguan</label>
                                    <div class="col-lg-5">
                                        <input style="width: 210px;"  class="form-control" type="text" name="keterangan_gangguan" value="<?php echo $row['keterangan_gangguan']; ?>"/>
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
                            nama_gangguan: {
                                message: 'The username is not valid',
                                validators: {
                                    notEmpty: {
                                        message: 'Nama Gangguan Tidak Boleh Kosong'
                                    },
                                    stringLength: {
                                        min: 5,
                                        message: 'Panjang minimal 5 karakter dan panjang maksismum 30 karakter'
                                    }
                                }
                            }, 
                            keterangan_gangguan: {
                                message: 'The username is not valid',
                                validators: {
                                    notEmpty: {
                                        message: 'Keterangan Gangguan Mohon Diisi'
                                    },
                                    stringLength: {
                                        min: 5,
                                        message: 'Panjang minimal 5 karakter dan panjang maksismum 30 karakter'
                                    }
                                }
                            },
                        }
                    });
                });
</script>