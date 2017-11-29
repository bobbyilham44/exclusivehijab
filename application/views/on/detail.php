
			<li class="active">Detail</li>
		</ol>
	</div>
	<!-- //breadcrumb -->
	<!--  about-page -->
	<div class="about">
		<div class="container"> 
			<h3 class="w3ls-title w3ls-title1">Detail Menu</h3>
			<div style="text-align: center; ">
				<img src="<?php echo base_url()."/assets/images/".$image; ?>" alt="" style="align:middle">
				<h2><?php echo $jenis_menu;?></h2>
				<p>Harga : Rp. <?php echo $harga;?></p>
				<p><?php echo $deskripsi;?></p> 
				<?=anchor('Member/menu/','Kembali' , [
											'class'	=> 'btn btn-primary',
											'role'	=> 'button'
										])?>
			</div>
		</div>
		
	</div>