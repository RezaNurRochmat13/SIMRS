
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Transaksi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Form Transaksi</a></li>
              <li class="breadcrumb-item active">Form Tambah Transaksi</li>
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
          <h3 class="card-title">Form Transaksi</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
        <form action="<?php echo site_url('Transaksi_Poli/createData')?>" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Pasien</label>
                <select class="form-control" name="id_pasien">
                  <option value="">Pilih Pasien</option>
                  <?php foreach ($pasien as $data) {?>
                  <option value="<?php echo $data->id_pasien?>"><?php echo $data->nama_pasien?></option>
                  <?php }?>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Poli</label>
                <select class="form-control" name="id_poli">
                  <option value="">Pilih Poli</option>
                  <?php foreach ($poli as $data) {?>
                  <option value="<?php echo $data->id_poli?>"><?php echo $data->nama_poli?></option>
                  <?php }?>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Nomor Antrian</label>
                <input type="number" class="form-control"placeholder="Masukan nomor antrian" name="nomor_antrian">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Status Transaksi</label>
                <select class="form-control" name="status_transaksi">
                  <option value="">Pilih Status Berkas</option>
                  <option value="1">Dipinjam</option>
                  <option value="0">Dikembalikan</option>
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
  
