  <div class="row">
    <div class="col-md-12">
      <div class="page-header">
        <h4>
          Input data Zakat
        </h4>
      </div> <!-- /.page-header -->

      <div class="panel panel-default">
        <div class="panel-body">
          <form class="form-horizontal" method="POST" action="proses-simpan.php">
            <?php
            require "config/database.php";
            $query = "SELECT * FROM jenis_zakat";
            ?>

            <div class="form-group">
              <label class="col-sm-2 control-label">Jenis Zakat</label>
              <div class="col-sm-3">
                <select class="form-control" name="jenis_zakat_id" placeholder="Pilih Jenis Zakat" required>
                  <option value=""></option>
                  <?php
                  $result = mysqli_query($db, $query);
                  while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value='" . $row['id'] . "'>" . $row['nm_zakat'] . "</option>";
                  }
                  ?>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Nominal</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="nominal" placeholder="Nominal" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Nama Lengkap</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="nama" autocomplete="off" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">No. Telepon</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" name="telpn" autocomplete="off" maxlength="12" onKeyPress="return goodchars(event,'0123456789',this)" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Email</label>
              <div class="col-sm-3">
                <input type="email" class="form-control" name="email" autocomplete="off" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Nama Bank</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="bank" autocomplete="off" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Rekening Bank</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="rek_bank" autocomplete="off" required>
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