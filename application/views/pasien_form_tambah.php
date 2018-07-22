
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Pendaftaran Pasien Baru</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Form Pendaftaran Pasien</a></li>
              <li class="breadcrumb-item active">Form Pendaftaran Pasien</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Form Pendaftaran Pasien</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
        <form action="<?php echo site_url('Pasien/createDataPasien')?>" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Pasien</label>
                <input type="text" class="form-control" name="nama_pasien" placeholder="Masukkan nama pasien">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Alamat Pasien</label>
                <input type="text" class="form-control" name="alamat_pasien" placeholder="Masukkan alamat pasien">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Tanggal Lahir Pasien</label>
                <input type="date" class="form-control" name="tanggal_lahir_pasien">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Jenis Kelamin Pasien</label>
                <select class="form-control" name="jenis_kelamin_pasien">
                    <option>Pilih Jenis Kelamin</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Pekerjaan Pasien</label>
                <input type="text" class="form-control" name="pekerjaan_pasien" placeholder="Masukkan pekerjaan pasien">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Golongan Darah Pasien</label>
                <select class="form-control" name="golongan_darah_pasien">
                    <option>Pilih Golongan Darah</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="AB">AB</option>
                    <option value="O">O</option>
                </select>
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            <button type="button" class="btn btn-danger">Cancel</button>
        </form>
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  
