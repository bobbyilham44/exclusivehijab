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
		<link href="<?php echo base_url()?>assets/plugins/bootstrap/bootstrap.css" rel='stylesheet' type='text/css' />
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
    <!-- <script src="<?php echo base_url()?>assets/js/freelancer.js"></script>  -->
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
		<!----start-top-nav-script---->
		<script>
			$(function() {
				var pull 		= $('#pull');
					menu 		= $('nav ul');
					menuHeight	= menu.height();
				$(pull).on('click', function(e) {
					e.preventDefault();
					menu.slideToggle();
				});
				$(window).resize(function(){
	        		var w = $(window).width();
	        		if(w > 320 && menu.is(':hidden')) {
	        			menu.removeAttr('style');
	        		}
	    		});
			});
		</script>
		<!----//End-top-nav-script---->
		<!----start-slider-script---->
			<script src="<?php echo base_url()?>assets/js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager: true,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });

			    });
			  </script>
			<!----//End-slider-script---->
			<!---- Slider ------>
	 <link rel="stylesheet" href="<?php echo base_url()?>assets/css/slider.css" type="text/css" />
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.cslider.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/modernizr.custom.28468.js"></script>
	<script type="text/javascript">
			$(function() {

				$('#da-slider').cslider({
					autoplay	: true,
					bgincrement	: 450
				});

			});
		</script>
		<script type="text/javascript">
			$(function() {

				$('#da-slider1').cslider({
					autoplay	: true,
					bgincrement	: 450
				});

			});
		</script>
