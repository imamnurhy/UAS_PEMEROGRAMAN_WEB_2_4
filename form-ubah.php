  <div class="row">
    <div class="col-md-12">
      <div class="page-header">
        <h4>
          <i class="glyphicon glyphicon-edit"></i>
          Ubah data siswa
        </h4>
      </div> <!-- /.page-header -->
      <?php
      if (isset($_GET['id'])) {
        $id   = $_GET['id'];
        $querys = mysqli_query($db, "SELECT * FROM pembayaran_zakat WHERE id='$id'") or die('Query Error : ' . mysqli_error($db));
        while ($data  = mysqli_fetch_assoc($querys)) {
          $jenis_zakat_id = $data['jenis_zakat_id'];
          $nominal        = $data['nominal'];
          $nama_lengkap   = $data['nama'];
          $no_telepon     = $data['telpn'];
          $email          = $data['email'];
          $bank           = $data['bank'];
          $rek_bank       = $data['rek_bank'];
        }
      }
      ?>
      <div class="panel panel-default">
        <div class="panel-body">
          <form class="form-horizontal" method="POST" action="proses-ubah.php">
            <div class="form-group">
              <label class="col-sm-2 control-label">Jenis Zakat</label>
              <div class="col-sm-3">
                <select class="form-control" name="jenis_zakat_id" placeholder="Pilih Jenis Zakat" required>
                  <option value=""></option>
                  <?php
                  $query = "SELECT * FROM jenis_zakat";
                  $result = mysqli_query($db, $query);
                  while ($row = mysqli_fetch_assoc($result)) {
                    if ($jenis_zakat_id == $row['id']) {
                      echo "<option value='" . $row['id'] . "' selected>" . $row['nm_zakat'] . "</option>";
                    } else {
                      echo "<option value='" . $row['id'] . "' >" . $row['nm_zakat'] . "</option>";
                    }
                  }
                  ?>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Nominal</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="nominal" placeholder="Nominal" value="<?php echo $nominal ?>" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Nama Lengkap</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="nama" autocomplete="off" value="<?php echo $nama_lengkap ?>" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">No. Telepon</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" name="telpn" autocomplete="off" maxlength="12" onKeyPress="return goodchars(event,'0123456789',this)" value="<?php echo $no_telepon ?>" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Email</label>
              <div class="col-sm-3">
                <input type="email" class="form-control" name="email" autocomplete="off" value="<?php echo $email ?>" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Nama Bank</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="bank" autocomplete="off" value="<?php echo $bank ?>" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Rekening Bank</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="rek_bank" autocomplete="off" value="<?php echo $rek_bank ?>" required>
              </div>
            </div>

            <hr />
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" class="btn btn-info btn-submit" name="simpan" value="Simpan">
                <a href="dashboard.php" class="btn btn-default btn-reset">Batal</a>
              </div>
            </div>
          </form>
        </div> <!-- /.panel-body -->
      </div> <!-- /.panel -->
    </div> <!-- /.col -->
  </div> <!-- /.row -->