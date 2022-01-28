<?php
//Proses insert data
if (isset($_POST['save'])) {
$nama              = $_POST['nama'];
$jabatan           = $_POST['jabatan'];
$tlp               = $_POST['tlp'];
$alamat            = $_POST['alamat'];
$username          = $_POST['username'];
$password          = $_POST['password'];

// proses enslripsi pw
$options = [
    'cost' => 12,
];
$password_enkript = password_hash($password, PASSWORD_BCRYPT, $options);
/////////////////////


$query_insert = mysqli_query($konek,"INSERT INTO petugas 
VALUES('','$nama','$jabatan','$tlp','$alamat','$username','$password_enkript')");
    if($query_insert)
    {
        ?>
        <script>
            alert('data di simpan');
            window.location.href='?page=petugas';
        </script>
        }
    else
    {
        ?>
        <script>
            alert('data di gagal simpan');
            window.location.href='?page=petugas';
        </script>
        <?php
    }
}
//// End of proses insert /////////////////////////////////////////////////////////
?>