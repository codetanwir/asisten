<html>
    <head>
        <title>input Data</title>
    </head>
    <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="assets/animate.css" rel="stylesheet" type="text/css"/>
    <body>
        <div class="container">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <div class="well well-lg">
                    <center><h1>UPDATE MAHASISWA</h1></center>
                </div>
                <div class="well well-lg">
                    <form action="index.php?p=simpan&id=<?php echo $row->id?>" method="post">
                        <div class="form-group">
                            <label>Nama</label>
                            <input class="form-control" type="text" name="txtNama" 
                                   value="<?php echo $row->nama;?>"/>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="txtAlamat" class="form-control" rows="5" cols="10" 
                                      placeholder="Masukan alamat anda"><?php echo $row->alamat;?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Kelamin</label>
                            <input type="radio" name="txtKelamin" value="L" <?php if($row->jenis_kelamin=="L"){echo 'checked';}?>> Laki-Laki
                            <input type="radio" name="txtKelamin" value="P" <?php if($row->jenis_kelamin=="P"){echo 'checked';}?>> Perempuan
                        </div>
                        <div class="form-group">
                            <label>Jurusan</label>
                            <select class="form-control" name="txtJurusan">
                                <option value="">Pilih</option>
                                <option value="S1TI" <?php if($row->jurusan=="S1TI"){echo 'selected';}?>>S1TI</option>
                                <option value="D3MI" <?php if($row->jurusan=="D3MI"){echo 'selected';}?>>D3MI</option>
                                <option value="D3TI" <?php if($row->jurusan=="D3TI"){echo 'selected';}?>>D3TI</option>
                                <option value="S1DKV" <?php if($row->jurusan=="S1DKV"){echo 'selected';}?>>S1DKV</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Simpan" name="btnSimpan"/>
                            <input type="reset" class="btn btn-danger" value="Batal"/>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </body>
</html>




