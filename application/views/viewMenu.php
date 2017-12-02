<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
	<head>
    <title>D-CANGKRING</title>
    <!-- Core CSS - Include with every page -->
    <link href="<?php echo base_url()?>assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>assets/css/main-style.css" rel="stylesheet" />
		<link href="<?php echo base_url()?>assets/plugins/bootstrap/bootstrap.css" rel='stylesheet' type='text/css' />
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/freelancer.js"></script>
		 <!-- Custom Theme files -->
		<link href="<?php echo base_url()?>assets/css/theme-style.css" rel='stylesheet' type='text/css' />
    <link href="<?php echo base_url()?>assets/css/freelancer.css" rel='stylesheet' type='text/css' />
   		 <!-- Custom Theme files -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<!----font-Awesome----->
   		<link rel="stylesheet" href="<?php echo base_url()?>assets/css/font-awesome.min.css">
   		<!----font-Awesome----->
		<!----webfonts---->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
		<!----//webfonts---->

		<!-----start-conatiner---->
    <div style="padding-left:25px; padding-right:25px" class="row">
         <!--page header-->
        <div class="col-lg-12">
            <h1 class="page-header">Menu D-Cangkring</h1>
        </div>
         <!--end page header-->
    </div>
    <div style="padding-left:25px; padding-right:25px" class="row">
         <!--Default Pannel, Primary Panel And Success Panel   -->
        <div class="col-lg-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Gambar
                </div>
                <div class="panel-body">
                    <img src="<?php echo base_url().$edit['gambar']?>" width="300px" height="300px">
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <?php echo $edit['nama_produk']; ?>
                </div>
                <div class="panel-body">
                    <?php echo $edit['konten']; ?>
                </div>
            </div>
        </div>
        <a href="<?php echo base_url() ?>" role="button" class="btn btn-info">Kembali</a>
    </div>

    <!----- start-gallery----->
    <div id="menu" class="gallery">
      <div class="container">
        <h3 style="text-align:center">More Menu</h3>
        <!-- <p>Mauris euismod ultrices nisl sit amet luctus. Donec volutpat arcu ullamcorper facilisis vulputate. Sed auctor pulvinar ornare. Donec gravida. </p> -->
      </div>
      <div id="owl-demo3" class="owl-carousel owl-carousel2">
                        <?php foreach ($produk as $row) { ?>
                        <div class="item">
                          <img style="height:325px ; width:325px;"class="lazyOwl" data-src="<?php echo base_url().$row['gambar']?>" alt="Lazy Owl Image">
                          <a href="<?php echo base_url().'beranda/viewMenu/'.$row['id_produk']?>">
                          <p class="img_slider"><?php echo $row['nama_produk'] ?></p></a>
                        </div>
                        <?php } ?>
      </div>
    </div>
    <!----- //End-gallery----->

    <!-- Prettify -->
     <link href="<?php echo base_url()?>assets/css/owl.carousel.css" rel="stylesheet">
       <script src="<?php echo base_url()?>assets/js/owl.carousel.js"></script>
       <script>
         $(document).ready(function() {
           $("#owl-demo , #owl-demo1").owlCarousel({
             items : 1,
             lazyLoad : true,
             autoPlay : true,
           });
         });
       </script>
       <script>
         $(document).ready(function() {
           $("#owl-demo3").owlCarousel({
             items : 4,
             lazyLoad : true,
             autoPlay : true,
             navigation: false,
             pagination: false,
           });
         });
       </script>
       <script>
         $(document).ready(function() {
           $("#owl-demo4").owlCarousel({
             items : 4,
             lazyLoad : true,
             autoPlay : true,
             navigation: false,
             pagination: false,
           });
         });
       </script>
   <!----- //End-Share-instantly-slider---->
		</div>
		<!-----//End-footer----->
		<!-----//End-conatiner---->

	</body>
</html>
