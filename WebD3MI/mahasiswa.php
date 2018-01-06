<html>
    <head>
        <title>Data Mahasiswa</title>
    </head>
    <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="assets/animate.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/font-awesome.css" rel="stylesheet" type="text/css"/>
    <body>
        <div class="container animated shake">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <div class="well well-lg">
                    <center><h1>DATA MAHASISWA</h1></center>
                    <center><h4>Selamat datang <?php echo $_SESSION['username'] ?></h4></center>
                </div>
                <div class="well well-lg">
                    <table class="table table-hover table-condensed animated bounceInLeft">
                        <tr>
                            <th>NO</th>
                            <th>NAMA</th>
                            <th>ALAMAT</th>
                            <th>KELAMIN</th>
                            <th>JURUSAN</th>
                            <?php
                            if ($_SESSION['hak_akses'] == "admin") {
                                ?>
                                <th>AKSI</th>
                                <?php
                            }
                            ?>
                        </tr>
                        <?php
                        $no = 1;
                        while ($row = mysqli_fetch_object($sql)) {
                            ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $row->nama; ?></td>
                                <td><?php echo $row->alamat; ?></td>
                                <td><?php echo $row->jenis_kelamin; ?></td>
                                <td><?php echo $row->jurusan; ?></td>
                                <?php
                                if ($_SESSION['hak_akses'] == "admin") {
                                    ?>
                                    <td>
                                        <a href="index.php?p=tampil_update&id=<?php echo $row->id; ?>" class="btn btn-primary animated bounceInLeft">
                                            <span class="glyphicon glyphicon-pencil"></span></a> 
                                        <a href="index.php?p=hapus&id=<?php echo $row->id; ?>" class="btn btn-warning animated bounceInLeft">
                                            <span class="glyphicon glyphicon-trash"></span></a>  
                                    </td>
                                    <?php
                                }
                                ?>
                            </tr>
                            <?php
                        }
                        ?>
                    </table>
                    <?php
                    if ($_SESSION['hak_akses'] == "admin") {
                        ?>
                        <a href="tambah.php" class="btn btn-primary animated bounceInUp">
                            <span class="glyphicon glyphicon-plus"></span> Tambah
                        </a>
                        <?php
                    }
                    ?>
                    <a href="index.php?p=logout" class="btn btn-danger animated bounceInUp">
                        <span class="glyphicon glyphicon-log-out"></span> Logout
                    </a>
                </div>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </body>
</html>
