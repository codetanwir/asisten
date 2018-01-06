<html>
    <head>
        <title>input Data</title>
    </head>
    <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="assets/animate.css" rel="stylesheet" type="text/css"/>
    <body>
        <div class="container animated zoomIn">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <div class="well well-lg">
                    <center><h1>INPUT MAHASISWA</h1></center>
                </div>
                <div class="well well-lg animated bounceInLeft">
                    <form action="index.php?p=simpan" method="post">
                        <div class="form-group">
                            <label>Nama</label>
                            <input class="form-control" type="text" name="txtNama" 
                                   placeholder="Masukan nama anda"/>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="txtAlamat" class="form-control" rows="5" cols="10" 
                                      placeholder="Masukan alamat anda"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Kelamin</label>
                            <input type="radio" name="txtKelamin" value="L"> Laki-Laki
                            <input type="radio" name="txtKelamin" value="P"> Perempuan
                        </div>
                        <div class="form-group">
                            <label>Jurusan</label>
                            <select class="form-control" name="txtJurusan">
                                <option value="">Pilih</option>
                                <option value="S1TI">S1TI</option>
                                <option value="D3MI">D3MI</option>
                                <option value="D3TI">D3TI</option>
                                <option value="S1DKV">S1DKV</option>
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


