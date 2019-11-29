<div class="container-fluid">
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

                                <button type="button" class="btn mb-1 btn-primary btn-lg" data-toggle="modal" data-target="#tambahmodal" data-whatever="@getbootstrap">TAMBAH DATA</button>
                                <!-- tambahmodal -->
                                <div class="modal fade" id="tambahmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">TAMBAH DATA</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="post" action="_tambah_penjualan.php" enctype="multipart/form-data">
                                                    <div class="row">
                                                        <div class="form-group col col-md-6 ml-auto">
                                                            <label class="col-form-label">Tanggal Penjualan</label>
                                                            <input type="date" name="tgl" readonly class="form-control input-default" value="<?php echo $now ?>">
                                                            <label class="col-form-label">Total Penjualan</label>
                                                            <input type="text" name="total_pnj" class="form-control input-default" maxlength="13" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Total Penjualan">
                                                            <label class="col-form-label">Bayar </label>
                                                            <input type="text" name="bayar" class="form-control input-default" maxlength="13" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Bayar">
                                                        </div>
                                                        <div class="form-group col col-md-6 ml-auto">

                                                            <label class="col-form-label">Kembali </label>
                                                            <input type="text" name="kembali" class="form-control input-default" maxlength="13" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Kembali">
                                                            <label class="col-form-label">ID ADMIN</label>
                                                            <input type="text" name="id_admin" readonly class="form-control input-default" value="<?php echo $_SESSION['id_admin']; ?> ">
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="reset" class="btn btn-secondary" value="Reset" style="color:white;">
                                                <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- editmodal -->

                        </div>
                    </div>

                </div>
                <table class="table table-striped table-bordered zero-configuration">
                    <thead>
                        <tr>
                            <th>ID Penjualan</th>
                            <th>Tanggal Penjualan</th>
                            <th>Total Penjualan</th>
                            <th>Bayar</th>
                            <th>Kembali</th>
                            <th>ID Admin</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $id = $_GET['id'];
                        $query = "Select * from tabel_penjualan";
                        $query1 = "Select * from tabel_penjualan where id_penjuaan='" . $id . "'";
                        $sql = mysqli_query($connect, $query);
                        while ($data = mysqli_fetch_array($sql)) {
                            ?>
                            <tr>
                                <td><?php echo $data['id_penjualan']; ?></td>
                                <td><?php echo $data['tanggal_penjualan']; ?></td>
                                <td><?php echo $data['total_pnj']; ?></td>
                                <td><?php echo $data['bayar']; ?></td>
                                <td><?php echo $data['kembali']; ?></td>
                                <td><?php echo $data['id_admin']; ?></td>
                                <td>
                                    <span>
                                        <div class="btn-group mr-2 mb-2">
                                            <a href="ubah_penjualan.php?id=<?php echo $data['id_penjualan']; ?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editmodal" data-whatever="@getbootstrap">
                                                    <i class="fa fa-pencil color-muted m-r-5"></i>
                                                </button>
                                            </a>
                                            &nbsp;
                                            <a href="_hapus_penjualan.php?id=<?php echo $data['id_penjualan']; ?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')" data-toggle="tooltip" data-placement="top" title="" data-original-title="Hapus">
                                                <button type="button" class="btn btn-danger sweet-confirm">
                                                    <i class="fa fa-close color-danger"></i>
                                                </button>
                                            </a>
                                        </div>
                                    </span>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID Penjualan</th>
                            <th>Tanggal Penjualan</th>
                            <th>Total Penjualan</th>
                            <th>Bayar</th>
                            <th>Kembali</th>
                            <th>ID Admin</th>
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