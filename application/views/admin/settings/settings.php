<!DOCTYPE html>
<html lang="en">
<head>

<?php $this->load->view('admin/layout/meta'); ?>
<title>Edit Settings | Ponorogo Aksi</title>
<?php $this->load->view('admin/layout/css'); ?>

<body class="sidebar-mini">
<div class="wrapper"> 
    <?php $this->load->view('admin/layout/header') ?>
    <?php $this->load->view('admin/layout/sidebar') ?>

    <div class="content-wrapper">
        <section class="content-header">
          <h1>Settings</h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-file"></i> Settings</a></li>
            <li class="active"><i class="fa fa-dashboard"></i> Edit</li>
          </ol>
        </section>
      
        <section class="content container-fluid">
          <div class="col-md-5 col-md-offset-3">

            <?php 
                if($this->session->flashdata('message')) { 
            ?>
              <div role="alert" class="alert alert-success">
                <?php echo $this->session->flashdata('message'); ?>
              </div>
            <?php 
                } 
                
            ?>
            
              <form action="<?php echo base_url('admin/Settings/update'); ?>" method="post" class="chart-box">
                <h4>Update Data Settings</h4>
                <br/>
                <?php foreach ($settings as $key): ?>

                <?php if ($key->code == 'bank' |  $key->code == 'wa'):  ?>

                <div class="row">
                <input class="form-control" value="<?=$key->id?>" name="id_<?=$key->id?>" id="basicInput" type="hidden" />
                  <div class="col-md-12">
                    <fieldset class="form-group">
                      <label><?=$key->name?></label>
                      <input class="form-control" value="<?=$key->value?>" name="value_<?=$key->id?>" id="basicInput" type="text" />
                    </fieldset>
                <?php if ($key->code == 'bank'):  ?>

                    <fieldset class="form-group">
                      <label>Nama Pemilik akun bank <?=$key->name?> </label>
                      <input class="form-control" value="<?=$key->description?>" name="an_<?=$key->id?>" id="basicInput" type="text" />
                    </fieldset>
                <?php endif ?>

                  </div>
                </div>
                <?php else: ?>
                <div class="row">
                <input class="form-control" value="<?=$key->id?>" name="id_<?=$key->id?>" id="basicInput" type="hidden" />
                  <div class="col-md-12">
                    <fieldset class="form-group">
                      <label><?=$key->name?></label>
                      <textarea class="form-control" name="value_<?=$key->id?>" rows="4" cols="50"><?=$key->value?></textarea>
                    </fieldset>
                  </div>
                </div>
                <?php endif ?>
                <?php endforeach  ?>
    
        
                <div class="row">
                  <div class="col-md-12">
                    <fieldset class="form-group">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </fieldset>
                  </div>
                </div>
              </form>
          </div>
        </section>

        
    </div> 

    <?php $this->load->view('admin/layout/footer'); ?>
</div>

<?php $this->load->view('admin/layout/js'); ?>
<script type="text/javascript" src="<?php echo base_url('assets/bower_components/jquery-maskmoney/dist/jquery.maskMoney.min.js'); ?>"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#maskMoney').maskMoney({prefix:'Rp. ', thousands:'.', decimal:',', precission:0});
    });
</script>
<script>
		$('#datepicker').datepicker({
			format: 'yyyy-mm-dd',
			startDate: '+1d',
			todayHighlight: true
		});
	</script>

</body>
</html>