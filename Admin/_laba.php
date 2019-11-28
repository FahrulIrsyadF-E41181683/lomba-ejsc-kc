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
                                        <div class="row">
                                            <div class="form-group col col-md-6 ml-auto">
                                                    <label class="col-form-label">Pilih Bulan</label>
                                                    <input type="month" name="bulan" class="form-control input-default" placeholder="Masukkan Modal Awal" value="<?= $tgl; ?>">
                                                    <label class="col-form-label">Modal Awal</label>
                                                    <input type="text" name="modalawal" class="form-control input-default" placeholder="Masukkan Modal Awal">
                                                    <label class="col-form-label">Pendapatan</label>
                                                    <input type="text" name="pendapatan" class="form-control input-default" placeholder="Masukkan Pendapatan">
                                                    <label class="col-form-label">Pengeluaran</label>
                                                    <input type="text" name="pendapatan" class="form-control input-default" placeholder="Masukkan Pengeluaran">
                                            </div>
                                            <div class="form-group col col-md-6 ml-auto">
                                                <label class="col-form-label">Laba Kotor</label>
                                                <input type="text" name="labaktr" class="form-control input-default" placeholder="" readonly>
                                                <label class="col-form-label">Laba Bersih</label>
                                                <input type="text" name="lababrsh" class="form-control input-default" placeholder="" readonly>
                                                </div>
                                                <button type="submit" name="hitung" class="btn btn-primary">Hitung</button>
                                        </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
</div>