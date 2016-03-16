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
// memanggil file siswa.php
require_once 'siswa.php';

if (isset($_GET['id'])) {
    // membuat objek siswa
    $siswa = new siswa();

	$nis = $_GET['id'];

	// delete data siswa
    $siswa->delete($nis);
}					
?>