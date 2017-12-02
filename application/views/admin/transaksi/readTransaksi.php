<!--  page-wrapper -->
        <div id="page-wrapper">


            <div class="row">

                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Daftar Slider</h1>
                </div>
                 <!-- end  page header -->
                 <?php echo $this->session->flashdata('suksesslider'); ?>
            </div>
            <div class="row">
                <div class="col-lg-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Kitchen Sink
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">

                                    <thead>
                                        <tr>
                                            <th>id_transaksi</th>
                                            <th>Customer</th>
                                            <th>Tgl Pesan</th>
                                            <th>Status Order</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php foreach ($transaksi as $row) { ?>
                                        <tr>
                                            <td><?php echo $row['id'] ?></td>
                                            <td><?php echo $row['nama_lengkap'] ?></td>
                                            <td><?php echo $row['tanggal_pesan'] ?></td>
                                            <td><?php echo $row['status_order'] ?></td>
                                            <td> <?php echo '<a href="'.base_url().'c_transaksi/detailTransaksi/'.$row['id'].'"
                                            role="button" class="btn btn-warning">Detail</a>
                                            <a href="'.base_url().'c_transaksi/hapusTransaksi/'.$row['id'].'"
                                            role="button" class="btn btn-danger" onClick="return  doconfirm();">Hapus</a>'; ?></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                     <script>
                        function doconfirm()
                        {
                            job=confirm("Apakah yakin akan dihapus?");
                            if(job!=true)
                            {
                                return false;
                            }
                        }
                    </script>
                </div>
            </div>
        <!-- end page-wrapper -->
