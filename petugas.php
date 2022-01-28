<?php
      if (isset($_SESSION['status'])) {
    ?>
    <center><h1 class="mt-4 mb-3">Data petugas</h1></center>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-success mb-1" data-bs-toggle="modal" data-bs-target="#tambahpetugas">
    Tambah Data
    </button>
    <table class="table table-striped table-hover">
        <tr class="text-center">
            <th>No</th>
            <th>ID</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Telepon</th>
            <th>Alamat</th>
            <th>Username</th>
            <th>Password</td>
            <th>--Action--<th>
        
        </tr>
        <?php
        //QUERY JOIN
      //  $querybaru = mysqli_query($konek,"SELECT anggota.nis, anggota.nama, anggota.jk, 
       // anggota.tempat_lahir, anggota.tanggal_lahir, anggota.id_kelas, anggota.id_jurusan,
       // anggota.nomor_telpon, anggota.alamat, kelas.nama_kelas, jurusan.nama_jurusan
       // FROM anggota
       // JOIN kelas ON anggota.id_kelas = kelas.id_kelas
      //  JOIN jurusan ON  anggota.id_jurusan = jurusan.id_jurusan")
        //END

            $query = mysqli_query($konek,"SELECT * FROM petugas");
            $no = 1;
            foreach ($query as $row) {
        ?>
        <tr style="font-size: 11px; table-layout: fixed">
            <td align="center" valign="middle"><?php echo $no; ?></td>
            <td valign="middle"><?php echo $row['id_petugas']; ?></td>
            <td valign="middle"><?php echo $row['nama']; ?></td>
            <td valign="middle"><?php echo $row['jabatan']; ?></td>
            <td valign="middle"><?php echo $row['tlp']; ?></td>
            <td valign="middle"><?php echo $row['alamat']; ?></td>
            <td valign="middle"><?php echo $row['username']; ?></td>
            <td valign="middle"><?php echo $row['password']; ?></td>

                  
            <td valign="middle">
                <a href="?page=petugas-delete&delete=&id=<?php echo $row['id_petugas'];?>">
                    <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                </a>
                <a href="?page=petugas-edit&edit=&id=<?php echo $row['id_petugas'];?>">
                    <button class="btn btn-warning"><i class="fas fa-edit"></i></button>
                </a>
            </td>
        </tr>
        <?php
        $no++;
        }
        ?>
    </table>

    <!-- Modal -->
    <div class="modal fade" id="tambahpetugas" tabindex="-1" aria-labelledby="tambahpetugasLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahpetugasLabel">Form Tambah petugas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="?page=petugas-insert" method="post">
                    <div class="form-group mt-2">
                        <input class="form-control" type="text" name="nama" placeholder="Nama Lengkap" required>
                    </div>
                    <div class="form-group mt-2">
                        <input class="form-control" type="text" name="jabatan" placeholder="Jabatan">
                    </div>
                    <div class="form-group mt-2">
                        <input class="form-control" type="text" name="tlp" placeholder="tlp">
                    </div>
                    <div class="form-group mt-2">
                <label for="">Alamat</label>
                <textarea name="alamat" class="form-control" placeholder="Alamat Lengkap"><?php echo $row["alamat"]?></textarea>
                 </div>
                    <div class="form-group mt-2">
                        <input class="form-control" type="text" name="username" placeholder="Username">
                    </div>
                    <div class="form-group mt-2">
                        <input class="form-control" type="text" name="password" placeholder="Password">
                    </div>
        
                   
                    
                
            </div>
            <center>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" name="save" class="btn btn-primary">Save changes</button>
    </center>   
            </form>
            </div>
            </div>
        </div>
    </div>

    <?php
    }
    ?>