<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="col-sm-12">
                            <div class="col-sm-12 col-md-6">
                                <label>
                                    <h4>Edit Profil</h4>
                                </label>
                            </div>
                            <?php
                            $id  = $_GET['id'];
                            $sql = mysqli_query($connect, "SELECT * FROM tabel_admin WHERE id_admin='" . $id . "'");
                            $query = mysqli_fetch_assoc($sql);
                            ?>
                            <form method="post" action="_edit_admin.php" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="form-group col col-md-6 ">
                                        <input type="hidden" name="id" value="<?= $id ?>">
                                        <label class="col-form-label">Nama Admin</label>
                                        <input type="text" name="nama" class="form-control input-default" placeholder="Nama Admin" value="<?= $query['nama_admin']; ?>">
                                        <label class="col-form-label">Jenis Kelamin</label>
                                        <select class="form-control" name="jk" id="sel1">
                                            <option><?= $query['jenis_kelamin']; ?></option>
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                        <label class="col-form-label">Alamat</label>
                                        <textarea type="text" name="alamat" class="form-control input-default" placeholder="Alamat" style="height:184px;"><?= $query['alamat']; ?></textarea>
                                        <label class="col-form-label">No Hp</label>
                                        <input type="text" name="nohp" class="form-control input-default" maxlength="13" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="No Hp" value="<?= $query['no_hp']; ?>">
                                    </div>
                                    <div class="form-group col col-md-6 ">
                                        <label class="col-form-label">Email</label>
                                        <input type="email" name="email" class="form-control input-default" placeholder="Email" value="<?= $query['email']; ?>">
                                        <label class="col-form-label">Username</label>
                                        <input type="text" name="username" class="form-control input-default" placeholder="Username" value="<?= $query['username']; ?>">
                                        <label class="col-form-label">Password</label>
                                        <input type="password" name="password" class="form-control input-default" placeholder="Password" value="<?= $query['password']; ?>">
                                        <label class="col-form-label">Foto Profil</label>
                                        <input type="file" name="foto" class="form-control input-default">
                                        <label for=""></label>
                                        <div class="form-check mb-3">
                                            <label class="form-check-label">
                                                <input type="checkbox" name="ubah" class="form-check-input" value="">&nbsp; Ceklis jika ingin mengubah foto</label>
                                        </div>
                                        <label class="col-form-label">Tanggal</label>
                                        <input type="date" name="tanggal" readonly class="form-control input-default" value="<?= $now ?>">
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
    </div>
</div>
</div>