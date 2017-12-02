<!--  page-wrapper -->
       <div id="page-wrapper">

            <div class="row">
                 <!--page header-->
                <div class="col-lg-12">
                    <h1 class="page-header">Daftar Produk</h1>
                </div>
                 <!--end page header-->
                 <?php echo $this->session->flashdata('suksesproduk'); ?>
            </div>
            <div class="row">
                 <!--Default Pannel, Primary Panel And Success Panel   -->
                 <?php foreach($produk as $row) { ?>
                <div class="col-lg-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <?php echo $row['nama_produk'] ?>
                        </div>
                        <div class="panel-body">
                            <img src="<?php echo base_url().$row['image']?>" width="190px" height="190px">
                        </div>
                        <div class="panel-footer">
                          <a href="<?php echo base_url().'c_admin/editProduk/'.$row['id_produk']?>">Edit</a>
                          <a style="float:right" href="<?php echo base_url().'c_admin/hapusProduk/'.$row['id_produk']?>" onClick="return  doconfirm();">Hapus</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
                  <!--End Default Pannel, Primary Panel And Success Panel   -->
            </div>
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
        <!-- end page-wrapper -->
