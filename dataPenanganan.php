<?php
    require 'config/koneksi.php';
    
    function autonumber($tabel, $kolom, $lebar=0, $awalan=''){
        $query="select $kolom from $tabel order by $kolom desc limit 1";
        $hasil=mysql_query($query);
        $jumlahrecord = mysql_num_rows($hasil);
        if($jumlahrecord == 0)
            $nomor=1;
        else{
            $row=mysql_fetch_array($hasil);
            $nomor=intval(substr($row[0],strlen($awalan)))+1;
        }
        if($lebar>0)
            $angka = $awalan.str_pad($nomor,$lebar,"0",STR_PAD_LEFT);
        else
            $angka = $awalan.$nomor;
        return $angka;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>home Admin</title>

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrapValidator.css">

        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrapValidator.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><img src="image/IMG_20161201_194656.jpg" width="50px" height="50px" class="img-circle"></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="dataGangguan.php">Data Gangguan Cabai</a></li>
                        <li><a href="dataGejala.php">Data Gejala Cabai</a></li>
                        <li><a href="#">Data Penanganan Gangguan Cabai</a></li>
                        <li><a href="dataCabai.php">Data Jenis Cabai</a></li>
                        <li><a href="homeCabai.html">LogOut</a></li>
                      </ul>
                    </li>
                </ul>
            </div>
        </nav>
         
        <div class="container">
            <div class="row">
                <div class="page-header">
                    <center><h1>Data Penanganan (Solusi) Gangguan Cabai</h1></center>
                </div>
                <a href="#" class="btn btn-success" data-target="#dialog-solusi" data-toggle="modal"><i class="glyphicon glyphicon-plus"> Tambah</i></a>
                <br/>
                <br/>
                
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <td class="info"><center>No.</center></td>
                                <td class="info"><center>ID Penanganan Gangguan Cabai</center></td>
                                <td class="info"><center>Cara Penanganan Gangguan Cabai</center></td>
                                <td class="info"><center>Keterangan Penanganan Gangguan Cabai</center></td>
                                <td class="info"><center>Action</center></td>
                        </thead>
                        <tbody>
                            <?php
                                $no = 1;
                                $penanganan = mysql_query("select * from penanganancabai");
                                while ($data = mysql_fetch_array($penanganan)){
                            ?>
                            <tr>
                                <td><?php echo $no ?></td>
                                <td><?php echo $data['id_penanganan'] ?></td>
                                <td><?php echo $data['jenis_penanganan'] ?></td>
                                <td><?php echo $data['keterangan'] ?></td>
                                <td>
                                    <a href="#" class='btn btn-warning open_modal' id='<?php echo $data['id_penanganan']; ?>'><span class="glyphicon glyphicon-pencil"> Edit</span></a>
                                     <a href="#" class='btn btn-danger open_delete' id='<?php echo $data['id_penanganan']; ?>'><span class="glyphicon glyphicon-trash"> Hapus</span></a>
                                </td>
                            </tr>
                            <?php
                                $no++;
                                }
                            ?>
                        </tbody>
                    </table>
            </div>
        </div>
        
        
        <div class="modal fade" id="dialog-solusi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Tambah Data Penanganan (Solusi) Gangguan Cabai</h4>
                    </div>
                    <div class="modal-body">
                        <form action="penangananSave.php" class="form-horizontal" method="POST" id="form-save">
                            <div class="form-group">
                                <label class="col-lg-3 control-label">ID Penanganan</label>
                                    <div class="col-lg-5">
                                        <input style="width: 210px;"  class="form-control" type="text" name="id_penanganan" value="<?= autonumber("penanganancabai", "id_penanganan", 3, "P")?>" readonly/>
                                    </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Cara Penanganan Gangguan Cabai</label>
                                    <div class="col-lg-5">
                                        <input style="width: 210px;"  class="form-control" type="text" name="jenis_penanganan"/>
                                    </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Keterangan Penanganan Gangguan Cabai</label>
                                    <div class="col-lg-5">
                                        <input style="width: 210px;"  class="form-control" type="text" name="keterangan"/>
                                    </div>
                            </div>

                            <div class="modal-footer">
                                <button class="btn btn-success" type="submit">Simpan</button>
                                <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Keluar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
<!--        untuk edit-->
        <div id="ModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        </div>
<!--        untuk hapus-->
        <div id="ModalDelete" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        </div>

         <script type="text/javascript">
            $(document).ready(function (){
                $(".open_modal").click(function (e){
                    var m = $(this).attr("id");
                    $.ajax({
                        url: "penangananEdit.php",
                        type: "GET",
                        data : {id_penanganan: m,},
                        success: function (ajaxData){
                            $("#ModalEdit").html(ajaxData);
                            $("#ModalEdit").modal('show',{backdrop: 'true'});
                        }
                    });
                });
            });
         </script>

         <script type="text/javascript">
            $(document).ready(function (){
                $(".open_delete").click(function (e){
                    var m = $(this).attr("id");
                    $.ajax({
                        url: "penangananDelete.php",
                        type: "GET",
                        data : {id_penanganan: m,},
                        success: function (ajaxData){
                            $("#ModalDelete").html(ajaxData);
                            $("#ModalDelete").modal('show',{backdrop: 'true'});
                        }
                    });
                });
            });
        </script>

           <script type="text/javascript">
                $(document).ready(function() {
                    $('#form-save')
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
                                            message: 'Keterangan Penanganan Gangguan Cabai Mohon Diisi'
                                        },
                                    }
                                }

                                    },
                                });
                            });
            </script>
    </body>
</html>
