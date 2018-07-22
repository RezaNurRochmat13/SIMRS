
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Transaksi Poli</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Data Transaksi Poli</a></li>
              <li class="breadcrumb-item active">List Data Transaksi Poli</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <?php echo $this->session->flashdata('sukses')?>
    <?php echo $this->session->flashdata('ubah')?>


      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Transaksi Poli</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
        <div class="pull-right">
          <form action="<?php echo site_url('Transaksi_Poli/cariTransaksi')?>" method="POST">
            <div class="form=group">
              <input type="text" class="form-control" name="keywords" placeholder="Masukan no rekam medis">
            </div>
          </form>
        </div>
        <a class="btn btn-success" href="<?php echo site_url('Transaksi_Poli/createTransaksi')?>">Peminjaman Berkas</a><br/>
        <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nomor Rekam Medis Pasien</th>
              <th scope="col">Nama Pasien</th>
              <th scope="col">Alamat Pasien</th>
              <th scope="col">Tanggal Lahir Pasien</th>
              <th>Nomor Antrian</th>
              <th>Tanggal Masuk Berkas</th>
              <th>Tanggal Kembali Berkas</th>
              <th>Nama Poli</th>
              <th>Nama Dokter</th>
              <th>Status Berkas</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php if(empty($transaksi)){ ?>
              <tr>
                <td colspan="6">Data tidak ditemukan</td>
              </tr>
                <?php }else{
                  $no =  $this->uri->segment('3') + 1;
                  foreach($transaksi as $data){ $no;?>
                <tr height="50px">
                  <td><?php echo $no++?></td>
                  <td><?php echo $data->no_rekam_medis_pasien?></td>
                  <td><?php echo $data->nama_pasien?></td>
                  <td><?php echo $data->alamat_pasien?></td>
                  <td><?php echo date("d F Y", strtotime($data->tanggal_lahir_pasien))?></td>
                  <td><?php echo $data->nomor_antrian?></td>
                  <td><?php echo date("d F Y", strtotime($data->tanggal_masuk_berkas))?></td>
                  <td>
                    <?php if ($data->tanggal_keluar_berkas == NULL) {?>
                      <?php echo "Belum dikembalikan"; ?>
                    <?php } else {?>
                      <?php echo date("d F Y", strtotime($data->tanggal_keluar_berkas))?>
                    <?php }?>
                  </td>
                  <td><?php echo $data->nama_poli?></td>
                  <td><?php echo $data->nama_petugas_poli?></td>
                  <td><?php
                    if ($data->status_transaksi == 1) {?>
                    <button class="btn btn-warning">Dipinjam</button>
                  <?php } else {?>
                    <button class="btn btn-success">Dikembalikan</button>
                  <?php }?>
                  </td>
                  <td>
                    <?php echo anchor('Transaksi_Poli/editTransaksi/'.$data->id_transaksi_poli,'<button type="button" class="btn btn-info"><i class="glyphicon glyphicon-pencil"></i>Update Status Berkas</button>');?>
                  </td>
                </tr>
                <?php }}?>

            </tbody>
          </table>
          </div>
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
  
