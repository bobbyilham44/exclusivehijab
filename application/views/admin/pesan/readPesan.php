<!--  page-wrapper -->
        <div id="page-wrapper">


            <div class="row">

                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Daftar Inbox</h1>
                </div>
                 <!-- end  page header -->
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
                                            <th>Tanggal Pesan</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Telepon</th>
                                            <th>Pesan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php foreach ($pesan as $row) { ?>
                                        <tr>
                                            <td><?php echo $row['ib_time'] ?></td>
                                            <td><?php echo $row['ib_nama'] ?></td>
                                            <td><?php echo $row['ib_email'] ?></td>
                                            <td><?php echo $row['ib_telfon'] ?></td>
                                            <td><?php echo $row['ib_pesan'] ?></td>
                                            <td> <?php echo '<a href="'.base_url().'c_admin/hapusPesan/'.$row['ib_nama'].'"
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
