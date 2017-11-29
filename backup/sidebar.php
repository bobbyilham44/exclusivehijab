<!--slider menu-->

<div class="clearfix"> </div>

<div class="sidebar-menu" style="height: 100vh; position:fixed;">
    <div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span> 
        <!--<img id="logo" src="" alt="Logo"/>--> 
        </a> </div>		  
    <div class="menu">
        <ul id="menu" >
            <li id="menu-home" ><a href="<?php echo base_url().'index.php/MyController/beranda/'?><?php echo $this->session->userdata('username') ?>"><i class="fa fa-tachometer"></i><span>Beranda</span></a>
            </li>
            <li><a href="#"><i class="fa fa-envelope"></i><span>Perpesanan</span><span class="fa fa-angle-right" style="float: right"></span></a>
                <ul id="menu-academico-sub" >
                    <li id="menu-academico-avaliacoes" ><a href="<?php echo base_url().'index.php/MyController/readData'?>">Orderan</a></li>
                    <li id="menu-academico-avaliacoes" ><a href="<?php echo base_url().'index.php/MyController/pesanMasuk'?>">Pesan Masuk</a></li>
                </ul>
            </li>
            <li><a href="#"><i class="fa fa-shopping-cart"></i><span>Pemadam Kelaparan</span><span class="fa fa-angle-right" style="float: right"></span></a>
                <ul id="menu-academico-sub" >
                    <li id="menu-academico-avaliacoes" ><a href="<?php echo base_url().'index.php/MyController/updateProduk'?>">Update Produk</a></li>
                    <li id="menu-academico-boletim" ><a href="<?php echo base_url().'index.php/MyController/history'?>">History Penjualan</a></li>

                </ul>
            </li>
        </ul>
    </div>
</div>

<div class="clearfix"> </div>


<!--slide bar menu end here-->
<script>
    var toggle = true;

    $(".sidebar-icon").click(function() {                
        if (toggle)
        {
            $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
            $("#menu span").css({"position":"absolute"});
        }
        else
        {
            $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
            setTimeout(function() {
                $("#menu span").css({"position":"relative"});
            }, 400);
        }               
        toggle = !toggle;
    });
</script>
<!--scrolling js-->
<script src="<?php echo base_url();?>/assets/js/jquery.nicescroll.js"></script>
<script src="<?php echo base_url();?>/assets/js/scripts.js"></script>
<!--//scrolling js-->
<script src="<?php echo base_url();?>/assets/js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>                     