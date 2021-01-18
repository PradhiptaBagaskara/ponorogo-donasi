<!DOCTYPE html>
<html>
<head>
    <link href="<?php echo base_url('assets/front/images/LOGO LMI.png'); ?>" rel="shortcut icon">
    <?php $this->load->view('layout/meta'); ?>
	<title>Detail Donasi - Ponorogo Aksi</title>
	<?php $this->load->view('layout/css'); ?>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css">
</head>
<body>

<?php $this->load->view('layout/header_menu'); ?>

<!--main-->

    <div class="container-fluid">
        <?php
			foreach($donasi as $row) {
		?>
          <div class="col-md-12 text-center mt-inner">
           <h1 class="elip font-bold" style="margin-bottom: 30px"><?php echo $row->nama_donasi; ?></h1>
           
        <div class="col-md-6" style="padding: 50px">
        <div class="row">
  <div class="col-md-12 text-left">    
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
       <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        <!-- <li data-target="#carousel-example-generic" data-slide-to="3"></li> -->
        <!-- <li data-target="#carousel-example-generic" data-slide-to="4"></li> -->
				<li data-target="#carousel-example-generic" data-slide-to="3"></li>
       </ol>
		<div id="row bg-img" id="rentyour">
					<div class="carousel-inner">
						<div class="item active">
                       <img src="<?php echo base_url('assets/'.$row->img1); ?>" height="80%" width="110%"/>
					</div>
					<div class="item">
                       <img src="<?php echo base_url('assets/'.$row->img2); ?>" height="80%" width="110%"/>
					</div>
					<div class="item">
                       <img src="<?php echo base_url('assets/'.$row->img3); ?>" height="80%" width="110%"/>
					</div>
					<div class="item">
                       <img src="<?php echo base_url('assets/'.$row->img4); ?>" height="80%" width="110%"/>
					</div>
				
				</div>
			</div>
		</div>
	</div>
</div>
        

      
        <div class="thumbnail col-md-6">
        <!-- <h3 class="eclip text-left mt-inner" >Kategori : <?php echo $row->kategori_donasi; ?></h3> -->
        <table class="table">
                <tr class="eclip text-left mt-inner">
                <td>Tercapai</td>
                <td>      <b><?php echo 'Rp '.nominal($row->perolehan_donasi); ?></b>    </td>
                </tr>
                <tr class="eclip text-left mt-inner">
                <td>Target</td>
                <td>      <b><?php echo 'Rp '.nominal($row->target_donasi); ?></b>    </td>
                </tr>
                <tr class="eclip text-left mt-inner">
                <td>Berakhir Tgl</td>
                <td>      <b><?php echo tgl_indo($row->masa_donasi); ?></b>    </td>
                </tr>
                <tr class="eclip text-left mt-inner">
                <td>Sisa Hari</td>
                <td>      <b><?php echo  $row->masa_aktif; ?></b>    </td>
                </tr>
        </table>
        <a href="<?php echo base_url('/Donatur/register/'.$row->id_donasi); ?>" class="btn btn-success btn-lg btn-block" role="button">Donasi Sekarang</a>
        </div>
        <h4 class="eclip text-left mt-inner"><?php echo $row->deskripsi_donasi; ?></h4>
        <?php } ?>
    </div>
    </div>
</div>



    <script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" 
    src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
	
    <script>
		$('#datepicker').datepicker({
			format: 'yyyy-mm-dd',
			startDate: '+1d',
			todayHighlight: true
		});
	</script>

	<?php $this->load->view('layout/js'); ?>
</body>
</html>