
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Poli</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Data Poli</a></li>
              <li class="breadcrumb-item active">List Data Poli</li>
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
          <h3 class="card-title">Data Poli</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
        <div class="pull-right">
          <form action="<?php echo site_url('Poli/cariPoli')?>" method="post">
            <div class="form=group">
              <input type="text" class="form-control" name="filter" placeholder="Masukan nama poli">
            </div>
          </form>
        </div>
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Poli</th>
              <th scope="col">Kategori Poli</th>
              <th scope="col">Nama Petugas Poli</th>
            </tr>
          </thead>
            <tbody>
            <?php if(empty($poli)){ ?>
              <tr>
                <td colspan="6">Data tidak ditemukan</td>
              </tr>
                <?php }else{
                  $no =  $this->uri->segment('3') + 1;
                  foreach($poli as $data){ $no;?>
                <tr height="50px">
                  <td><?php echo $no++?></td>
                  <td><?php echo $data->nama_poli?></td>
                  <td><?php echo $data->kategori_poli?></td>
                  <td><?php echo $data->nama_petugas_poli?></td>
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
  
