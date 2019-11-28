<div class="container-fluid">
    <?php

    if (isset($_GET['id'])) {

        $id = $_GET['id'];

        $sql1 = mysqli_query($connect, "DELETE FROM tabel_biaya WHERE id_biaya ='$id';");
        if ($sql1) {
            echo "<script>alert('Data Berhasil Di Hapus');document.location.href='index.php?page=biaya'</script>";
        } else {
            echo "<script>alert('Data Gagal Di Hapus');document.location.href='index.php?page=biaya'</script>";
        }
    }
    ?>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="col-sm-12">
                            <div class="col-sm-12 col-md-6">
                                <label>
                                    <h4>Data Biaya</h4>
                                </label>
                            </div>

                            <div class="col-sm-12 col-md-6">
                                <label style="text-aling:right;">

                                    <button type="button" class="btn mb-1 btn-primary btn-lg" data-toggle="modal" data-target="#tambahmodal" data-whatever="@getbootstrap">TAMBAH DATA</button>



                                </label>
                                <div class="modal fade" id="tambahmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">TAMBAH DATA</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="post" action="_tambah_biaya.php" enctype="multipart/form-data">
                                                    <div class="row">
                                                        <div class="form-group col ml-auto">
                                                            <label class="col-form-label">Nama Biaya</label>
                                                            <input type="text" name="nm_biaya" class="form-control input-default" placeholder="Nama biaya">
                                                            <label class="col-form-label">Biaya</label>
                                                            <input type="text" name="biaya" class="form-control input-default" maxlength="13" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="biaya">
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="reset" class="btn btn-secondary" value="Reset" style="color:white;">
                                                <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>
                                <tr>
                                    <th>ID BIAYA</th>
                                    <th>NAMA BIAYA</th>
                                    <th>BIAYA</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                $query = "Select * from tabel_biaya";
                                $sql = mysqli_query($connect, $query);
                                while ($data = mysqli_fetch_assoc($sql)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $data['id_biaya']; ?></td>
                                        <td><?php echo $data['nama_biaya']; ?></td>
                                        <td><?php echo $data['biaya']; ?></td>
                                        <td>

                                            <div class="btn-group mr-2 mb-2">
                                                <a href="<?php echo $data['id_biaya']; ?>" data-placement="top" title="" data-original-title="Edit" data-toggle="modal" data-target="#editmodal<?php echo $data['id_biaya']; ?>" data-whatever="@getbootstrap">
                                                    <button type="button" class="btn btn-primary">
                                                        <i class="fa fa-pencil color-muted m-r-5"></i>
                                                    </button>
                                                </a>
                                                &nbsp;
                                                <a href="?page=biaya&id=<?php echo $data['id_biaya']; ?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')" data-toggle="tooltip" data-placement="top" title="" data-original-title="Hapus">
                                                    <button type="button" class="btn btn-danger">
                                                        <i class="fa fa-close color-danger"></i>
                                                    </button>
                                                </a>

                                                <div class="modal fade" id="editmodal<?php echo $data['id_biaya']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Edit Data</h5>
                                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body ">
                                                                <form role="form" method="get" action="_edit_biaya.php">
                                                                    <?php
                                                                        $ide = $data['id_biaya'];
                                                                        $query_edit = mysql_query($connect, "SELECT * FROM tabel_biaya WHERE id_biaya='$ide'");
                                                                        //$result = mysqli_query($conn, $query);
                                                                        while ($row = mysql_fetch_array($query_edit)) {
                                                                            ?>
                                                                        <div class="row ">
                                                                            <div class="form-group col ml-auto">

                                                                                <input type="hidden" name="id_biaya" value="<?php echo $row['id_biaya']; ?>">
                                                                                <label class="col-form-label">Nama Biaya</label>
                                                                                <input type="text" name="nm_biaya" value="<?php echo $row['nama_biaya']; ?>" class="form-control input-default" placeholder="Nama biaya">
                                                                                <label class="col-form-label">biaya</label>
                                                                                <input type="text" name="biaya" value="<?php echo $row['biaya']; ?>" class="form-control input-default" maxlength="13" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Biaya">
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <input type="reset" class="btn btn-secondary" value="Reset" style="color:white;">
                                                                            <button type="submit" name="Esubmit" class="btn btn-primary">Simpan</button>
                                                                        </div>
                                                                    <?php } ?>
                                                                </form>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>ID BIAYA</th>
                                    <th>NAMA BIAYA</th>
                                    <th>BIAYA</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>