<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="col-sm-12">
                            <div class="col-sm-12 col-md-6">
                                <label>
                                    <h4>Peramalan Stok</h4>
                                </label>
                            </div>
                            <form method="get" action="function.php?n=<?php echo $id; ?>">
                                <div class="row">
                                    <div class="form-group col col-md-6 ml-auto">
                                        <label class="col-form-label">Pilih Produk</label>
                                        <select class="form-control" name="produk" id="sel1">
                                            <option selected="selected">Choose...</option>
                                            <?php
                                            $id = $_GET['n'];
                                            $query = "Select * from tabel_produk";
                                            $sql = mysqli_query($connect, $query);
                                            while ($dataa = mysqli_fetch_array($sql)) {
                                                ?>
                                                <option><?php echo $dataa["nama_produk"] ?></option>
                                            <?php } ?>

                                        </select>

                                    </div>
                                    <div class="form-group col col-md-6 ml-auto">
                                        <label class="col-form-label">Masukkan Jumlah Bulan</label>
                                        <input type="number" name="n" class="form-control input-default" placeholder="Masukkan Jumlah Bulan">
                                    </div>


                                    <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit">submit</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>