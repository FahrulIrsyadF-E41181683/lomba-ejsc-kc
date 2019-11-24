<div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                            
                                <div class="table-responsive">
                                <div class="col-sm-12">
                                        <div class="col-sm-12 col-md-6">
                                            <label>
                                                <h4>Data Paket</h4>
                                            </label>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                        
                                              <button type="button" class="btn mb-1 btn-primary btn-lg" data-toggle="modal" data-target="#tambahmodal" data-whatever="@getbootstrap">TAMBAH DATA</button>
                                        <!-- tambahmodal -->                                          
                                              <div class="modal fade" id="tambahmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  aria-hidden="true">
                                                 <div class="modal-dialog modal-lg" role="document">
                                                     <div class="modal-content">
                                                         <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">TAMBAH DATA</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                                    aria-hidden="true">&times;</span>
                                                            </button>
                                                    </div>
                                                    <div class="modal-body">
                                                            <form  method="post" action="_tambah_admin.php" enctype="multipart/form-data"> 
                                                                <div class="row">
                                                                <div class="form-group col col-md-6 ml-auto">
                                                                    <label class="col-form-label">Nama Admin</label>
                                                                    <input type="text" name="nm_admin" class="form-control input-default" placeholder="Nama Admin">
                                                                    <label class="col-form-label">Jenis Kelamin</label>
                                                                    <select class="form-control" name="jenis_kelamin" id="sel1">
                                                                        <option>Laki-Laki</option>
                                                                        <option>Perempuan</option>
                                                                    </select>
                                                                    <label class="col-form-label">Alamat</label>
                                                                    <textarea type="text" name="alamat" class="form-control input-default" placeholder="Alamat" style="height:125px;"></textarea>
                                                                    <label class="col-form-label">No Hp</label>
                                                                    <input type="text" name="no_hp" class="form-control input-default" maxlength="13" 
                                                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="No Hp">
                                                                </div>
                                                                <div class="form-group col col-md-6 ml-auto">
                                                                    <label class="col-form-label">Email</label>
                                                                    <input type="email" name="email" class="form-control input-default" placeholder="Email">
                                                                    <label class="col-form-label">Username</label>
                                                                    <input type="text" name="username" class="form-control input-default" placeholder="Username">
                                                                    <label class="col-form-label">Password</label>
                                                                    <input type="text" name="password" class="form-control input-default" placeholder="Password">
                                                                    <label class="col-form-label">Foto Profil</label>
                                                                    <input type="file" name="foto" class="form-control input-default">    
                                                                    <label class="col-form-label">Tanggal</label>
                                                                    <input type="date" name="tanggal" readonly class="form-control input-default" value="<?php echo $now?>" >           
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
                                        <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  aria-hidden="true">
                                                 <div class="modal-dialog modal-lg" role="document">
                                                     <div class="modal-content">
                                                         <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">EDIT DATA</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                                    aria-hidden="true">&times;</span>
                                                            </button>
                                                    </div>
                                                    <div class="modal-body">
                                                            <form  method="post" action="_tambah_admin.php" enctype="multipart/form-data"> 
                                                                <div class="row">
                                                                <div class="form-group col col-md-6 ml-auto">
                                                                    <label class="col-form-label">Nama Admin</label>
                                                                    <input type="text" name="nm_admin" class="form-control input-default" placeholder="Nama Admin">
                                                                    <label class="col-form-label">Jenis Kelamin</label>
                                                                    <select class="form-control" name="jenis_kelamin" id="sel1">
                                                                        <option>Laki-Laki</option>
                                                                        <option>Perempuan</option>
                                                                    </select>
                                                                    <label class="col-form-label">Alamat</label>
                                                                    <textarea type="text" name="alamat" class="form-control input-default" placeholder="Alamat" style="height:184px;"></textarea>
                                                                    <label class="col-form-label">No Hp</label>
                                                                    <input type="text" name="no_hp" class="form-control input-default" maxlength="13" 
                                                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="No Hp">
                                                                </div>
                                                                <div class="form-group col col-md-6 ml-auto">
                                                                    <label class="col-form-label">Email</label>
                                                                    <input type="email" name="email" class="form-control input-default" placeholder="Email">
                                                                    <label class="col-form-label">Username</label>
                                                                    <input type="text" name="username" class="form-control input-default" placeholder="Username">
                                                                    <label class="col-form-label">Password</label>
                                                                    <input type="text" name="password" class="form-control input-default" placeholder="Password">
                                                                    <label class="col-form-label">Foto Profil</label>
                                                                    <input type="file" name="foto" class="form-control input-default">
                                                                    <label for=""></label>
                                                                    <div class="form-check mb-3">
                                                                     <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input" value="">&nbsp; Ceklis jika ingin mengubah foto</label>
                                                                    </div>
                                                                    <label class="col-form-label">Tanggal</label>
                                                                    <input type="date" name="tanggal" readonly class="form-control input-default" value="<?php echo $now?>" >           
                                                                </div>
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


                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>ID Admin</th>
                                                <th>Nama Admin</th>
                                                <th>Alamat</th>
                                                <th>No HP</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Foto Profil</th>
                                                <th>Tanggal Daftar</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $id = $_GET['id'];
                                        $query = "Select * from tabel_admin";
                                        $query1 = "Select * from tabel_admin where id_admin='".$id."'";
                                        $sql = mysqli_query($connect, $query);
                                        while($data = mysqli_fetch_array($sql)){
                                        ?>
                                            <tr>
                                                <td><?php echo $data['id_admin']; ?></td>
                                                <td><?php echo $data['nama_admin']; ?></td>
                                                <td><?php echo $data['alamat']; ?></td>
                                                <td><?php echo $data['no_hp']; ?></td>
                                                <td><?php echo $data['jenis_kelamin']; ?></td>
                                                <td><img alt="" class="" width="100" src="images/avatar/<?php echo $data['foto_profil']; ?>"></td>
                                                <td><?php echo $data['tanggal_daftar']; ?></td>
                                                <td>
                                                    <span>
                                                        <div class="btn-group mr-2 mb-2">
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                        <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#editmodal" data-whatever="@getbootstrap">
                                                            <i class="fa fa-pencil color-muted m-r-5"></i>
                                                        </button> 
                                                        </a>      
                                                        &nbsp;
                                                        <a href="_hapus_admin.php?id=<?php echo $data['id_admin']; ?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')" data-toggle="tooltip" data-placement="top" title="" data-original-title="Hapus">
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
                                                <th>ID Admin</th>
                                                <th>Nama Admin</th>
                                                <th>Alamat</th>
                                                <th>No HP</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Foto Profil</th>
                                                <th>Tanggal Daftar</th>
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