</head>
	<body>
		<!-----start-top-header----->
		<div id="home" class="top-header">
		<!-- Slideshow 4 -->
			    <div  id="top" class="callbacks_container">
			      <ul class="rslides" id="slider4">
              <?php foreach ($slider as $row) { ?>
              <li>
			          <img src="<?php echo base_url().$row['gambar'] ?>" alt="">
			          <div class="caption text-center">
			          	<div class="slide-text-info">
			          		<h2><?php echo $row['header1'] ?></h2>
                    <h3><?php echo $row['header2'] ?></h3>
			          		<a href="<?php echo base_url().'beranda/viewSlider/'.$row['id_slider']?>"><img style="width:inherit"src="<?php echo base_url()?>assets/images/learnmorebtn.png"/></a>
			          	</div>
			          </div>
			        </li>
              <?php } ?>
			      </ul>
			    </div>
			    <div class="clear"> </div>
			<!---- //End-slider----->
		<!-----start-conatiner---->
		<div class="container">
			<!-----start-header---->
			<div class="header">
				<div class="container">
				<div class="logo">
					<a href="#home"><img src="<?php echo base_url()?>assets/images/header.png" height="50" width="320"/></a>
				</div>
				<!----start-top-nav---->
				 <nav class="top-nav">
					<ul class="top-nav">
						<li class="active"><a href="#home" class="scroll">Home</a></li>
						<li class="page-scroll"><a href="#menu" class="scroll">Menu</a></li>
						<li class="page-scroll"><a href="#stan" class="scroll">Stan</a></li>
						<li class="page-scroll"><a href="#team" class="scroll">Team</a></li>
						<li class="contatct-active" class="page-scroll"><a href="#app" class="scroll">App </a></li>
						<li class="page-scroll"><a href="#contact" class="scroll">Contact</a></li>
					</ul>
					<a href="#" id="pull"><img src="<?php echo base_url()?>assets/images/nav-icon.png" title="menu" /></a>
				  </nav>

				<div class="clear"> </div>
			</div>
			<!-----//End-header---->
			</div>
			<!-----start-top-header----->
		</div>
		</div>
    <!----- start-gallery----->
    <div id="menu" class="gallery">
      <div class="container">
        <h3 style="text-align:center">Our Menu</h3>
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

		<!----- start-gallery----->
		<div id="stan" class="gallery">
			<div class="container">
				<h3 style="text-align: center">Our Stan</h3>
				<!-- <p>Mauris euismod ultrices nisl sit amet luctus. Donec volutpat arcu ullamcorper facilisis vulputate. Sed auctor pulvinar ornare. Donec gravida. </p> -->
			</div>
			<div id="owl-demo4" class="owl-carousel owl-carousel2">
                        <?php foreach ($stan as $row) { ?>
				                <div class="item">
				                	<img style="height:325px ; width:325px;"class="lazyOwl" data-src="<?php echo base_url().$row['gambar1']?>" alt="Lazy Owl Image">
				                	<a href="<?php echo base_url().'beranda/viewStan/'.$row['id_stan']?>">
                          <p class="img_slider"><?php echo $row['nama_stan'] ?></p></a>
				                </div>
                        <?php } ?>
			           </div>
		</div>
		<!----- //End-gallery----->

    <!-----start-features----->
          <div id="team" class="features text-center">
            <div class="container">
              <h2>The Team</h2>
              <!---- start-features-grids------>
                <div class="features-grids text-center">
                  <div class="col-md-4 features-grid">
                    <!-- <span> </span> -->
                    <img src="assets/images/PAKAW.png" style="width: auto">
                    <h3>Arief Wibisono</h3>
                    <p>Lecture Advisor</p>
                  </div>
                  <div class="col-md-4 features-grid">
                    <!-- <span class="t-icon1"> </span> -->
                    <img src="assets/images/DAUD.png" style="width: auto">
                    <h3>Daud Muhajir</h3>
                    <p>Chief Executive Officer</p>
                  </div>
                  <div class="col-md-4 features-grid">
                    <!-- <span class="t-icon2"> </span> -->
                    <img src="assets/images/MASDEWA.png" style="width: auto">
                    <h3>Dewangga Prasetya Praja</h3>
                    <p>Chief Technology Officer</p>
                  </div>
                  <div class="clearfix"> </div>
                </div>
              <!---- //End-features-grids------>
              <div class="features-grids text-center">
                  <div class="col-md-4 features-grid">
                   <img src="assets/images/FIRDHA.png" style="width: auto">
                    <h3>Firdha Rizki Aulia</h3>
                    <p>Chief Marketing Officer and Designer</p>
                  </div>
                  <div class="col-md-4 features-grid">
                     <img src="assets/images/INDRO.png" style="width: auto">
                      <h3>Indra Purnama</h3>
                    <p>Human Capital Management</p>
                  </div>
                  <div class="col-md-4 features-grid">
                   <img src="assets/images/FINSA.png" width="300" height="300">
                    <h3>Finsa Ayu Firnanda</h3>
                    <p>Chief Financial Officer</p>
                  </div>
            </div>
          </div>
          <!-----//End-features----->
      <br>
      <br>
		<!-----start-download---->
		<div id="app" class="download">
			<div class="container">
				<div class="col-md-5 download-left">
					<img src="<?php echo base_url()?>assets/images/LOGO2.png" height="300" width="300"></img>
				</div>
				<div class="col-md-7 download-right">
				  <p>Believe me, <br />you don't wanna  <br />miss this app.</p>
          <ul class="list-unstyled list-inline">
						<li><a href="#"><image height="65" width="215" src="<?php echo base_url()?>assets/images/dwnldbtn.png"</a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-----//End-download---->
		<!----- start-Compatibility----->
		<div id="contact" class="compatibility">
			<div class="container">
				<h3>Contact Us</h3>
				<div class="compatibility-grids">
          <div class="col-md-5 footer-right text-left">
            <?php echo validation_errors(); ?>
            <?php echo form_open('beranda/insertPesan'); ?>
              <div class="form-group">
                <input name="email" class="form-control" type="email" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input name="nama" class="form-control" type="text" placeholder="Nama">
              </div>
              <div class="form-group">
                <input name="judul" class="form-control" type="text" placeholder="Judul">
              </div>
              <div class="form-group">
                <textarea class="form-control" placeholder="Feedback" name="konten" rows="5"></textarea>
              </div>
              <input type="submit" value="Submit" />
            <?php echo form_close(); ?>
          </div>
					<div class="col-md-6 compatibility-right">
            <br><h4>Keep in touch with us!</h4>
						<br><p>From our social media below, you can make a connection with our new feeds!</p><br>
						<ul class="list-unstyled list-inline">
							<li><a href="https://line.me/R/ti/p/%40lmh0249z" target="_blank"><img width="50" height="50" src="<?php echo base_url()?>assets/images/line.png"></a><br><br></li>
							<li><a href="https://www.instagram.com/d.cangkring" target="_blank"><img width="50" height="50" src="<?php echo base_url()?>assets/images/ig.png"></a><br><br></li>
							<li><a href="https://www.facebook.com/dcangkring17" target="_blank"><img width="40" height="50" src="<?php echo base_url()?>assets/images/fb.png"></a><br><br></li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<!----- //End-Compatibility----->
		<!-----start-footer----->
		<div class="footer">
			<div class="container">
				<div class="col-md-12 footer-left">
					<p>Template by <a href="http://w3layouts.com/">W3layouts</a></p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<a href="#top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
			<!---- start-smoth-scrolling---->
			<script type="text/javascript">
				$(function() {
				  $('a[href*=#]:not([href=#])').click(function() {
				    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

				      var target = $(this.hash);
				      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				      if (target.length) {
				        $('html,body').animate({
				          scrollTop: target.offset().top
				        }, 1000);
				        return false;
				      }
				    }
				  });
					});
			</script>
			<!---- //End-smoth-scrolling---->
		</div>
		<!-----//End-footer----->
		<!-----//End-conatiner---->
	</body>
</html>
