<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info - Dcangkring</title>
    <!-- Core CSS - Include with every page -->
    <link href="<?php echo base_url()?>assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>assets/css/main-style.css" rel="stylesheet" />

</head>

<body>
            <div style="padding-left:25px; padding-right:25px" class="row">
                 <!--page header-->
                <div class="col-lg-12">
                    <h1 class="page-header">Info D-Cangkring</h1>
                </div>
                 <!--end page header-->
            </div>
            <div style="padding-left:25px; padding-right:25px" class="row">
                <!--Info Pannel, Warning Panel And Danger Panel   -->
                <div class="col-lg-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Info Panel
                        </div>
                        <div class="panel-body">
                            <?php echo $slider['konten']; ?>
                        </div>
                    </div>
                </div>
                <a href="<?php echo base_url() ?>" role="button" class="btn btn-info">Kembali</a>
                <!--End Info Pannel, Warning Panel And Danger Panel   -->
            </div>

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="<?php echo base_url()?>assets/plugins/jquery-1.10.2.js"></script>
    <script src="<?php echo base_url()?>assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url()?>assets/plugins/pace/pace.js"></script>
    <script src="<?php echo base_url()?>assets/scripts/siminta.js"></script>

</body>

</html>
