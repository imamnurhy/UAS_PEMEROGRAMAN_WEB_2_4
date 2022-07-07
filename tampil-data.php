<div class="row">
  <div class="col-md-12">
    <div class="page-header">
      <h4>
        <div class="pull-right btn-tambah">
          <a class="btn btn-info" href="?page=tambah">
            <i class="glyphicon glyphicon-plus"></i> Tambah
          </a>
        </div>

      </h4>
    </div>

    <?php
    if (empty($_GET['alert'])) {
      echo "";
    } elseif ($_GET['alert'] == 1) {
      echo "<div class='alert alert-danger alert-dismissible' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='glyphicon glyphicon-alert'></i> Gagal!</strong> Terjadi kesalahan.
          </div>";
    } elseif ($_GET['alert'] == 2) {
      echo "<div class='alert alert-success alert-dismissible' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='glyphicon glyphicon-ok-circle'></i> Sukses!</strong> Data berhasil disimpan.
          </div>";
    } elseif ($_GET['alert'] == 3) {
      echo "<div class='alert alert-success alert-dismissible' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='glyphicon glyphicon-ok-circle'></i> Sukses!</strong> Data berhasil diubah.
          </div>";
    } elseif ($_GET['alert'] == 4) {
      echo "<div class='alert alert-success alert-dismissible' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='glyphicon glyphicon-ok-circle'></i> Sukses!</strong> Data berhasil dihapus.
          </div>";
    }
    ?>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Data Zakat</h3>
      </div>
      <div class="panel-body">
        <div class="table-responsive">
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th>No.</th>
                <th>Zakat</th>
                <th>Nominal</th>
                <th>Nama Lengkap</th>
                <th>Nomor Hp</th>
                <th>Email</th>
                <th>Nama Bank</th>
                <th>Nomor Rekening</th>
              </tr>
            </thead>

            <tbody>
              <?php

              $query = mysqli_query($db, "SELECT pembayaran_zakat.id, pembayaran_zakat.jenis_zakat_id, pembayaran_zakat.nominal, pembayaran_zakat.nama, pembayaran_zakat.telpn, pembayaran_zakat.email, pembayaran_zakat.bank, pembayaran_zakat.rek_bank,jenis_zakat.nm_zakat  FROM pembayaran_zakat INNER JOIN jenis_zakat ON jenis_zakat.id = pembayaran_zakat.id")
                or die('Ada kesalahan pada query siswa: ' . mysqli_error($db));

              $no = 1;
              while ($data = mysqli_fetch_assoc($query)) {
                echo "  <tr>
                      <td width='50' class='center'>$no</td>
                      <td width='60'>$data[nm_zakat]</td>
                      <td width='60'>$data[nominal]</td>
                      <td width='100'>$data[nama]</td>
                      <td width='100'>$data[telpn]</td>
                      <td width='100'>$data[email]</td>
                      <td width='100'>$data[bank]</td>
                      <td width='100'>$data[rek_bank]</td>

                      <td width='100'>
                        <div class=''>
                          <a data-toggle='tooltip' data-placement='top' title='Ubah' style='margin-right:5px' class='btn btn-info btn-sm' href='?page=ubah&id=$data[id]'>
                            <i class='glyphicon glyphicon-edit'></i>
                          </a>";
              ?>
                <a data-toggle="tooltip" data-placement="top" title="Hapus" class="btn btn-danger btn-sm" href="proses-hapus.php?id=<?php echo $data['id']; ?>" onclick="return confirm('Anda yakin ingin menghapus siswa <?php echo $data['nama_lengkap']; ?>?');">
                  <i class="glyphicon glyphicon-trash"></i>
                </a>
              <?php
                echo "
                        </div>
                      </td>
                    </tr>";
                $no++;
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div> <!-- /.panel -->
  </div> <!-- /.col -->
</div> <!-- /.row -->