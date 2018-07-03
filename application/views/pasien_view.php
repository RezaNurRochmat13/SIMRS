
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Pasien</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Data Pasien</a></li>
              <li class="breadcrumb-item active">List Data Pasien</li>
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
          <h3 class="card-title">Data Pasien</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
        <div class="pull-right">
          <form>
            <div class="form=group">
              <input type="text" class="form-control" placeholder="Masukan identitas pasien">
            </div>
          </form>
        </div>
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nomor Rekam Medis Pasien</th>
              <th scope="col">Nama Pasien</th>
              <th scope="col">Alamat Pasien</th>
              <th scope="col">Tanggal Lahir Pasien</th>
              <th scope="col">Golongan Darah Pasien</th>
              <th scope="col">Pekerjaan Pasien</th>
              <th>Action</th>
            </tr>
          </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td width="300px">
                  <a class="btn btn-success btn-sm"><i class="fa fa-pencil"> Edit </i></a>
                  <a class="btn btn-info btn-sm"><i class="fa fa-eye"> Lihat Detail </i></a>
                  <a class="btn btn-danger btn-sm"><i class="fa fa-trash"> Hapus </i></a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  
