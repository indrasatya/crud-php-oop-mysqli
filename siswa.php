 <!-- Aplikasi CRUD
 ************************************************
 * Developer    : Indra Styawantoro
 * Company      : Indra Studio
 * Release Date : 1 Maret 2016
 * Website      : http://www.indrasatya.com, http://www.kulikoding.net
 * E-mail       : indra.setyawantoro@gmail.com
 * Phone        : +62-856-6991-9769
 * BBM          : 7679B9D9
 -->

<?php
        
/* class siswa */
class siswa {

    /* method untuk menampilkan data siswa */
    function view() {
        // memanggil file database.php
        require_once "config/database.php";

        // membuat objek db dengan nama $db
        $db = new database();

        // membuka koneksi ke database
        $mysqli = $db->connect();

        // sql statement untuk mengambil semua data siswa
        $sql = "SELECT * FROM is_siswa ORDER BY nis DESC";

        $result = $mysqli->query($sql);

        while ($data = $result->fetch_assoc()) {
            $hasil[] = $data;
        }

        // menutup koneksi database
        $mysqli->close();

        // nilai kembalian dalam bentuk array
        return $hasil;
    }

    /* Method untuk menyimpan data ke tabel siswa */
    function insert($nis, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat, $no_telepon) {
        // memanggil file database.php
        require_once "config/database.php";

        // membuat objek db dengan nama $db
        $db = new database();

        // membuka koneksi ke database
        $mysqli = $db->connect();

        $nis          = $mysqli->real_escape_string($nis);
        $nama         = $mysqli->real_escape_string($nama);
        $tempat_lahir = $mysqli->real_escape_string($tempat_lahir);
        $alamat       = $mysqli->real_escape_string($alamat);

        // sql statement untuk insert data siswa
        $sql = "INSERT INTO is_siswa (nis,nama,tempat_lahir,tanggal_lahir,jenis_kelamin,agama,alamat,no_telepon) 
                VALUES ('$nis','$nama','$tempat_lahir','$tanggal_lahir','$jenis_kelamin','$agama','$alamat','$no_telepon')";

        $result = $mysqli->query($sql);

        // cek hasil query
        if($result){
            /* jika data berhasil disimpan alihkan ke halaman siswa dan tampilkan pesan = 2 */
            header("Location: index.php?alert=2");
        }
        else{
            /* jika data gagal disimpan alihkan ke halaman siswa dan tampilkan pesan = 1 */
            header("Location: index.php?alert=1");
        }

        // menutup koneksi database
        $mysqli->close();
    }

    /* Method untuk menampilkan data siswa berdasarkan nis */
    function get_siswa($nis) {
        // memanggil file database.php
        require_once "config/database.php";

        // membuat objek db dengan nama $db
        $db = new database();

        // membuka koneksi ke database
        $mysqli = $db->connect();

        // sql statement untuk mengambil data siswa berdasarkan nis
        $sql = "SELECT * FROM is_siswa WHERE nis='$nis'";

        $result = $mysqli->query($sql);
        $data   = $result->fetch_assoc();

        // menutup koneksi database
        $mysqli->close();
        
        // nilai kembalian dalam bentuk array
        return $data;
    }
    
    /* Method untuk mengubah data pada tabel siswa */
    function update($nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat, $no_telepon, $nis) {
        // memanggil file database.php
        require_once "config/database.php";

        // membuat objek db dengan nama $db
        $db = new database();

        // membuka koneksi ke database
        $mysqli = $db->connect();

        $nama         = $mysqli->real_escape_string($nama);
        $tempat_lahir = $mysqli->real_escape_string($tempat_lahir);
        $alamat       = $mysqli->real_escape_string($alamat);

        // sql statement untuk update data siswa
        $sql = "UPDATE is_siswa SET nama            = '$nama',
                                    tempat_lahir    = '$tempat_lahir',
                                    tanggal_lahir   = '$tanggal_lahir',
                                    jenis_kelamin   = '$jenis_kelamin',
                                    agama           = '$agama',
                                    alamat          = '$alamat',
                                    no_telepon      = '$no_telepon'
                              WHERE nis             = '$nis'"; 

        $result = $mysqli->query($sql);

        // cek hasil query
        if($result){
            /* jika data berhasil disimpan alihkan ke halaman siswa dan tampilkan pesan = 3 */
            header("Location: index.php?alert=3");
        }
        else{
            /* jika data gagal disimpan alihkan ke halaman siswa dan tampilkan pesan = 1 */
            header("Location: index.php?alert=1");
        }

        // menutup koneksi database
        $mysqli->close();
    }
    
    /* Method untuk menghapus data pada tabel siswa */
    function delete($nis) {
        // memanggil file database.php
        require_once "config/database.php";

        // membuat objek db dengan nama $db
        $db = new database();

        // membuka koneksi ke database
        $mysqli = $db->connect();

        // sql statement untuk delete data siswa
        $sql = "DELETE FROM is_siswa WHERE nis = '$nis'";

        $result = $mysqli->query($sql);

        // cek hasil query
        if($result){
            /* jika data berhasil disimpan alihkan ke halaman siswa dan tampilkan pesan = 4 */
            header("Location: index.php?alert=4");
        }
        else{
            /* jika data gagal disimpan alihkan ke halaman siswa dan tampilkan pesan = 1 */
            header("Location: index.php?alert=1");
        }

        // menutup koneksi database
        $mysqli->close();
    }
}
?>
