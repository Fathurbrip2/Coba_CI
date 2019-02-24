
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>

    <link rel="stylesheet" href="<?php echo base_url('vendor/bootstrap/css/bootstrap-ss.min.css'); ?>">
  	<script src="<?php echo base_url('vendor/jquery/jquery-3.3.1.min.js'); ?>" ></script>
    <script src="<?php echo base_url('vendor/bootstrap/js/bootstrap.min.js'); ?>" ></script>
  </head>
  <body>

        <?php $this->load->view('menu'); ?>

<div class="container">
<div class="card border-primary">
   <div class="card-header"><?php echo $this->uri->segment(1);?></div>
      <div class="card-body">
        <?php $this->load->view($page); ?>
      </div>
    </div>
</div>
  </body>
</html>