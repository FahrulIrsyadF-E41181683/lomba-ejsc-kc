<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="col-sm-12">
                            <div class="col-sm-12 col-md-6">
                                <label>
                                    <h4>Perhitungan laba</h4>
                                </label>
                            </div>
                            <?php
                            $modal = $_POST['modalawal'];
                            $pendapatan = $_POST['pendapatan'];
                            $pengeluaran = $_POST['pengeluaran'];

                            $laba_kotor =  $pendapatan - $modal;
                            $laba_bersih = $pendapatan - $modal - $pengeluaran;

                            ?>
                            <div class="row">

                                <form method="post" action="" class="col">
                                    <div class="form-group col col-md-12 ml-auto">
                                        <label class="col-form-label">Modal Awal</label>
                                        <input type="text" name="modalawal" class="form-control input-default" placeholder="Masukkan Modal Awal">
                                        <label class="col-form-label">Pendapatan</label>
                                        <input type="text" name="pendapatan" class="form-control input-default" placeholder="Masukkan Pendapatan">
                                        <label class="col-form-label">Pengeluaran</label>
                                        <input type="text" name="pengeluaran" class="form-control input-default" placeholder="Masukkan Pengeluaran">
                                        <br>
                                        <button type="submit" name="hitung" class="btn btn-primary">Hitung</button>
                                    </div>


                                </form>

                                <br>
                                <div class="form-group col col-md-6 ml-auto">
                                    <label class="col-form-label">Laba Kotor</label>
                                    <input type="text" name="labaktr" class="form-control input-default" value="<?php echo $laba_kotor; ?>" readonly>
                                    <label class="col-form-label">Laba Bersih</label>
                                    <input type="text" name="lababrsh" class="form-control input-default" value="<?php echo $laba_bersih; ?>" readonly>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>