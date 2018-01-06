<?php

class Mahasiswa {

    function koneksi() {
        return mysqli_connect("localhost", "root", "", "db_webd3");
    }

    function login() {
        session_start();
        $user = $_POST['username'];
        $pass = md5(trim($_POST['password']));

        $sql = mysqli_query($this->koneksi(), "SELECT * FROM tbl_user WHERE username='$user' AND password='$pass'");
        $count = mysqli_num_rows($sql);

        if ($count == 1) {
            $data = mysqli_fetch_object($sql);
            $_SESSION['username'] = $data->username;
            $_SESSION['hak_akses'] = $data->hak_akses;

            header("location:index.php");
        } else {
            header("location:login.php");
        }
    }

    function logout() {
        session_start();
        session_unset();
        session_destroy();
        header("location:login.php");
    }

    function index() {
        session_start();
        if ($this->koneksi()) {
            if (!empty($_SESSION['username'])) {
                $sql = mysqli_query($this->koneksi(), "SELECT*FROM tbl_mahasiswa");
                include 'mahasiswa.php';
            } else {
                header("location:login.php");
            }
        } else {
            echo 'Koneksi Gagal';
        }
    }

    function simpan($id) {
        $nama = $_POST['txtNama'];
        $alamat = $_POST['txtAlamat'];
        $kelamin = $_POST['txtKelamin'];
        $jurusan = $_POST['txtJurusan'];

        if (empty($id)) {
            $sql = "INSERT INTO tbl_mahasiswa VALUES('','$nama','$alamat','$kelamin','$jurusan')";
        } else {
            $sql = "UPDATE tbl_mahasiswa SET nama='$nama',alamat='$alamat',"
                    . "jenis_kelamin='$kelamin',jurusan='$jurusan' WHERE id=$id";
        }

        if (mysqli_query($this->koneksi(), $sql)) {
            header("Location:index.php");
        }
    }

    function hapus($id) {
        if (mysqli_query($this->koneksi(), "DELETE FROM tbl_mahasiswa WHERE id=$id")) {
            header("Location:index.php");
        }
    }

    function tampil_update($id) {
        $data = mysqli_query($this->koneksi(), "SELECT*FROM tbl_mahasiswa WHERE id=$id");
        $row = mysqli_fetch_object($data);
        include 'tampil_update.php';
    }

}

$page = isset($_GET['p']) ? $_GET['p'] : "index";
$id = isset($_GET['id']) ? $_GET['id'] : "";

$obj = new Mahasiswa();
$obj->{$page}($id);
