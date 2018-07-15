
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
          <form action="<?php echo site_url('Pasien/cariPasien')?>" method="post">
            <div class="form=group">
              <input type="text" class="form-control" name="filter" placeholder="Masukan identitas pasien">
            </div>
          </form>
        </div>
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nomor Rekam Medis Pasien</th>
              <th scope="col">Nama Pasien</th>
              <th scope="col">Alamat Pasien</th>
              <th scope="col">Tanggal Lahir Pasien</th>
              <th scope="col">Golongan Darah Pasien</th>
              <th scope="col">Pekerjaan Pasien</th>
            </tr>
          </thead>
            <tbody>
            <?php if(empty($pasien)){ ?>
              <tr>
                <td colspan="6">Data tidak ditemukan</td>
              </tr>
                <?php }else{
                  $no =  $this->uri->segment('3') + 1;
                  foreach($pasien as $data){ $no;?>
                <tr height="50px">
                  <td><?php echo $no++?></td>
                  <td><?php echo $data->no_rekam_medis_pasien?></td>
                  <td><?php echo $data->nama_pasien?></td>
                  <td><?php echo $data->alamat_pasien?></td>
                  <td><?php echo date("d F Y", strtotime($data->tanggal_lahir_pasien))?></td>
                  <td><?php echo $data->golongan_darah_pasien?></td>
                  <td><?php echo $data->pekerjaan_pasien?></td>
                </tr>
                <?php }}?>

            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
        <div class="row">
                        <div class="col-md-12 text-center">
                            <?php echo $this->pagination->create_links(); ?>
                        </div>
                    </div>
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  
